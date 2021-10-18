<?php

namespace Database\Seeders;

use App\Models\Alianza;
use Illuminate\Database\Seeder;

class AlianzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//id, pais_id, name, entity, cod_entity, url, estado
        $csvFile = fopen(public_path("data/alianza.csv"),"r");

        $firstLine = true;
        while (($data = fgetcsv($csvFile,2000,";")) !== FALSE){
            if(!$firstLine){
                Alianza::create([
                    'id'=> $data['0'],
                    'pais_id'=>$data['1'],
                    'name'=>$data['2'],
                    'entity'=>$data['3'],
                    'cod_entity'=>$data['4'],
                    'url'=>$data['5'],
                    'estado'=>$data['6'],
                ]);
            }
            $firstLine = false;
        }
        fclose($csvFile);
    }
}
