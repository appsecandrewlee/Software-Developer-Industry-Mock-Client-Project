<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

<<<<<<< HEAD
<<<<<<< HEAD
use App\Controller\CoursesController;
=======
>>>>>>> 1ee48340c61fd9f6ee92e37f79be7e8ca3233759
=======
use App\Controller\CoursesController;
>>>>>>> origin/cindy
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CoursesController Test Case
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @uses \App\Controller\CoursesController
=======
 * @uses \App\Controller\Admin\CoursesController
>>>>>>> 1ee48340c61fd9f6ee92e37f79be7e8ca3233759
=======
 * @uses \App\Controller\CoursesController
>>>>>>> origin/cindy
 */
class CoursesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Courses',
        'app.Carts',
    ];

    /**
     * Test index method
     *
     * @return void
<<<<<<< HEAD
<<<<<<< HEAD
     * @uses \App\Controller\CoursesController::index()
=======
     * @uses \App\Controller\Admin\CoursesController::index()
>>>>>>> 1ee48340c61fd9f6ee92e37f79be7e8ca3233759
=======
     * @uses \App\Controller\CoursesController::index()
>>>>>>> origin/cindy
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
<<<<<<< HEAD
<<<<<<< HEAD
     * @uses \App\Controller\CoursesController::view()
=======
     * @uses \App\Controller\Admin\CoursesController::view()
>>>>>>> 1ee48340c61fd9f6ee92e37f79be7e8ca3233759
=======
     * @uses \App\Controller\CoursesController::view()
>>>>>>> origin/cindy
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
<<<<<<< HEAD
<<<<<<< HEAD
     * @uses \App\Controller\CoursesController::add()
=======
     * @uses \App\Controller\Admin\CoursesController::add()
>>>>>>> 1ee48340c61fd9f6ee92e37f79be7e8ca3233759
=======
     * @uses \App\Controller\CoursesController::add()
>>>>>>> origin/cindy
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
<<<<<<< HEAD
<<<<<<< HEAD
     * @uses \App\Controller\CoursesController::edit()
=======
     * @uses \App\Controller\Admin\CoursesController::edit()
>>>>>>> 1ee48340c61fd9f6ee92e37f79be7e8ca3233759
=======
     * @uses \App\Controller\CoursesController::edit()
>>>>>>> origin/cindy
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
<<<<<<< HEAD
<<<<<<< HEAD
     * @uses \App\Controller\CoursesController::delete()
=======
     * @uses \App\Controller\Admin\CoursesController::delete()
>>>>>>> 1ee48340c61fd9f6ee92e37f79be7e8ca3233759
=======
     * @uses \App\Controller\CoursesController::delete()
>>>>>>> origin/cindy
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
