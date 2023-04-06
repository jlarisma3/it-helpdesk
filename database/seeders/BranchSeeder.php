<?php

namespace Database\Seeders;

use App\Models\Common\Branch\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Branch::firstOrCreate(
            ['code' => 'CEB-OFC'],
            ['name' => 'Cebu Branch']
        );
    }
}
