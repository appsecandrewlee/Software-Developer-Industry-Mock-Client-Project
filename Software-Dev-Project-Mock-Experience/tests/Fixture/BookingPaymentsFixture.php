<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookingPaymentsFixture
 */
class BookingPaymentsFixture extends TestFixture
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
                'booking_pay_id' => 1,
                'booking_id' => 1,
                'booking_pay_amount' => 1,
                'booking_pay_desc' => 'Lorem ipsum dolor sit amet',
                'booking_pay_type' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
