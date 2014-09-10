<?php
use \Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LuanTestTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('luan_test_table')->delete();
        DB::table('luan_test_table')->insert(
            array(
                array('title'=>'Luan','description'=>'Nguyen Cong Luan')
            )
        );

    }

}
?>