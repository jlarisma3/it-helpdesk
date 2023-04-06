<?php

namespace Database\Seeders;

use App\Models\Common\Branch\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Department::firstOrCreate(
            ['code' => 'IT-DEPT'],
            ['name' => 'IT Department']
        );
    }
}
