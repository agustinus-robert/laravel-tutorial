<div>
    <div class='container text-center'>
        <div x-data="{ count: @entangle('arr') }" class="mt-5">
            <button class='btn btn-success' style="width:100px;height:50px;" wire:click="add()">add</button>
        </div>
        
        <div class="row">
            <div class="debug mt-5 mx-auto" style="border-radius:20px; background-color:#8fbbfb!important; width:900px; height:200px;">
                <span style="float:left;">  
                    <table>
                        <tr>
                            <th>Id</th>
                        </tr>
                        
                        <?php foreach($arr as $k => $v){ ?>
                            <tr>
                                 <td><?php echo $v['id']; ?></td>
                            </tr>
                        <?php } ?>
                     </table>
                </span>
            </div>     
        </div>
    </div>
</div>
