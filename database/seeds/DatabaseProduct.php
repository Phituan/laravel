<?php

use Illuminate\Database\Seeder;

class DatabaseProduct extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('products')->delete();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'quả dừa',
                'description'=>'ngon',
                'categoryId'=>1,
                'price'=>2000,
                'image'=>'http://cafefcdn.77com/thumb_w/650/2018/7/17/photo1531801621130-15318016211302003500724.jpg'
            ],
            [
                'id'=>2,
                'name'=>'quả măng cụt',
                'description'=>'Hhhh',
                'categoryId'=>2,
                'price'=>2000,
                'image'=>'https://images.kienthuc.net.vn/zoomh/500/uploaded/hongngan/2017_01_09/F/vua-lon-khong-lo-hien-lanh-de-im-cho-gai-tre-cuoi.jpg'
            ],
            [
                'id'=>3,
                'name'=>'quả xoài',
                'description'=>'bbb',
                'categoryId'=>3,
                'price'=>2500,
                'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/10/03/105/23441004/1_100183.jpg'
            ],
            [
                'id'=>4,
                'name'=>'Thịt vịt',
                'description'=>'ddđ',
                'categoryId'=>2,
                'price'=>2700,
                'image'=>'http://img.khoahoc.tv/photos/image/2016/04/08/lon-rung-dot-bien.jpg'
            ],
            [
                'id'=>5,
                'name'=>'Thịt ngan',
                'description'=>'Ngan ngon',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'http://khoahoc.tv/photos/image/112011/21/lonrung.jpg'
            ],
        ]);
    }

}
