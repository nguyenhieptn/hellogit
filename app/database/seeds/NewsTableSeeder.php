<?php
use \Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->delete();
        DB::table('news')->insert(
            array(
                array('name'=>'News 1','amount'=>'18','abc'=>'99'),
                array('name'=>'News 2','amount'=>'3','abc'=>'99'),
                array('name'=>'News 3','amount'=>'4','abc'=>'99'),
                array('name'=>'News 4','amount'=>'5','abc'=>'99'),
            )
        );
    }
}