<?php

namespace Database\Seeders;

use App\Models\Flag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $paesi = [
            ['country'=>'Italia','flag'=>'it'],
            ['country'=>'Francia','flag'=>'fr'],
            ['country'=>'Spagna','flag'=>'es']
        ];

        foreach ($paesi as $paese) {
            
            $inserimento = new Flag();
            $inserimento->country = $paese['country'];
            $inserimento->url = '/img/'. $paese['flag'].'.png';

            $inserimento->save();
        }
        
    }
}
