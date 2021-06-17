<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => '読書をする',
        ];
        DB::table('tasks')->insert($param);
        $param = [
            'content' => '1分間ストレッチをする',
        ];
        DB::table('tasks')->insert($param);
        $param = [
            'content' => '料理をする',
        ];
        DB::table('tasks')->insert($param);
    }
}
