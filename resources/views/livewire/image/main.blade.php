<div>
    <div class="container">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="col-md-12">
                    <div class="alert alert-warning">
                        {{ session('pesan-ubah-gambar') }}
                    </div>
                </div>
            @endif
        </div>
        
        <div class="col-md-6 mx-auto mt-4">
            <img style="margin:auto; width:500px; height:300px;" src="{{url('public/'.$image)}}" />
        </div>
        
        <table>
            <tr>
                <td><button class="btn btn-primary" wire:click="bright($event.target.value)" value="{{$image}}">Bright</button></td>
            </tr>
        </table>
    </div>
</div>
