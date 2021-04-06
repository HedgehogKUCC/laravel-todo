<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::truncate();
        foreach (range(1, 10) as $id) {
            Task::create([
                'name' => 'Task'.$id,
                'done' => true,
            ]);
        }
    }
}
