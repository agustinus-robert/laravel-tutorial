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
        $image_path = 'temp_'.$val; 
        if(File::exists($image_path)) {
            File::delete(public_path('temporary/'. $image_path));
        } 
    }
    
    public function bright($value){
        $this->hapus_temporary($value);
        
        $img = Image::make('public/'.$value);
        $img->brightness(80);
        $img->save('public/temporary/'.'temp_'.$value);
        
        Session::flash('pesan-berhasil', 'Gambar berhasil diubah');
        return redirect(request()->header('Referer'));
    }
    
    public function blur($value){
        $this->hapus_temporary($value);
        
        $img = Image::make('public/'.$value);
        $img->blur(35);
        $img->save('public/temporary/'.'temp_'.$value);
        
        Session::flash('pesan-berhasil', 'Gambar berhasil diubah');
        return redirect(request()->header('Referer'));
    }
    
    public function render()
    {
        return view('livewire.image.main');
    }
}
