<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuotesFixture
 */
class QuotesFixture extends TestFixture
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
                'cost' => 1.5,
<<<<<<< HEAD
                'dates' => 1683173193,
=======
                'dates' => 1683173205,
>>>>>>> origin/cindy
                'cust_id' => 1,
            ],
        ];
        parent::init();
    }
}
