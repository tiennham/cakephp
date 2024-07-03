<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'username' => 'Lorem ipsum dolor ',
                'email' => 'Lorem ipsum dolor sit a',
                'amount' => 1,
                'password' => 'Lorem ipsum dolor sit amet',
                'image' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2024-07-02 15:37:07',
                'modified' => '2024-07-02 15:37:07',
            ],
        ];
        parent::init();
    }
}
