<?php

use Illuminate\Database\Seeder;

class TelefonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telefones')->insert([
            ['telefone' => '98646-4123', 'usuario_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['telefone' => '93412-0092', 'usuario_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['telefone' => '99712-0011', 'usuario_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['telefone' => '99951-1451', 'usuario_id' => 3, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
