<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: November/25/14
 * Time: 3:53 PM
 */

class ProductsTableSeeder extends \Illuminate\Database\Seeder{

    public function run(){

        DB::table('products')->delete();

        $data = array(

            array(
                'productType'   =>  0,
                'name'          =>  'iPhone 6',
                'description'   =>  'This is the new iPhone. Greatest ever iPhone!!!',
                'category'      =>  1,
                'brand'         =>  1,
                'image'         =>  '',
                'price'         =>  53500,
                'discount'      =>  0,
                'rating'        =>  4.3,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'iPhone 5',
                'description'   =>  'This is the new iPhone. Greatest ever iPhone!!!',
                'category'      =>  1,
                'brand'         =>  1,
                'image'         =>  '',
                'price'         =>  39870,
                'discount'      =>  0,
                'rating'        =>  4.2,
                'sellerId'      =>  1
                ),
            array(
                'productType'   =>  0,
                'name'          =>  'iPhone 4',
                'description'   =>  'This is the new iPhone. Greatest ever iPhone!!!',
                'category'      =>  1,
                'brand'         =>  1,
                'image'         =>  '',
                'price'         =>  23000,
                'discount'      =>  0,
                'rating'        =>  4.7,
                'sellerId'      =>  1
            )
        );

        DB::table('products')->insert($data);

    }

} 