<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: November/25/14
 * Time: 3:28 PM
 */

class BrandsTableSeeder extends \Illuminate\Database\Seeder {

    public function run(){

        DB::table('brands')->delete();

        $data = array(
            array('brandName' => 'Apple'),
            array('brandName' => 'Samsung'),
            array('brandName' => 'Microsoft'),
            array('brandName' => 'Xiomi'),
            array('brandName' => 'Huawei'),
            array('brandName' => 'Blackberry'),
            array('brandName' => 'Asus'),
            array('brandName' => 'HTC'),
            array('brandName' => 'Micromax'),
            array('brandName' => 'LAVA'),
            array('brandName' => 'Nokia'),
            array('brandName' => 'Sony'),
            array('brandName' => 'LG'),
            array('brandName' => 'Google')
        );

        DB::table('brands')->insert($data);

    }

} 