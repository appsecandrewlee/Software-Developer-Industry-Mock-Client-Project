<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\SessionsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\SessionsController Test Case
 *
 * @uses \App\Controller\SessionsController
 */
class SessionsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sessions',
        'app.Employees',
        'app.Quotes',
        'app.Services',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\SessionsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\SessionsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\SessionsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\SessionsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\SessionsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test confirmation method
     *
     * @return void
     * @uses \App\Controller\SessionsController::confirmation()
     */
    public function testConfirmation(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test calendar method
     *
     * @return void
     * @uses \App\Controller\SessionsController::calendar()
     */
    public function testCalendar(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
