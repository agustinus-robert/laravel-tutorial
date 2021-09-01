<?php

namespace App\Http\Livewire\Chat;

use App\chatsUser as cUser;
use App\Chats as chs;
use Livewire\Component;

class Chatroom extends Component
{
    public $chat = [];
    public $arr = [];
    public $user = [];
    
    public $online_array = [];
    public $open;
    public $pilih;
    public $isi_chat = [];
    
    public function mount(){
        $cUser = cUser::select('*')->get()->toArray();
        
        foreach($cUser as $k => $v){
            $this->user[$v['id']] = $v['nama'];
        }
    }
    
    
     public function loadData()
    {
        $this->isi_chat = chs::select('*')->get()->toArray();
        $temporary = $this->isi_chat;
        
        if(count($this->isi_chat) != $temporary){
            $this->isi_chat = chs::select('*')->get()->toArray();
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

            $this->arr = [
                'id_user' => $id,
                'chat_pesan' => $this->chat
            ];
        
            chs::create($this->arr);
            
           $this->isi_chat = chs::select('*')->get()->toArray();
        //    $this->emit('refreshComponent');
    }
    
    public function end_cht(){
        unset($this->online_array);
    }
    public function render()
    {
       
        return view('livewire.chat.chatroom')->extends('layout')->section('konten');
    }
}
