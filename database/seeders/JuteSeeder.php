<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class JuteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('jutes')->insert(
        [
          [
            'name'=>'Wool',
            'price'=>'250',
            'gallery'=>'https://5.imimg.com/data5/HA/XJ/HK/SELLER-22736063/knitting-woolen-yarn-500x500.jpg',
            'gsm'=>'100 Meters',
            'category'=>'wool',
            'discreption'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry ',
          ],
          [
            'name'=>'Jean',
            'price'=>'250',
            'gallery'=>'https://media.istockphoto.com/photos/lot-of-denim-blue-jean-textureon-white-closeup-of-denim-blue-jeans-picture-id1143538401',
            'gsm'=>'100 Meters',
            'category'=>'wool',
            'discreption'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry ',
          ],
          [
            'name'=>'Silk',
            'price'=>'50',
            'gallery'=>'https://cdn.shopify.com/s/files/1/0811/4007/articles/Blo_55_-_Silk_shopping_-_blog_featured_imageb_1600x.jpg?v=1596927160',
            'gsm'=>'100 Meters',
            'category'=>'wool',
            'discreption'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry ',
          ],
          [
            'name'=>'Cotton',
            'price'=>'60',
            'gallery'=>'https://cdn.shopify.com/s/files/1/0811/4007/articles/Blo_55_-_Silk_shopping_-_blog_featured_imageb_1600x.jpg?v=1596927160',
            'gsm'=>'100 Meters',
            'category'=>'wool',
            'discreption'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry ',
          ]
        ]
      );
    }
}
