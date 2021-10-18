<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pais;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id, alfa_2, nombre, iso_num, alfa_3, estado
        $csvFile = fopen(public_path("data/pais.csv"),"r");

        $firstLine = true;
        while (($data = fgetcsv($csvFile,2000,";")) !== FALSE){
            if(!$firstLine){
                Pais::create([
                    'id'=> $data['0'],
                    'alfa_2'=>$data['1'],
                    'nombre'=>$data['2'],
                    'iso_num'=>$data['3'],
                    'alfa_3'=>$data['4'],
                    'estado'=>$data['5'],
                ]);
            }
            $firstLine = false;
        }
        fclose($csvFile);

    }
}
