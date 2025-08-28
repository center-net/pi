<div>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-12 mb-3">
                <label class="form-label" for="name">{{ __('views.name') }}</label>
                <input type="text" class="form-control" id="name" wire:model.defer="name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label class="form-label" for="key">{{ __('views.key') }}</label>
                <input type="text" class="form-control" id="key" wire:model.defer="key">
                @error('key') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('views.save') }}</button>
    </form>
</div>