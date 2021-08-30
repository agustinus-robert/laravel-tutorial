<?php

namespace App\Http\Livewire\Chat;

use App\Chats as chat;
use App\chatsUser as cUser;
use Livewire\Component;

class Chatroom extends Component
{
    public $chat = [];
    public $arr = [];
    public $user = [];
    
    public $online_array = [];
    public $open;
    public $pilih;
    
    public function mount(){
        $cUser = cUser::select('*')->get()->toArray();
        
        foreach($cUser as $k => $v){
            $this->user[$v['id']] = $v['nama'];
        }
    }
    
    public function opens(){    
        if($this->pilih > 0){
            $this->open = true;
            
            $this->online_array = [
              'id_user' => $this->pilih,
              'status' => $this->open
            ];
        }
    }
    
    public function add_c($id){
        foreach($this->chat as $p => $san){
            $this->arr[] = [
                'id_user' => $id,
                'chat_pesan' => $san['chats']
            ];
        }
    }
    
    public function render()
    {
        return view('livewire.chat.chatroom')->extends('layout')->section('konten');
    }
}
