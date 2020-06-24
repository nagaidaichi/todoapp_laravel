<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = ['aaaaa', 'bbbbb', 'ccccc'];
        $statusId = 2;  
        foreach($contents as $content) {
            DB::table('tasks')->insert([
                'content' => $content,
                'status_id' => $statusId
            ]);
        }
    }
}
