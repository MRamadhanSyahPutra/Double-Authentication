<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        admin::create([
            'nama_lengkap' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$P2gdXVpWMe6R/DNKVVOS3O.sS2JNQ9W1nPFw77erKXEfUOp7DKsBi' //passwordnya : admin
        ]);
    }
}
