<div>
     <?php 
     
     if(empty($online_array) || end($online_array) < 1){
         
          ?>
        <div class='container'>
            <div class="col-md-3 mx-auto mt-5">
                <select class="form-select" wire:model="pilih">
                    <option value="0">Pilih user</option>
                    <?php foreach($user as $k => $v){ ?>
                        <option value="{{$k}}">{{$v}}
                    <?php } ?>
                </select>
            </div>
            <div class="col text-center mt-2">
                <button class="btn btn-success" wire:click="opens()">Pilih</button>
            </div>
        </div>
     <?php } ?>
    
  <div x-data="{ chats: $persist(@entangle('online_array')) }" class="mt-5">
      <div wire:poll="loadData">
        <?php 
        if(!empty($online_array) && end($online_array) > 0){
            $open = end($online_array);
            
                       //print_r($open);
        }

        if($open > 0 && !empty($online_array)){ 
        ?>
          <div class="mx-auto">
            <table class="table mx-auto" style="width:400px;">
                <tr>
                    <th class="text-center">Chat</th>
                </tr>
                 <?php 

                 foreach($isi_chat as $k => $v){ 
                     ?>
                      <?php if($v['id_user'] == array_values($online_array)[0]){ ?>
                      <tr>
                          <td class="text-right"><?php echo $v['chat_pesan'] ?></td>
                      </tr>
                  <?php } else { ?>
                      <tr>
                          <td class="text-left"><?php echo $v['chat_pesan'] ?></td>
                      </tr>
                 <?php } }?>
            </table>
          </div>
           <div class='col-md-4 mx-auto text-center p-4'>        
               <input class="form-control mb-3" type="text" wire:model="chat" />
               <button class="btn btn-primary" wire:click="add_c({{array_values($online_array)[0]}})" value="masuk">Chat</button>
               <button class="btn btn-danger" wire:click="end_cht()">End Chat</button>
               <button class="btn btn-success" onclick="Livewire.emit('openModal', 'show-status-chat', {{ json_encode(["id" => array_values($online_array)[0]]) }})">Status User</button>
           </div>
       <?php } ?>
      </div>
  </div>
</div>