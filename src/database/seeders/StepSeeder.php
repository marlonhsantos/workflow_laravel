<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('steps')->insert([
            'id' => 1,
            'step_name' => 'Aprovação 1',
            'next_step_id' => 2,
            'end' => 0
        ]);

        DB::table('steps')->insert([
            'id' => 2,
            'step_name' => 'Aprovação 2',
            'next_step_id' => 3,
            'end' => 0
        ]);

        DB::table('steps')->insert([
            'id' => 3,
            'step_name' => 'Conclusão',
            'end' => 1
        ]);
    }
}
