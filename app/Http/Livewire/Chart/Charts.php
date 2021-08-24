<?php

namespace App\Http\Livewire\Chart;

use App\gameModel as gm;

use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class Charts extends Component
{
    public $judul_game = [];
    public $temporary = [];
    public $rating_game = [];
    public $color = [];
    public $extras = [];
     
    public function mount(){
        foreach(gm::all()->toArray() as $k => $v){
            $this->judul_game [$k] = $v['nama'];
            $this->temporary[$k] = $v['nama'];
            $this->rating_game [$k] = $v['rating'];
            $this->color [$k] =  '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            $this->extras [$k] = $v['id'];
        }
    }
    
    public function render()
    {     
      
         $columnChartModel = (new ColumnChartModel());
         foreach($this->judul_game as $k => $v){
          
            $columnChartModel->addColumn($this->judul_game[$k], $this->rating_game[$k],$this->color[$k], $this->extras[$k])
            ->withOnColumnClickEventName('onColumnClick');
        }
         
        return view('livewire.chart.charts')->with([
                'columnChartModel' => $columnChartModel
        ]);
    }
}
