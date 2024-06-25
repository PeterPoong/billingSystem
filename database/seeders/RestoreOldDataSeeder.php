<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestoreOldDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oldData = json_decode(file_get_contents(database_path('backups/old_table.json')), true);
        DB::table('users')->insert($oldData);


    }
}
