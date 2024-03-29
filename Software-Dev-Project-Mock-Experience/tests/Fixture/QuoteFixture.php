<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuoteFixture
 */
class QuoteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'quote';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'quote_id' => 1,
                'quote_date' => '2023-04-09',
                'quote_cost' => 1,
                'id' => 1,
            ],
        ];
        parent::init();
    }
}
