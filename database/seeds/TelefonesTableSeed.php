<?php

use Illuminate\Database\Seeder;

class TelefonesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Telefone', 10)->create()->each(function($u){
            $u->telefones()->save(factory('App\Telefone')->make);
        });
    }
}
