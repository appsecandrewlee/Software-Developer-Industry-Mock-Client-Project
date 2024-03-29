<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersFixture
 */
class CustomersFixture extends TestFixture
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
                'dob' => '2023-05-04',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum d',
                'street' => 'Lorem ipsum dolor sit amet',
                'suburb' => 'Lorem ipsum dolor sit amet',
                'post_code' => 'Lorem ip',
                'state' => 'Lorem ipsum dolor sit amet',
                'avatar' => 'Lorem ipsum dolor sit amet',
                'role' => 1,
                'nonce' => 'Lorem ipsum dolor sit amet',
<<<<<<< HEAD
                'nonce_expiry' => 1683173118,
=======
                'nonce_expiry' => 1683173159,
>>>>>>> origin/cindy
            ],
        ];
        parent::init();
    }
}
