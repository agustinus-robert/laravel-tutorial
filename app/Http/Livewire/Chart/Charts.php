<?php

namespace App\Http\Livewire\Chart;

use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class Charts extends Component
{
    public $judul_buku = ['steve jobs','das kapital','davinci code','dante (Inferno)'];
    public $stock_buku = [54, 20, 80, 30];
    public $color = ['#d91c2f','#15d449','#1a51db','#cfcf21'];
     
    public function render()
    {     
         $columnChartModel = (new ColumnChartModel());
         
         foreach($this->judul_buku as $k => $v){
            $columnChartModel->addColumn($this->judul_buku[$k], $this->stock_buku[$k],$this->color[$k]);
        }
         
        return view('livewire.chart.charts')->with([
                'columnChartModel' => $columnChartModel
        ]);
    }
}
