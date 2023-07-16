<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) {
            # code...
            DB::table('departments')->insert(
                [
                    'name'=>'department'.$i,
                    'description'=> 'testttttttttttt',
                    'created_at'=>now()
                ]
                );
        }
    }
}
