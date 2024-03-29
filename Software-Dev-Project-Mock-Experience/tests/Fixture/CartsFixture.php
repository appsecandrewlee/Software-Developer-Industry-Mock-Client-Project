<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CartsFixture
 */
class CartsFixture extends TestFixture
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
                'course_id' => 1,
                'quantity' => 1,
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'cost' => 1,
>>>>>>> 1ee48340c61fd9f6ee92e37f79be7e8ca3233759
=======
>>>>>>> origin/cindy
            ],
        ];
        parent::init();
    }
}
