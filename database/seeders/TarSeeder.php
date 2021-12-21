<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tars')->insert(
        [
          [
            'name'=>'Wool',
            'price'=>'250',
            'category'=>'cloth',
            'gsm'=>'100 Meters',
            'description'=>'Fine and good',
            'gallery'=>"{{asset('images/tarpaulin/Canvas.jpg')}}",
          ],
          [
            'name'=>'Jean',
            'price'=>'250',
            'category'=>'cloth',
            'gsm'=>'10 Meters',
            'description'=>'Fine and good',
            'gallery'=>'https://media.istockphoto.com/photos/lot-of-denim-blue-jean-textureon-white-closeup-of-denim-blue-jeans-picture-id1143538401',
          ],[
            'name'=>'Silk',
            'price'=>'50',
            'category'=>'cloth',
            'gsm'=>'100 Meters',
            'description'=>'Fine and good',
            'gallery'=>'https://cdn.shopify.com/s/files/1/0811/4007/articles/Blo_55_-_Silk_shopping_-_blog_featured_imageb_1600x.jpg?v=1596927160',
          ]
        ]
      );
    }
}
