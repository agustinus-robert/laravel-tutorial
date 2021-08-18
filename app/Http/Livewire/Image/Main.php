<?php

namespace App\Http\Livewire\Image;
use Image;
use File;
use Session;
use Livewire\Component;

class Main extends Component
{
    public $image = 'gambar.jpg';
    public $edited;
    
    private function hapus_temporary($val){
        $image_path = 'temp_'.$val;  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete(public_path('temporary/'. $image_path));
        } 
    }
    
    public function bright($value){
        $this->hapus_temporary($value);
        
        $img = Image::make('public/'.$value);
        $img->brightness(70);
        $img->save('public/temporary/'.'temp_'.$value);
        
         Session::flash('pesan-berhasil',"Method brightness berhasil dijalankan");
    }
    
    public function render()
    {
        return view('livewire.image.main');
    }
}
