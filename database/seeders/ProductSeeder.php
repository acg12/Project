<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'name'=>'logitech gpro keyboard',
            'price'=>1670000,
            'Description'=>'The tournament-proven PRO gaming keyboard, now with advanced GX Blue Clicky mechanical switches. Built to win in collaboration with the worlds top esports athletes.',
            'image_url'=>'https://kopi.dev/static/29f0793444ac5fabe619fea221cb4c0f/logitech-g-pro-x-keyboard.jpg',
            'stock'=> 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 

        DB::table('products')->insert([
            'name'=>'Razer Huntsman TE',
            'price'=>2315000,
            'Description'=>'Tournament editionn PRO gaming keyboard, with advanced switches. Built to win in collaboration with the worlds top esports athletes.',
            'image_url'=>'https://m.media-amazon.com/images/I/41IWddJ5stL._AC_.jpg',
            'stock'=> 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 

        DB::table('products')->insert([
            'name'=>'Keychron K2',
            'price'=>1710000,
            'Description'=>'Minimalistic and well build keyboard.',
            'image_url'=>'https://ae01.alicdn.com/kf/Hfdcd8306542c495aaffcaef2806a1404p/Keychron-K2-C-V2-Keyboard-Mekanis-USB-Bluetooth-Nirkabel-Frame-Aluminium-Compact-84-Keys-RGB-Backlight.jpg',
            'stock'=> 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 

        DB::table('products')->insert([
            'name'=>'SteelSeries ApexPro',
            'price'=>1269000,
            'Description'=>'A well build keyboard, perfect for gaming.',
            'image_url'=>'https://media.steelseriescdn.com/thumbs/filer_public/b1/d1/b1d1b0d3-30d5-4477-bb8f-bad442cfb894/webprim_apexpro.png__1200x627_crop-fit_optimize_subsampling-2.png',
            'stock'=> 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 

        DB::table('products')->insert([
            'name'=>'Logitech K380',
            'price'=>300000,
            'Description'=>'A Minimalistic keyboard, good for working.',
            'image_url'=>'https://dorangadget.com/wp-content/uploads/2021/11/keyboard-laptop-keyboard-komputer-keyboard-adalah-harga-keyboard-murah-1-2.jpg',
            'stock'=> 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 

        DB::table('products')->insert([
            'name'=>'Logitech K480',
            'price'=>600000,
            'Description'=>'Bluetooth perfect for mobility.',
            'image_url'=>'https://tokoklik.com/59-thickbox_default/keyboard-logitech-wireless-k480-bluetooth.jpg',
            'stock'=> 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 
    }
}
