<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContentTable Test Case
 */
class ContentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContentTable
     */
    protected $Content;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Content',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Content') ? [] : ['className' => ContentTable::class];
        $this->Content = $this->getTableLocator()->get('Content', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Content);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ContentTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
