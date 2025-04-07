<?php

namespace App\Livewire;

use Livewire\Component;

class RegistroPolicial extends Component
{

    public $showAssigned = false;

    public function toggleAssigned()
{
    $this->showAssigned = !$this->showAssigned;
}








    public function render()
    {
        return view('livewire.registro-policial');
    }
}
