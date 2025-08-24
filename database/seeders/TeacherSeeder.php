<?php

namespace Database\Seeders;

// use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \Illuminate\Support\Facades\DB::table('teachers')->insert([
        //     'nama' => 'Fulano',
        //     'tanggal_lahir' => '2002-09-09',
        //     'alamat' => 'Jl. Neo Nusa 2',
        //     'gender' => 'Laki-Laki',
        //     'wali_kelas' => 'Ya',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // php artisan db:seed --class=GuruSeeder
        
        \App\Models\Teacher::factory(10)->create();
    }
}
