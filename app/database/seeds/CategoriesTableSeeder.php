<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: November/25/14
 * Time: 3:29 PM
 */

class CategoriesTableSeeder extends \Illuminate\Database\Seeder {

    public function run()
    {
        DB::table('categories')->delete();

        $data = array(
            array('categoryName' => 'Mobiles'),
            array('categoryName' => 'Tablets'),
            array('categoryName' => 'TVs'),
            array('categoryName' => 'Gaming Consoles'),
            array('categoryName' => 'Storage'),
            array('categoryName' => 'Laptops'),
            array('categoryName' => 'Books and Media'),
            array('categoryName' => 'Kitchen'),
            array('categoryName' => 'Home Improvement'),

        );

        DB::table('categories')->insert($data);
    }

} 