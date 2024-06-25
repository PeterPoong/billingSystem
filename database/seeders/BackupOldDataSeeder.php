<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BackupOldDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!file_exists(database_path('backups'))) {
            mkdir(database_path('backups'), 0755, true);
        }

        $oldData = DB::table('users')->get()->toArray();
        file_put_contents(database_path('backups/old_table.json'), json_encode($oldData));
    }
}
