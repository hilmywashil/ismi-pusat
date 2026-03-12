<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'name' => 'Admin ISMI Jabar',
            'username' => 'admin_ismi',
            'email' => 'admin@ismi.co.id',
            'password' => Hash::make('atmin123'),
            'category' => 'bpd',
            'domisili' => null,
        ]);
    }
}