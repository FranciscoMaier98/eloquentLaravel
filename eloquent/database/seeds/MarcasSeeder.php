<?php

use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            ['descricao' => 'Volkswagen', 'carro_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Volkswagen', 'carro_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Fiat', 'carro_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Chevrolet', 'carro_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Citroën', 'carro_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Fiat', 'carro_id' => 6, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
