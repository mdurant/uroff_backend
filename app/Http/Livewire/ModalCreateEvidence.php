<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalCreateEvidence extends Component
{


    public $open = true;
    public $name;
    public $file;
    public $date;


    public function save($name, $file, $date)
    {
        return view ('');
    }

    public function render()
    {
        return view('livewire.modal-create-evidence');
    }
}
