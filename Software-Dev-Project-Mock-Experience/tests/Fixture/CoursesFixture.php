<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoursesFixture
 */
class CoursesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'cost' => 1.5,
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'image' => 'Lorem ipsum dolor sit amet',
>>>>>>> 1ee48340c61fd9f6ee92e37f79be7e8ca3233759
=======
>>>>>>> origin/cindy
            ],
        ];
        parent::init();
    }
}
