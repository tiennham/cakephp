<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilesFixture
 */
class ProfilesFixture extends TestFixture
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
                'user_id' => 1,
                'mobile' => 1,
                'created' => '2024-07-03 10:05:41',
                'modified' => '2024-07-03 10:05:41',
            ],
        ];
        parent::init();
    }
}
