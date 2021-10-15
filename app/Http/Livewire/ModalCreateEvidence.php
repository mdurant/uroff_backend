<?php

namespace App\Http\Livewire;

use App\Models\Evidence;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

use Intervention\Image\ImageManagerStatic as Image;


class ModalCreateEvidence extends Component
{

    use WithFileUploads;


    public $open = true;
    public $name;
    public $file;
    public $date;




    public function save(){
        //$nameFile = $this->file->getClientOriginalName();
        //$user = Auth::user()->name;
        //$fecha = Carbon::now()->format('d-m-YH-i-s');
        //$clearUser = str_replace(' ', '', $user);
        //dd($fecha . "-" . $nameFile);
        //$fileExtension=$this->file->getClientOriginalExtension();
        // dd($this->file);
        // dd($fileExtension);
        // $codigo = Hash::make(Str::random(15));
       // dd($codigo);
        // metadata
        //$archivo = [];
        $archivo = $this->file;
        $img = Image::make($archivo)->exif();

        $vars = array($img);
        //for ($i=0; $i < count($img); $i++){
        //    $img[$i][0];
        // }
        // trabajar for con var_export()
        // COMPUTED, THUMBNAIL,  UndefinedTag, GPSLatitude, GPSLongitude
        foreach ($vars['COMPUTED']['THUMBNAIL']['GPSLatitude']['GPSLongitude'] as $atributo => $valor) {
            echo '<p>', htmlspecialchars($atributo . ' => ' . $valor), '</p>', PHP_EOL;
        }



       dd($img);

    }

    public function render()
    {
        //$ahora = Carbon::now();
        //dd($ahora->toDateTimeString());
        return view('livewire.modal-create-evidence');
    }
}
