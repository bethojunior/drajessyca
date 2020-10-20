<?php

use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                'home' => 'Texto para a tela incial',
                'about' => 'Sobre mim',
            ],
        ]);
    }
}
