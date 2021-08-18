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
        $img->brightness(20);
        $img->save('public/temporary/'.'temp_'.$value);
        
        Session::flash('pesan-berhasil', 'Gambar berhasil diubah');
//       return redirect(route('index.image'));
        //return redirect()->to('/');
        return redirect(request()->header('Referer'));
        //return \App::make('redirect')->refresh()->with('pesan-berhasil', 'Thank you,!');
    }
    
    public function render()
    {
        return view('livewire.image.main');
    }
}
