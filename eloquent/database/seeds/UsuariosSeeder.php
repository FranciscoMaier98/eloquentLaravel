<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            ['nome' => 'Francisco', 'email' => 'chicosm@outlook.com', 'senha' => bcrypt('123'), 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Gabriel', 'email' => 'gabriel@outlook.com', 'senha' => bcrypt('123'), 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Luan', 'email' => 'luan@outlook.com', 'senha' => bcrypt('123'), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
