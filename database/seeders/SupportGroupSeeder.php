<?php

namespace Database\Seeders;

use App\Models\Common\Support\SupportGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SupportGroup::firstOrCreate(
            ['code' => 'IT-SUP-CEB'],
            ['name' => 'IT Support Cebu']
        );
    }
}
