<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            'name' => 'ハロービル',
            'address' => '大阪府豊中市',
            'post_code' => '5678944',
            'stair' => '4',
            'comment' => 'お問合せします',
        ]);
    }
}
