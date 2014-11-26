<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: November/25/14
 * Time: 3:28 PM
 */

class ReviewsTableSeeder extends \Illuminate\Database\Seeder {

    public function run(){

        DB::table('reviews')->delete();

        $data = array(
            array(
                'productId' => 4,
                'userId'    => 2,
                'rating'    => 5,
                'review'    => "This phablet is amazing, except for the Price!!"
            ),
            array(
                'productId' => 3,
                'userId'    => 1,
                'rating'    => 4,
                'review'    => "I have been using this phone for 4 years now and it has remained very useful"
            ),
            array(
                'productId' => 3,
                'userId'    => 3,
                'rating'    => 5,
                'review'    => "This phone is amazing, except for the Price!!"
            )
        );

        DB::table('reviews')->insert($data);

    }

} 