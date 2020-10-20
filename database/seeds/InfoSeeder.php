<?php

use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**suporte@fabrica704.com.br
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                'home' => 'Página inicial',
                'about' => 'Sobre mim',
            ],
        ]);
    }
}
