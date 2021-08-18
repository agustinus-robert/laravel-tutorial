<div>
    <div class="container">
        <div class="col-md-12">
            @if (session()->has('pesan-berhasil'))
                <div class="col-md-12">
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
        <button class="btn btn-primary mb-4" wire:click="bright($event.target.value)" value="{{$image}}">Bright</button>
        <button class="btn btn-primary mb-4" wire:click="blur($event.target.value)" value="{{$image}}">Blur</button>
    </div>
</div>
