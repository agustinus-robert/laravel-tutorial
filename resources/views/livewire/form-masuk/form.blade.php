<div>
    <div class="container mt-3">
        <div class="mt-5">
            <div class="row mx-auto" style="width:800px;">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nama</label>
                  <input type="text" class="form-control" wire:model="nama" placeholder="Nama">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Jurusan</label>
                  <input type="text" class="form-control" wire:model="jurusan" placeholder="Jurusan">
                </div>
           </div>
          
            <div class="text-center mt-3">
                <button class="btn btn-primary" wire:click="masuk_data()">Insert</button>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-auto">
            <table class="table" style="width:300px;">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                </tr>
                
                <?php 
                $i = 1;
                foreach($arr as $k => $v){ ?>
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$v['nama']}}</td>
                    <td>{{$v['jurusan']}}</td>
                </tr>
                <?php } ?>
            </table>
        </div>
        </div>
    </div>
</div>
