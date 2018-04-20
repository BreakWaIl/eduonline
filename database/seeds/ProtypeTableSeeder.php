<?php

use Illuminate\Database\Seeder;

class ProtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('protype')->insert([
            [
                'protype_name'=>'后端'
            ],
            [
                'protype_name'=>'web开发'
            ],
            [
                'protype_name'=>'运维'
            ],
            [
                'protype_name'=>'数据库'
            ],
            [
                'protype_name'=>'大数据'
            ]

        ]);
    }
}