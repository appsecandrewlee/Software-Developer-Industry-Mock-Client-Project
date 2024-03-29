<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CusersFixture
 */
class CusersFixture extends TestFixture
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
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'dateofbirth' => '2023-04-14',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum d',
                'street' => 'Lorem ipsum dolor sit amet',
                'suburb' => 'Lorem ipsum dolor sit amet',
                'post_code' => 'Lorem ip',
                'state' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
