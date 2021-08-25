<?php

namespace App\Http\Livewire;

use App\gameModel as gm;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
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
                ->label("Nama game"),
          NumberColumn::name('rating')
                ->label("rating Game")
        ];
    }
}