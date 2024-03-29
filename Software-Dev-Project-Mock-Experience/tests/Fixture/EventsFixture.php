<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsFixture
 */
class EventsFixture extends TestFixture
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
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'start' => '2023-05-07',
                'start_time' => '09:32:48',
                'end' => '2023-05-07',
                'end_time' => '09:32:48',
            ],
        ];
        parent::init();
    }
}
