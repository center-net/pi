<div>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label" for="name">{{ __('views.name') }}</label>
                <input type="text" class="form-control" id="name" wire:model.defer="name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="key">{{ __('views.key') }}</label>
                <input type="text" class="form-control" id="key" wire:model.defer="key">
                @error('key') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="color">{{ __('views.color') }}</label>
                <input type="text" class="form-control" id="color" wire:model.defer="color" placeholder="e.g., bg-primary text-white">
                @error('color') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label class="form-label">{{ __('views.permissions') }}</label>
                <div class="row">
                    @foreach ($allPermissions as $permission)
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $permission->id }}" id="permission_{{ $permission->id }}" wire:model.defer="selectedPermissions">
                                <label class="form-check-label" for="permission_{{ $permission->id }}">
                                    {{ $permission->name }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
                @error('selectedPermissions') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('views.save') }}</button>
    </form>
</div>