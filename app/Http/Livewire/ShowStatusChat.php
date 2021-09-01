<?php

namespace App\Http\Livewire;
use App\chatsUser as Chs;
use LivewireUI\Modal\ModalComponent;

class ShowStatusChat extends ModalComponent
{
    public $data_user;
    
    public function mount($id){
        $this->data_user = Chs::select('*')->where('id', '=', $id)->get()->toArray();       
    }
    
    public function render()
    {
        return view('livewire.show-status-chat');
    }
}
