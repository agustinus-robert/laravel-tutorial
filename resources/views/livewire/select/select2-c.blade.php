<div>
    <div class="container">
        
        <select data-pharaonic="select2" data-component-id="{{$this->id}}" wire:model="arr.a">
            <?php foreach($data as $k => $v){ ?>
                 <option value="{{$v}}">{{$v}}</option>
            <?php } ?>
        </select>

      
    </div>
</div>
