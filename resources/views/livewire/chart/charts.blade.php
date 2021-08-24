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
    
    @if($modals)
        <div class="modal d-block" tabindex="-1" wire:click.self="$set('modals', false)">
           <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Check Status Rating</h5>
               
              </div>
              <div class="modal-body">
                <p>{{$status_nilai}}</p>
              </div>
            </div>
          </div>
        </div>
    @endif
</div>
