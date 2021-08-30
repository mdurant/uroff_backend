<?php

namespace App\Http\Livewire;

use App\Models\Evidence;
use Illuminate\Support\Str;
use Livewire\Component;

use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;


class ModalCreateEvidence extends Component
{

    use WithFileUploads;


    public $open = true;
    public $name;
    public $file;
    public $date;




    public function save(){
        //$fileExtension=$this->file->getClientOriginalExtension();
        // dd($this->file);
        // dd($fileExtension);
        // $codigo = Hash::make(Str::random(15));
       // dd($codigo);

    }

    public function render()
    {
        //$ahora = Carbon::now();
        //dd($ahora->toDateTimeString());
        return view('livewire.modal-create-evidence');
    }
}
