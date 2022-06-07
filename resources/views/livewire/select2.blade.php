<div wire:ignore class="mb-2">
    <label class="col-form-label">Plate-form</label>
    <select wire:model.lazy="platform" class="js-example-placeholder-multiple col-sm-12 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
        @foreach($websites as $website)
            <option wire:key="{{ $website->id }}" value="{{ $website->id }}">{{ ucfirst($website->name) }}</option>
        @endforeach
    </select>
</div>
