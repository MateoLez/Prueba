<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'nombre' => 'Admin',
                'cedula' => '100612200',
                'email' => 'prueba@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'rol_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::table('users')->insert([
                'nombre' => 'Prueba',
                'cedula' => '20330001',
                'email' => 'prueba@prueba.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'rol_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

    }


}
