<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MedicalRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('medical-record')->insert([
             'symptoms' =>'症状',
             'treatement' =>'治療内容',
             'comment' =>'追記',
             'date'=>'治療日',
             'created_at' => new DateTime(),
             'updated_at' => new DateTime(),
            ]);
    }
}
