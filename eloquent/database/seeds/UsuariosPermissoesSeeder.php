<?php

use Illuminate\Database\Seeder;

class UsuariosPermissoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios_permissoes')->insert([
            ['permissoes_id' => 1, 'usuarios_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['permissoes_id' => 2, 'usuarios_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['permissoes_id' => 3, 'usuarios_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['permissoes_id' => 4, 'usuarios_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['permissoes_id' => 1, 'usuarios_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['permissoes_id' => 1, 'usuarios_id' => 3, 'created_at' => now(), 'updated_at' => now()]
        ]
        );
    }
}
