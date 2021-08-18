<div>
    
    <div class="container">
        <div class="col-sm-12 mt-2">
            @if (session()->has('pesan-berhasil'))
                <div class="col-sm-12">
                    <div class="alert alert-warning">
                        {{ session('pesan-berhasil') }}
                    </div>
                </div>
            @endif
        </div>
       
        <div class="row">
            <div class="col-md-6 mt-4">
                <fieldset>
                <legend>Gambar Original:</legend>
                    <img style="margin:auto; width:500px; height:380px;" src="{{url('public/'.$image)}}" />
                </fieldset> 
            </div>
            
            <div class="col-md-6 mt-4">
                <fieldset>
                <legend>Gambar Edit:</legend>
                   <?php 
                   $image_path = 'public/temporary/temp_'.$image;
                   if(file_exists($image_path)) { ?>
                        <img style="margin:auto; width:500px; height:380px; border:1px solid black;" src="{{$image_path}}" />
                   <?php } else { ?>
                        <img style="margin:auto; width:500px; height:380px;" src="{{url('public/free_no.png')}}" />
                   <?php } ?>
                </fieldset> 
            </div>
        </div>
        
        <hr>
            <div class="col text-center">
                <button class="btn btn-primary mb-4" wire:click="bright($event.target.value)" value="{{$image}}">Bright</button>
                <button class="btn btn-primary mb-4" wire:click="blur($event.target.value)" value="{{$image}}">Blur</button>
                <button class="btn btn-primary mb-4" wire:click="contrast($event.target.value)" value="{{$image}}">Contrast</button>
                <button class="btn btn-primary mb-4" wire:click="canvas($event.target.value)" value="{{$image}}">Canvas</button>
                <button class="btn btn-primary mb-4" wire:click="colorize($event.target.value)" value="{{$image}}">Colorize</button>
                <button class="btn btn-primary mb-4" wire:click="crop($event.target.value)" value="{{$image}}">Crop</button>
                <button class="btn btn-primary mb-4" wire:click="greyscale($event.target.value)" value="{{$image}}">Greyscale</button>
                <button class="btn btn-primary mb-4" wire:click="opacity($event.target.value)" value="{{$image}}">Opacity</button>
                <button class="btn btn-primary mb-4" wire:click="invert($event.target.value)" value="{{$image}}">Invert</button>
            </div>
    </div>
</div>
