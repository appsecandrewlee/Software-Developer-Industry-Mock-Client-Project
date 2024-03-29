<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carts Controller
 *
 * @property \App\Model\Table\CartsTable $Carts
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartsController extends AppController
{
    public static $customerNumber = 0;

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses'],
        ];
        $carts = $this->paginate($this->Carts);

        $this->set(compact('carts'));
    }

    /**
     * View method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cart = $this->Carts->get($id, [
            'contain' => ['Courses'],
        ]);

        $this->set(compact('cart'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cart = $this->Carts->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();

            $course = $this->Carts->Courses->get($data['course_id']);

            $totalCost = ($data['quantity'] + 1) * $course->cost;

            $cart->course_id = $data['course_id'];
            $cart->quantity = $data['quantity'] + 1;
            $cart->cost = $totalCost;
            if ($this->Carts->save($cart)) {
                $RedirectURL = ['controller' => 'Stripes', 'action' => 'stripe'];
                $this->redirect($RedirectURL);
            } else {
                debug($cart->getErrors());
                $this->Flash->error(__('The cart could not be saved. Please, try again.'));
            }
        }
        $courses = $this->Carts->Courses->find('list', ['limit' => 200]);

        $this->set(compact('cart', 'courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cart = $this->Carts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cart = $this->Carts->patchEntity($cart, $this->request->getData());
            if ($this->Carts->save($cart)) {
                $this->Flash->success(__('The cart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cart could not be saved. Please, try again.'));
        }
        $courses = $this->Carts->Courses->find('list', ['limit' => 200])->all();
        $this->set(compact('cart', 'courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cart = $this->Carts->get($id);
        if ($this->Carts->delete($cart)) {
            $this->Flash->success(__('The cart has been deleted.'));
        } else {
            $this->Flash->error(__('The cart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function confirmation()
    {
        $cart = $this->Carts->find('all')->last();

        if ($cart) {

            $course = $this->Carts->Courses->get($cart->course_id);
            $this->set(compact('cart', 'course'));

            $directory_save = '../FIT3047Project/templates/Admin/receipt/receipt';

            $referenceNumber = rand(1000000000, 9999999999);

            $confirmationData = "Confirmation\n\n";
            $confirmationData .= "Course: " . $course->name . "\n";
            $confirmationData .= "Quantity: " . $cart->quantity . "\n";
            $confirmationData .= "Total cost: " . $cart->cost . "\n";

            $this->set(compact('referenceNumber'));

            $confirmationData .= "Reference Number: " . $referenceNumber . "\n";

            // Count the number of files in the directory
            $files = glob($directory_save . '*.txt');
            $file_count = count($files);
            $next_file_number = $file_count + 1;

            $filename = 'confirmation_' . $next_file_number . '.txt';

            file_put_contents($directory_save . $filename, $confirmationData);
        }
    }
}

