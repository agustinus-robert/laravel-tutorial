<div>
    <div class="container row">
        <ul>
            <li>
                <input type="checkbox" value="steve jobs" wire:model="judul_buku"/>
                <span>Steve Jobs</span>
            </li>
            <li>
                <input type="checkbox" value="das kapital" wire:model="judul_buku"/>
                <span>Das Kapital</span>
            </li>
            <li>
                <input type="checkbox" value="davinci code" wire:model="judul_buku"/>
                <span>Davinci Code</span>
            </li>
            <li>
                <input type="checkbox" value="dante (Inferno)" wire:model="judul_buku"/>
                <span>Dante (Inferno)</span>
            </li>
        </ul>
    </div>
    
    <div class="card-body">
        <livewire:livewire-column-chart
            key="{{ $columnChartModel->reactiveKey() }}"
            :column-chart-model="$columnChartModel"
        />
    </div>
</div>
