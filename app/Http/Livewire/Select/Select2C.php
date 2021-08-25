<?php

namespace App\Http\Livewire\Select;

use Livewire\Component;

class Select2C extends Component
{
    public $arr = [];
    public $c;
    public $data = [];
    
    public function mount(){
        $this->data = [
          'baju A', 'baju B', 'baju C'  
        ];
        
    }
    
    
    public function render()
    {
        return view('livewire.select.select2-c');
    }
}
