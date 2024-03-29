<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CusersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CusersTable Test Case
 */
class CusersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CusersTable
     */
    protected $Cusers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Cusers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cusers') ? [] : ['className' => CusersTable::class];
        $this->Cusers = $this->getTableLocator()->get('Cusers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cusers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CusersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
