<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('zh_CN');

        for ($i = 1; $i<30; $i++) {
            DB::table('admin')->insert([
                'username' => $faker->userName,
                'password' => bcrypt($faker->password),
                'sex' => mt_rand(1,3),
                'mobile' => $faker->phoneNumber,
                'email' => $faker->email,
                'role_id' => mt_rand(1,150),
                'created_at' => time(),
                'updated_at' => time()
            ]);
        }
    }
}
