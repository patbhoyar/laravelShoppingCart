<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: November/25/14
 * Time: 3:53 PM
 */

class UsersInfoTableSeeder extends \Illuminate\Database\Seeder{

    public function run(){

        DB::table('userInfo')->delete();

        $data = array(

            array(
                'firstName' =>  'Wasim',
                'lastName'  =>  'Akram',
                'birthday'  =>  '1971-09-12'
            ),
            array(
                'firstName' =>  'Sachin',
                'lastName'  =>  'Tendulkar',
                'birthday'  =>  '1973-04-24'
            ),
            array(
                'firstName' =>  'Saurav',
                'lastName'  =>  'Ganguly',
                'birthday'  =>  '1972-10-22'
            )

        );

        DB::table('userInfo')->insert($data);

    }

} 