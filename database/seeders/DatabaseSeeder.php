<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Produto::factory(100)->create();


        // $statuses = ['aguardando pagamento', 'preparando para envia', 'enviado', 'entregue'];

        // foreach($statuses as $s){
        //     DB::table('statuses')->insert([
        //         'descricao'=>  $s
        //     ]);
        // }
      
    }

  
}
