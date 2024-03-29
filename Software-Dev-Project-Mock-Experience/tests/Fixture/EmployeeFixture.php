<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeeFixture
 */
class EmployeeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'employee';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'employee_id' => 1,
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'Email' => 'Lorem ipsum dolor sit amet',
                'Phone' => 'Lorem ipsum d',
            ],
        ];
        parent::init();
    }
}
