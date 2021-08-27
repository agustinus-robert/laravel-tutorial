<div>
    <div class='container text-center'>
        <div x-data="{ count: $persist(@entangle('arr')) }" class="mt-5">
            <button class='btn btn-success' style="width:100px;height:50px;" wire:click="add()">add</button>
            <button class='btn btn-danger' style="width:100px;height:50px;" wire:click="remove_local_storage()">Remove</button>
        </div>
        
        <div class="row">
            <div class="debug mt-5 mx-auto" style="border-radius:20px; background-color:#8fbbfb!important; width:900px; height:200px;">
                <span style="float:left;">
                    <?php
                        print_r($arr);
                    ?>
                </span>
            </div>           
        </div>
    </div>
</div>
