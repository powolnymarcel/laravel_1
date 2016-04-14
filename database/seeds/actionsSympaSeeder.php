<?php

use Illuminate\Database\Seeder;
use App\actionsSympa;
class actionsSympaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $action_sympa = new actionsSympa();
        $action_sympa->nom='Salut';
        $action_sympa->preference=3;
        $action_sympa->save();

        $action_sympa = new actionsSympa();
        $action_sympa->nom='Calin';
        $action_sympa->preference=5;
        $action_sympa->save();

        $action_sympa = new actionsSympa();
        $action_sympa->nom='Bisous';
        $action_sympa->preference=2;
        $action_sympa->save();

        $action_sympa = new actionsSympa();
        $action_sympa->nom='coucou';
        $action_sympa->preference=2;
        $action_sympa->save();

    }
}
