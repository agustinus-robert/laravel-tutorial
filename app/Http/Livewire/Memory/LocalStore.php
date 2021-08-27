<?php

namespace App\Http\Livewire\Memory;

use Livewire\Component;

class LocalStore extends Component
{
    public $increment;
    public $arr;
    
    public function add(){
        $this->increment++;
        
        for($i = 0; $i < $this->increment; $i++){
            $this->arr[$i] = $i;
        }
    }
    
    public function remove_local_storage(){
        unset($this->arr);
        $this->increment = 0;
    }
    
    public function render()
    {
        return view('livewire.memory.local-store');
    }
}
