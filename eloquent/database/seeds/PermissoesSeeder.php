<?php

use Illuminate\Database\Seeder;

class PermissoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissoes')->insert([
            ['descricao' => 'Comercial', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Vendas', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'TI', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Compras', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
