<?php

namespace App\Http\Livewire\Memory;

use App\libAngka as lA;
use Livewire\Component;

class LocalStore extends Component
{
    public $increment;
    public $arr;
    public $tampil;
    
    public function mount(){
        $this->arr = la::select('id')->get()->toArray();
    }
    
    public function add(){
        
        $arr = [
           'angka' => $this->increment++
        ];
        
        la::create($arr);
        $this->arr = lA::select('id')->get()->toArray();
        $this->emit('panggil_ulang');
    }
    
    public function panggil_ulang(){
        la::get()->toArray();
    }

    
    public function remove_local_storage(){
        unset($this->arr);
        $this->increment = 0;
    }
    
    public function render()
    {
        $data['arr'] = $this->arr;
        return view('livewire.memory.local-store', $data);
    }
}
