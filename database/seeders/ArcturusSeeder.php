<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArcturusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sql = \File::get(database_path('sql/base-arcturus.sql'));

        if(!$sql) return;

        \DB::unprepared($sql);
    }
}
