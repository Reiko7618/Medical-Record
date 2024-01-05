<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patient')->insert([
            'name' => '患者の氏名',
            'gender' => '患者の性別',
            'birthdate' => '患者の生年月日',
            'address' => '患者の住所',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
