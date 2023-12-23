<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '使用する人の氏名',
            'email' => '使用する人のメールアドレス',
            'password' => 'パスワード',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
