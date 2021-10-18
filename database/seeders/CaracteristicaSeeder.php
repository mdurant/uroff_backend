<?php

namespace Database\Seeders;

use App\Models\Caracteristica;
use Illuminate\Database\Seeder;

class CaracteristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id, alfa_2, nombre, iso_num, alfa_3, estado
        $csvFile = fopen(public_path("data/categoria.csv"),"r");

        $firstLine = true;
        while (($data = fgetcsv($csvFile,2000,";")) !== FALSE){
            if(!$firstLine){
                Caracteristica::create([
                    'id'=> $data['0'],
                    'name'=>$data['1'],
                    'code'=>$data['2'],
                    'estado'=>$data['3'],
                ]);
            }
            $firstLine = false;
        }
        fclose($csvFile);
    }
}
