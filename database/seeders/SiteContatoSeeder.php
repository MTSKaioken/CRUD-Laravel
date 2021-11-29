<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      /*  $site_contato = new SiteContato();
        $site_contato->nome = 'contato1';
        $site_contato->email= 'contato1@email.com';
        $site_contato->motivo_contato = 'motivocontato1';
        $site_contato->mensagem = 'mensagemcontato1';
        $site_contato->save();

        SiteContato::create([
            'nome' => 'contato2',
            'email' => 'contato2@email.com',
            'motivo_contato' => 'motivocontato2',
            'mensagem' => 'mensagemcontato2',
        ]);

        DB::table('site_contatos')->insert([
            'nome' => 'contato3',
            'email' => 'contato3@email.com',
            'motivo_contato' => 'motivocontato3',
            'mensagem' => 'mensagemcontato3',
        ]); */

        \App\Models\SiteContato::factory(10)->create();
    }
}
