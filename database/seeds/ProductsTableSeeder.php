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
            'id_category' => '1', //Arts & Crafts
            'name' => 'Abstract Mountain in Daytime Canvas Prints',
            'description' => 'Wall Art Paintings Abstract Geometry Wall Artworks Pictures for Living Room Bedroom Decoration, 12x16 inch/piece, 3 Panels Home bathroom Wall decor posters',
            'sales' => 3,
            'price' => 22.84,
            'review' => 4,
            'image_path' => 'https://m.media-amazon.com/images/I/61NT-Q+NO5L._AC_UL480_FMwebp_QL65_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '1', //Arts & Crafts
            'name' => 'Mkono Ceramic Hanging Planter Succulent Air Plant Flower Pot Wall Decor, Set of 3',
            'description' => 'These wall hanging planter will add some vertical greenery to any wall in your home, great to display your lovely plants like cactus, herbs, succulents or other small plant.',
            'sales' => 4,
            'price' => 23.94,
            'review' => 4,
            'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/61vGKlq7bWL._AC_UL115_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '2', //Books
            'name' => 'How an Economy Grows and Why It Crashes',
            'description' => 'How an Economy Grows and Why it Crashes uses illustration, humor, and accessible storytelling to explain complex topics of economic growth and monetary systems.',
            'sales' => 4,
            'price' => 13.07,
            'review' => 5,
            'image_path' => 'https://m.media-amazon.com/images/I/41hxcwjGMfL._AC_UL436_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '2', //Books
            'name' => 'Crash Proof 2.0: How to Profit From the Economic Collapse',
            'description' => 'A fully updated follow-up to Peter Schiff´s bestselling financial survival guide-Crash Proof, which described the economy as a house of cards on the verge of collapse, with over 80 pages of new material',
            'sales' => 2,
            'price' => 16.13,
            'review' => 5,
            'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/71lvsn5BUKL._AC_UL115_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '2', //Books
            'name' => 'The Simple Path to Wealth: Your road map to financial independence and a rich, free life',
            'description' => '“In the dark, bewildering, trap-infested jungle of misinformation and opaque riddles that is the world of investment, JL Collins is the fatherly wizard on the side of the path, offering a simple map. ',
            'sales' => 4,
            'price' => 15.19,
            'review' => 3,
            'image_path' => 'https://m.media-amazon.com/images/I/61QZYjvuQyL._AC_UL436_.jpg',
        ]);

        $product->save();


        $product = new \App\Product([
            'id_category' => '3', //Computers & Electronics
            'name' => 'HP 8300 Elite Small Form Factor Desktop Computer, Intel Core i5-3470 3.2GHz Quad-Core, 8GB RAM, 500GB SATA',
            'description' => 'Product works and looks like new. Comes with a 90-day warranty.
            This Amazon Renewed product is professionally inspected and tested by an Amazon qualified supplier. Box and accessories may be generic.',
            'sales' => 1,
            'price' => 169.00,
            'review' => 3,
            'image_path' => 'https://m.media-amazon.com/images/I/41ZLGAJEh7L._AC_UL436_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '3', //Computers & Electronics
            'name' => 'Acer Aspire TC-885-ACCFLi3O Desktop, 8th Gen Intel Core i3-8100, 8GB DDR4 + 16GB Optane Memory, 1TB HDD, 8X ',
            'description' => 'Configuration: 8GB DDR4 + 16GB Optane Memory, 1TB HDD
            8th Generation Intel Core i3-8100 Processor (3.6GHz)
            8GB DDR4 2666MHz RAM Memory & 16GB Intel Optane Memory
            1TB 7200RPM SATA Hard Drive & 8X DVD-Writer Double-Layer Drive (DVD-RW)',
            'sales' => 1,
            'price' => 399.00,
            'review' => 3,
            'image_path' => 'https://m.media-amazon.com/images/I/61Ybzz3P25L._AC_UL436_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '4', //Women’s Fashion
            'name' => 'KORSIS Women´s Summer Casual T Shirt Dresses Short Sleeve Swing Dress with Pockets',
            'description' => 'This simple random floral print go to dress is 95% Rayon and 5% Spandex. Price is fair, the fabric is very soft and stretchy.',
            'sales' => 5,
            'price' => 18.61,
            'review' => 3,
            'image_path' => 'https://m.media-amazon.com/images/I/61hgh4WE-DL._AC_UL320_.jpg
',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '4', //Women’s Fashion
            'name' => 'Viishow Women´s Short Sleeve Loose Plain Maxi Dresses Casual Long Dresses with Pockets',
            'description' => 'Material:95% Rayon,5% Spandex,Note:the WHITE color is a little bit see through, please use a nude,lighter color underwear,and don´t have to wear a slip.',
            'sales' => 5,
            'price' => 16.99,
            'review' => 4,
            'image_path' => 'https://m.media-amazon.com/images/I/51XjWq0L1xL._AC_UL320_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '4', //Women’s Fashion
            'name' => 'oxiuly Women´s Vintage Patchwork Pockets Puffy Swing Casual Party Dress OX165',
            'description' => 'Oxiuly Women´s Vintage 1950´s Classic Plaid Stripe Floral Flare Polka Dot Patchwork with Pockets Hepburn Style Cocktail Party Swing Dress Long Sleeve Short Sleeve Half Sleeve Scoop',
            'sales' => 5,
            'price' => 18.99,
            'review' => 4,
            'image_path' => 'https://m.media-amazon.com/images/I/71kWN0UHo6L._AC_UL320_.jpg
',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '4', //Women’s Fashion
            'name' => 'oxiuly Women´s Vintage Plaid Stripe V-Neck Casual Pockets Party Swing Dress OX295',
            'description' => 'The fabric is thick enough so that it´s not see thru, but thin enough that you´re not hot, didn´t wrinkle, was ready to wear right you out of the package so would be great for travel.',
            'sales' => 5,
            'price' => 18.99,
            'review' => 5,
            'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/81jp3DynOSL._AC_UL320_SR240,320_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '5', //Men´s Fashion
            'name' => 'Women Vintage Casual Swing 3/4 Sleeve Patchwork Floral Midi Dress with Pockets for Work',
            'description' => 'Women Vintage Casual Swing 3/4 Sleeve Patchwork Floral Midi Dress with Pockets for Work.',
            'sales' => 3,
            'price' => 22.80,
            'review' => 5,
            'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/616xwFRTaKL._AC_UL320_SR248,320_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '5', //Men´s Fashion
            'name' => 'TRAVANDO Money Clip Wallet"RIO" - Mens Wallets slim Front Pocket RFID Blocking Card Holder Minimalist Mini Bifold Gift Box',
            'description' => ' FUNCTIONAL & SLIM – Travando’s Wallet offers 7 card pockets: 1 easy-access front pocket and 6 inner pockets. The slim wallet is ideal for carrying business cards, credit and debit cards, bills etc.',
            'sales' => 3,
            'price' => 29.95,
            'review' => 5,
            'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/51uR-hIludL._SX38_SY50_CR,0,0,38,50_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '5', //Men´s Fashion
            'name' => 'Lavemi Money Clip Wallet for Men Slim Front Pocket RFID Blocking Card Holder Minimalist Bifold Wallet',
            'description' => 'FUNCTIONAL&SLIM - Our Wallet offers 7 card pockets:2 easy-access outside ID pockets and 5 inner pockets.The slim wallet is ideal for carrying business cards,credit and debit cards, bills etc.',
            'sales' => 4,
            'price' => 17.99,
            'review' => 5,
            'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/51Rj2uJkGWL._SX38_SY50_CR,0,0,38,50_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '6', //Health & Household
            'name' => 'Globalwin Mens M16666769 Fashion Sneaker',
            'description' => 'Fabric and Synthetic
            Leather
            lace up
            cool, breathable comfort around the foot
            smooth faux leather
            non-skid rubber outsole
            FITTING TIPS: TRUE TO SIZE!!!',
            'sales' => 2,
            'price' => 28.99,
            'review' => 3,
            'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/41RLPB9NO9L._SS47_.jpg',
        ]);

        $product->save();
        $product = new \App\Product([
            'id_category' => '6', //Health & Household
            'name' => 'Maybe You Should Talk to Someone: A Therapist, HER Therapist, and Our Lives Revealed',
            'description' => 'Now being developed as a television series with Eva Longoria and ABC! "An irresistibly addictive tour of the human condition."--Kirkus, starred review',
            'sales' => 2,
            'price' => 12.99,
            'review' => 3,
            'image_path' => 'https://m.media-amazon.com/images/I/816Gj-UmcVL._AC_UL436_.jpg',
        ]);

        $product->save();

        $product = new \App\Product([
            'id_category' => '6', //Health & Household
            'name' => '100% All Natural & Organic Vitamin E Oil For Your Face & Skin - 15,000/30,000 IU',
            'description' => '++ BUNDLE AND SAVE 10%! ++ Fades dark spots & circles under eyes, moisturizes & heals damaged skin. UNSCENTED option available.
            Get results TWICE AS FAST! d-alpha tocopherol (natural) has TWICE the power as dL-alpha tocopheryl.',
            'sales' => 0,
            'price' => 39,
            'review' => 5,
            'image_path' => 'https://m.media-amazon.com/images/I/51JVI6AeaoL._AC_UL320_.jpg',
        ]);

        $product->save();
        $product = new \App\Product([
            'id_category' => '6', //Health & Household
            'name' => 'Galaxy Glassware 12-pc. Set',
            'description' => 'Number of Pieces: 12
            Includes: 4 - 17oz Hiball Glasses 4 - 13oz DOF Glasses 4 - 7oz Juice Glasses
            Material: Glass
            Care and Cleaning: Dishwasher-safe',
            'sales' => 10,
            'price' => 22.90,
            'review' => 4,
            'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/71k8RyrPb-L._SL1500_.jpg',
        ]);

        $product->save();


    }
}
