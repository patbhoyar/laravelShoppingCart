<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: November/25/14
 * Time: 3:53 PM
 */

class UsersTableSeeder extends \Illuminate\Database\Seeder{

    public function run(){

        DB::table('users')->delete();

        $data = array(

            array(
                'email'     =>  'wasim@gmail.com',
                'password'  =>  Hash::make('wasim')
            ),
            array(
                'email'     =>  'sachin@gmail.com',
                'password'  =>  Hash::make('sachin')
            ),
            array(
                'email'     =>  'saurav@gmail.com',
                'password'  =>  Hash::make('saurav')
            )

        );

        DB::table('users')->insert($data);

    }

} 