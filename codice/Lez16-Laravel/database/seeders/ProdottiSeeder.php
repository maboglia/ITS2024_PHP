<?php

namespace Database\Seeders;

use App\Models\Prodotto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdottiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 10; $i++) { 
            
            $prodotto = new Prodotto();
            $prodotto->nome = 'Prodotto n. ' . $i;
            $prodotto->prezzo = $i * rand(10, 50);
            $prodotto->save();
        }
    }
}
