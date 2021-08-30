<div>
        <div class='container'>
            <div class="col-md-3 mx-auto mt-5">
                <select class="form-select" wire:model="pilih">
                    <option value="0">Pilih user</option>
                    <?php foreach($user as $k => $v){ ?>
                        <option value="{{$v}}">{{$v}}
                    <?php } ?>
                </select>
            </div>
            <div class="col text-center mt-2">
                <button class="btn btn-success" wire:click="opens()">Pilih</button>
            </div>
        </div>
  <div x-data="{ chats: $persist(@entangle('online_array')) }" class="mt-5">
     <?php 
     if(end($online_array) > 0){
         $open = $online_array;
     }
     
     if($open){ ?>
    <div class='container'>
        
            <div class='row col-md-12 p-4' style='max-height:400px;'>
                <div class='row max-auto'>
                        <table class="table text-center table-striped">
                            <thead>
                                <tr>
                                    <th>Chat</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="row justify-content-center mt-6">      
                        <div class="col-md-3">
                            <input type="hidden" wire:model="{{$pilih}}" />
                            <input class="form-control" type="text" wire:model="chats" />
                            <div class="col text-center p-2">
                                <button type="button" wire:click="add_c(1)" class="btn btn-danger">Chat</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
      </div>
</div>