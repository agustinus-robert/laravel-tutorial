<?php

namespace App\Http\Livewire\FormMasuk;

use App\form as fr;
use Livewire\Component;

class Form extends Component
{
    public $nama;
    public $jurusan;
    public $arr;
    
    public function mount(){
        $this->arr = fr::select('*')->get()->toArray();
    }
    
    public function masuk_data(){
        $data = [
            'nama' => $this->nama,
            'jurusan' => $this->jurusan
        ];
        
        fr::create($data);
        $this->arr = fr::select('*')->get()->toArray();
    }
    
    public function render()
    {
        return view('livewire.form-masuk.form');
    }
}
