<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MonitorData;

class DataSeeder extends Seeder
{
    public function __construct()
    {

    }

    /**
     * Run the database seeds.
    */
    public function run(): void
    {
        //
        MonitorData::create([
            'timestamp' => now(),
            'data1' => 60.5,
            'data2' => 61.5,
            'data3' => 62.5,
            'data4' => 63.5,
            'average' => 62.0,
        ]);

        MonitorData::create([
            'timestamp' => now(),
            'data1' => 58.5,
            'data2' => 59.5,
            'data3' => 60.5,
            'data4' => 61.5,
            'average' => 60.0,
        ]);
        
    }
}
