<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Courses Controller
 *
 * @property \App\Model\Table\CoursesTable $Courses
 * @method \App\Model\Entity\Course[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursesController extends AppController
{


    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
        $this->loadComponent('Authorization.Authorization');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Exception
     */
    public function index()
    {
        $courses = $this->paginate($this->Courses);

        $this->set(compact('courses'));
    }

    /**
     * View method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => ['Carts'],
        ]);

        $this->set(compact('course'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $course = $this->Courses->newEmptyEntity();
        if ($this->request->is('post')) {
            $course = $this->Courses->patchEntity($course, $this->request->getData());

            if (!empty($this->request->getData('image'))) {
                $image = $this->request->getData('image');
                $imageName = $image->getClientFilename();
                $course->image = $imageName;
                $image->moveTo(WWW_ROOT . 'img/courses_uploads/' . $imageName);
            }

            if ($this->Courses->save($course)) {
                $this->Flash->success(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $this->set(compact('course'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $course = $this->Courses->patchEntity($course, $this->request->getData());

            if (!$course->getErrors) {
                $image = $this->request->getData('image');

                $imageName  = $image->getClientFilename();

                if ($course){
                    $targetPath = WWW_ROOT . 'img/courses_uploads/' . $imageName;
                    $image->moveTo($targetPath);
                    $imgpath = WWW_ROOT . 'img/courses_uploads/' . $course->image;
                    if (file_exists($imgpath)) {
                        unlink($imgpath);
                    }
                    $course->image = 'user-img/' . $imageName;
                }
            }

            if ($this->Courses->save($course)) {
                $this->Flash->success(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $this->set(compact('course'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $course = $this->Courses->get($id);


        try {
            $this->Courses->delete($course);
            $this->Flash->success(__('The course has been deleted.'));
        } catch (\Exception $e) {
            $this->Flash->error(__('Cannot delete this course because it is associated with one or more shopping carts.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
