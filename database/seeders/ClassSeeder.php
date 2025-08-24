<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::insert([
            [
                'class_name' => 'XII-RPL-A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'XII-RPL-B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'XII-RPL-C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'XI-RPL-A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'XI-RPL-B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'XI-RPL-C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'X-RPL-A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'X-RPL-B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_name' => 'X-RPL-C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
