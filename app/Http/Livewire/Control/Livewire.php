<?php

namespace App\Http\Livewire\Control;

use Livewire\Component;

class Livewire extends Component
{
    public function render()
    {
        return view('livewire.control.livewire')
        ->extends('layout');
    }
}
