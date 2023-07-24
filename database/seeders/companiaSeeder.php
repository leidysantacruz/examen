<?php

namespace Database\Seeders;

use App\Models\compania;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class companiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        compania::factory(50)->create();
    }
    }
    

