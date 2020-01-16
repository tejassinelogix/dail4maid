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
        	'image' => 'public/productimage/img-1.jpg',
            'title' => [
                'en' => 'Wraparound Print',
                'in' => 'रैपराउंड प्रिंट', 
                'ar' => 'التفاف حول الطباعة',                
            ],
            'subtitle' => [
                'en' => 'Wraparound Print',
                'in' => 'रैपराउंड प्रिंट', 
                'ar' => 'التفاف حول الطباعة',                
            ],
            'body' => [
                'en' => 'Go creative with a large space for everything that you want to say.',
                'in' => 'जो कुछ आप कहना चाहते हैं उसके लिए एक बड़ी जगह के साथ रचनात्मक बनें।',
                'ar' => 'كن مبدعًا مع مساحة كبيرة لكل ما تريد قوله.',                
            ],
            'product_price' => [
                'en' => '10',
                'in' => '20',
                'ar' => '30', 
            ], 
        ]);
        $product->save();

        $product = new \App\Product([
            'image' => 'public/productimage/img-2.jpg',
            'title' => [
                'en' => 'Two-side Print',
                'in' => 'दो तरफा प्रिंट', 
                'ar' => 'اثنين من جانب الطباعة',                
            ],
            'subtitle' => [
                'en' => 'Two-side Print',
                'in' => 'दो तरफा प्रिंट', 
                'ar' => 'اثنين من جانب الطباعة',                
            ],
            'body' => [
                'en' => 'Let your logo be the only thing that shines and stands out.',
                'in' => 'अपने लोगो को केवल एक चीज होने दें जो चमकता है और बाहर खड़ा है।',
                'ar' => 'اسمح لشعارك أن يكون الشيء الوحيد الذي يضيء ويبرز.',                
            ],
            'product_price' => [
                'en' => '10',
                'in' => '20',
                'ar' => '30', 
            ], 
        ]);
        $product->save();

       


        // $product = new \app\Product([
        // 	'imagePath' => 'https://images.unsplash.com/photo-1496483648148-47c686dc86a8',
        // 	'title' => 'Flowers',
        // 	'description' => 'Beautiful',
        // 	'price' => 10
        // ]);
        // $product->save();
        // $product = new \app\Product([
        // 	'imagePath' => 'https://images.unsplash.com/photo-1496483648148-47c686dc86a8',
        // 	'title' => 'Flowers',
        // 	'description' => 'Beautiful',
        // 	'price' => 10
        // ]);
        // $product->save();
        // $product = new \app\Product([
        // 	'imagePath' => 'https://images.unsplash.com/photo-1496483648148-47c686dc86a8',
        // 	'title' => 'Flowers',
        // 	'description' => 'Beautiful',
        // 	'price' => 10
        // ]);
        // $product->save();
        // $product = new \app\Product([
        // 	'imagePath' => 'https://images.unsplash.com/photo-1496483648148-47c686dc86a8',
        // 	'title' => 'Flowers',
        // 	'description' => 'Beautiful',
        // 	'price' => 10
        // ]);
        // $product->save();
        // $product = new \app\Product([
        // 	'imagePath' => 'https://images.unsplash.com/photo-1496483648148-47c686dc86a8',
        // 	'title' => 'Flowers',
        // 	'description' => 'Beautiful',
        // 	'price' => 10
        // ]);
        // $product->save();
    }
}
