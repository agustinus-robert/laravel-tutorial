<div>
    <div class="container row">
        <ul>
            <?php 
                foreach($temporary as $k => $v){ 
            ?>
            <li>
                <input type="checkbox" value="{{$v}}" wire:model="judul_game" selected />
                <span>{{$v}}</span>
            </li>
            <?php } ?>
        </ul>
    </div>
    
    <div class="card-body">
        <livewire:livewire-column-chart
            key="{{ $columnChartModel->reactiveKey() }}"
            :column-chart-model="$columnChartModel"
        />
    </div>
    
    
</div>
