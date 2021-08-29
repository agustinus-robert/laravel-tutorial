<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class Chatroom extends Component
{
    public function mount(){
        
    }
    
    public function render()
    {
        return view('livewire.chat.chatroom')->extends('layout');
    }
}
