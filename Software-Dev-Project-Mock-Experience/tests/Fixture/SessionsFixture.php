<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SessionsFixture
 */
class SessionsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'session_id' => 1,
                'session_date' => '2023-05-22',
                'session_start' => '06:04:19',
                'session_notes' => 'Lorem ipsum dolor sit amet',
                'customer_first_name' => 'Lorem ipsum dolor sit amet',
                'customer_last_name' => 'Lorem ipsum dolor sit amet',
                'customer_email' => 'Lorem ipsum dolor sit amet',
                'customer_phone_number' => 'Lorem ipsum dolor sit amet',
                'service_name' => 'Lorem ipsum dolor sit amet',
                'employee_id' => 1,
                'quote_id' => 1,
                'service_id' => 1,
            ],
        ];
        parent::init();
    }
}
