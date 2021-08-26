<?php

namespace App\Http\Livewire;

use App\gameModel as gm;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GameDatatables extends LivewireDatatable
{
    
    public function builder()
    {
         return gm::query();
    }

    public function columns()
    {
        return [
          NumberColumn::name('id')
                ->label("ID"),
          Column::name('nama')
                ->label("Nama game")
                ->filterable(),
          NumberColumn::name('rating')
                ->label("rating Game")
                ->filterable(),
          DateColumn::name('created_at')
                ->label('Tanggal')
                ->filterable()
        ];
    }
}