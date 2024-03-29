<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuoteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuoteTable Test Case
 */
class QuoteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuoteTable
     */
    protected $Quote;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Quote',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Quote') ? [] : ['className' => QuoteTable::class];
        $this->Quote = $this->getTableLocator()->get('Quote', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Quote);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\QuoteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
