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
                'description'   =>  'The iPhone 6 and iPhone 6 Plus are smartphones running iOS developed by Apple Inc. The devices are part of the iPhone series and were released on September 19, 2014. The iPhone 6 series jointly serves as a successor to the iPhone 5S and iPhone 5C. The iPhone 6 series includes a number of changes over its predecessor, including models with larger 4.7-inch and 5.5-inch displays, a faster processor, upgraded cameras, improved LTE and Wi-Fi connectivity, and support for a near-field communications-based mobile payments offering.',
                'category'      =>  1,
                'brand'         =>  1,
                'image'         =>  'images/iphone6.jpeg',
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
                'image'         =>  'images/iphone6.jpeg',
                'price'         =>  51000,
                'discount'      =>  37.00,
                'rating'        =>  4.2,
                'sellerId'      =>  1
                ),
            array(
                'productType'   =>  0,
                'name'          =>  'iPhone 4',
                'description'   =>  'This is the new iPhone. Greatest ever iPhone!!!',
                'category'      =>  1,
                'brand'         =>  1,
                'image'         =>  'images/iphone6.jpeg',
                'price'         =>  44000,
                'discount'      =>  46.00,
                'rating'        =>  4.7,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'Nexus 6',
                'description'   =>  'The Nexus 6 (codenamed Shamu) is a phablet co-developed by Google and Motorola Mobility that runs the Android operating system. The successor to the Nexus 5, the device is the sixth smartphone in the Google Nexus series, a family of Android consumer devices marketed by Google and built by an original equipment manufacturer partner.',
                'category'      =>  1,
                'brand'         =>  14,
                'image'         =>  'images/nexus6.png',
                'price'         =>  48000,
                'discount'      =>  0.00,
                'rating'        =>  4.7,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'Nexus 4',
                'description'   =>  'This is the new Nexus!',
                'category'      =>  1,
                'brand'         =>  14,
                'image'         =>  'images/nexus6.png',
                'price'         =>  33000,
                'discount'      =>  25.00,
                'rating'        =>  4.5,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'Note 4',
                'description'   =>  'This is the new Galaxy Note!',
                'category'      =>  1,
                'brand'         =>  2,
                'image'         =>  'images/Note4.jpeg',
                'price'         =>  61000,
                'discount'      =>  10.00,
                'rating'        =>  4.5,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'Note 3',
                'description'   =>  'This is the new Note 3!',
                'category'      =>  1,
                'brand'         =>  2,
                'image'         =>  'images/Note4.jpeg',
                'price'         =>  58000,
                'discount'      =>  31.00,
                'rating'        =>  4.2,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'Xperia Z3',
                'description'   =>  'This is the new Xperia Z3!',
                'category'      =>  1,
                'brand'         =>  12,
                'image'         =>  'images/Z3.jpeg',
                'price'         =>  51000,
                'discount'      =>  3.00,
                'rating'        =>  4.4,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'Redmi 1S',
                'description'   =>  'This is the new Xiomi Redmi 1S!',
                'category'      =>  1,
                'brand'         =>  4,
                'image'         =>  'images/redmi.jpeg',
                'price'         =>  5999,
                'discount'      =>  0.00,
                'rating'        =>  3.9,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'ZenFone 5',
                'description'   =>  'This is the new Asus ZenFone 5!',
                'category'      =>  1,
                'brand'         =>  7,
                'image'         =>  'images/zenfone.jpeg',
                'price'         =>  58000,
                'discount'      =>  31.00,
                'rating'        =>  4.2,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'Lumia 555',
                'description'   =>  'This is the new Nokia Lumia 555!',
                'category'      =>  1,
                'brand'         =>  11,
                'image'         =>  'images/lumia.jpeg',
                'price'         =>  40000,
                'discount'      =>  24.00,
                'rating'        =>  3.2,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'One M8',
                'description'   =>  'This is the new HTC One M8!',
                'category'      =>  1,
                'brand'         =>  8,
                'image'         =>  'images/m8.jpeg',
                'price'         =>  44000,
                'discount'      =>  3.00,
                'rating'        =>  4.7,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'Blackberry',
                'description'   =>  'This is the new Blackberry!',
                'category'      =>  1,
                'brand'         =>  6,
                'image'         =>  'images/blackberry.jpeg',
                'price'         =>  31000,
                'discount'      =>  21.00,
                'rating'        =>  3.1,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'iPad Air',
                'description'   =>  'This is the new iPad! Its the thinnest iPad ever.',
                'category'      =>  2,
                'brand'         =>  1,
                'image'         =>  'images/iPadAir.jpeg',
                'price'         =>  28000,
                'discount'      =>  0.00,
                'rating'        =>  4.1,
                'sellerId'      =>  1
            ),
            array(
                'productType'   =>  0,
                'name'          =>  'iPad Mini',
                'description'   =>  'This is the new iPad Mini!',
                'category'      =>  2,
                'brand'         =>  1,
                'image'         =>  'images/iPadMini.jpeg',
                'price'         =>  31000,
                'discount'      =>  2.00,
                'rating'        =>  4.2,
                'sellerId'      =>  1
            )
        );

        DB::table('products')->insert($data);

    }

} 