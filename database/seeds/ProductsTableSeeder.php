<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'name' => 'Men´s Fashion',
            'description' => 'The greatest men’s collection of all time for all likes and desires. Find what you want, dress as you please and feel free.',
            'cover_image_path' => 'https://images-na.ssl-images-amazon.com/images/G/01/gno/SiteDirectory/SD_exports_MensFashion2x._CB470927251_.png',
            'icon_path' => '<i class="fas fa-male"></i>',
        ]);

        $product->save();

    }
}
