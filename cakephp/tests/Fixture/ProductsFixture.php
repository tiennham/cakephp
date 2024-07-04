<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor ',
                'category_id' => 1,
                'created' => '2024-07-04 11:15:43',
                'modified' => '2024-07-04 11:15:43',
            ],
        ];
        parent::init();
    }
}
