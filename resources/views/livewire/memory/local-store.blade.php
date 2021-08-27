<div>
    <div x-data="{ count: $persist(@entangle('arr')) }">
        <button wire:click="add()">add</button>
        <span><?php print_r($arr); ?></span>
    </div>
</div>
