<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookingPaymentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookingPaymentsTable Test Case
 */
class BookingPaymentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookingPaymentsTable
     */
    protected $BookingPayments;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BookingPayments',
        'app.Bookings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BookingPayments') ? [] : ['className' => BookingPaymentsTable::class];
        $this->BookingPayments = $this->getTableLocator()->get('BookingPayments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BookingPayments);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BookingPaymentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BookingPaymentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
