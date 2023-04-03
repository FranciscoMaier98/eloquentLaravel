<?php

use Illuminate\Database\Seeder;

class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carros')->insert([
            ['descricao' => 'Fox', 'ano' => 2010, 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'CrossFox', 'ano' => 2012, 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Palio', 'ano' => 2007, 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Cobalt', 'ano' => 2012, 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'HB20', 'ano' => 2015, 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Uno', 'ano' => 2015, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
