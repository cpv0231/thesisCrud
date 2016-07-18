<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' =>'http://media.engadget.com/img/product/4/37h/macbook-pro-15-inch-unibody-21cu-800.jpg',
        	'title' => 'Acer Aspire',
        	'description' => 'Gaming Laptop',
        	'price' => 17000

        	]);
        $product->save();
   

     $product = new \App\Product([
        	'imagePath' =>'http://media.engadget.com/img/product/4/37h/macbook-pro-15-inch-unibody-21cu-800.jpg',
        	'title' => 'Intel I7 ',
        	'description' => 'Processor Intel I7 gaming',
        	'price' => 5000

        	]);
        $product->save();
    

     $product = new \App\Product([
        	'imagePath' =>'http://media.engadget.com/img/product/4/37h/macbook-pro-15-inch-unibody-21cu-800.jpg',
        	'title' => 'mac book',
        	'description' => 'Gaming mac ',
        	'price' => 30000

        	]);
        $product->save();
    
     $product = new \App\Product([
        	'imagePath' =>'http://media.engadget.com/img/product/4/37h/macbook-pro-15-inch-unibody-21cu-800.jpg',
        	'title' => 'Razer Naga ',
        	'description' => 'Gaming Mouse',
        	'price' => 2000

        	]);
        $product->save();
    

     $product = new \App\Product([
        	'imagePath' =>'http://media.engadget.com/img/product/4/37h/macbook-pro-15-inch-unibody-21cu-800.jpg',
        	'title' => 'Mac Air',
        	'description' => 'best macbook',
        	'price' => 50000

        	]);
        $product->save();
    

     $product = new \App\Product([
        	'imagePath' =>'http://media.engadget.com/img/product/4/37h/macbook-pro-15-inch-unibody-21cu-800.jpg',
        	'title' => 'EACH G2000 ',
        	'description' => ' USB and Audio Jack Dual Input Gaming Headset Stereo Headphone Sound Headset Stretchable Band 2.2m Nylon - coated Cable for PC Game',
        	'price' => 1000

        	]);
        $product->save();
    }
}
