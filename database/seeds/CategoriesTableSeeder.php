<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
        Categories List

        Arts & Crafts
        Books
        Computers & Electronics
        Women’s Fashion
        Men´s Fashion
        Girl´s Fashion
        Boy´s Fashion
        Health & Household
        Industrial & Scientific
        Groceries

        */

        $product = new \App\Product([
            'name' => 'Arts & Crafts',
            'description' => 'Every creative manual work, such as Painting, Drawing & Art Supplies Beading & Jewelry Making Crafting Fabric',
            'cover_image_path' => 'https://images-na.ssl-images-amazon.com/images/G/01/gno/SiteDirectory/SD_exports_artscrafts2x._CB470927252_.png',
            'icon_path' => '<i class="fas fa-hands"></i>',
        ]);

        $product->save();

        $product = new \App\Product([
            'name' => 'Books',
            'description' => 'Marketland.com homepage helps you explore the largest bookstore without ever leaving the comfort of your couch.',
            'cover_image_path' => 'https://images-na.ssl-images-amazon.com/images/G/01/gno/SiteDirectory/SD_books_2x._CB274420682_.png',
            'icon_path' => '<i class="fas fa-book"></i>',
        ]);

        $product->save();

        $product = new \App\Product([
            'name' => 'Computers & Electronics',
            'description' => 'In Marketland.com you will be able to search through the msot diverse and exciting tech site on earth.',
            'cover_image_path' => 'https://images-na.ssl-images-amazon.com/images/G/01/gno/SiteDirectory/SD_exports_computers2x._CB470927255_.png',
            'icon_path' => '<i class="fas fa-laptop"></i>',
        ]);

        $product->save();

        $product = new \App\Product([
            'name' => 'Women’s Fashion',
            'description' => 'The greatest women’s collection of all time for all likes and desires. Find what you want, dress as you please and feel free.',
            'cover_image_path' => 'https://images-na.ssl-images-amazon.com/images/G/01/gno/SiteDirectory/SD_exports_WomensFashion2x._CB470926956_.png',
            'icon_path' => '<i class="fas fa-female"></i>',
        ]);

        $product->save();

        $product = new \App\Product([
            'name' => 'Men´s Fashion',
            'description' => 'The greatest men’s collection of all time for all likes and desires. Find what you want, dress as you please and feel free.',
            'cover_image_path' => 'https://images-na.ssl-images-amazon.com/images/G/01/gno/SiteDirectory/SD_exports_MensFashion2x._CB470927251_.png',
            'icon_path' => '<i class="fas fa-male"></i>',
        ]);

        $product->save();

        $product = new \App\Product([
            'name' => 'Health & Household',
            'description' => 'Feeling good and healthy is now closer than ever to you, find what you need in our health section. And also make your home as comfortable as you please, with our wide arrange and collections of items, and furniture to remodelate and decorate it as you wish.',
            'cover_image_path' => 'https://images-na.ssl-images-amazon.com/images/G/01/gno/SiteDirectory/SD_exports_HealthHousehold2x._CB470927254_.png',
            'icon_path' => '<i class="fas fa-home"></i>',
        ]);

        $product->save();


    }
}
