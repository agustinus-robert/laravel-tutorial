<?php

namespace App\Http\Livewire;
use App\Chats as chs;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ChatTb extends LivewireDatatable
{
    public function builder()
    {
       return chs::query();
    }

    public function columns()
    {
        //
        return [
        Column::name('chat_pesan')
                ->label("Chatting")
                ->filterable()
        ];
    }
}