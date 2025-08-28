<div>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label" for="name">{{ __('views.name') }}</label>
                <input type="text" class="form-control" id="name" wire:model.defer="name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="email">{{ __('views.email') }}</label>
                <input type="email" class="form-control" id="email" wire:model.defer="email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="mobile">{{ __('views.phone_number') }}</label>
                <input type="text" class="form-control" id="mobile" wire:model.defer="mobile">
                @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="username">{{ __('views.username') }}</label>
                <input type="text" class="form-control" id="username" wire:model.defer="username">
                @error('username') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="password">{{ __('views.password') }}</label>
                <input type="password" class="form-control" id="password" wire:model.defer="password">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="role_id">{{ __('views.role') }}</label>
                <select class="form-select" id="role_id" wire:model.defer="role_id">
                    <option value="">{{ __('views.select_role') }}</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="country_id">{{ __('views.country') }}</label>
                <select class="form-select" id="country_id" wire:model.live="country_id">
                    <option value="">{{ __('views.select_country') }}</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('country_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="city_id">{{ __('views.city') }}</label>
                <select class="form-select" id="city_id" wire:model.defer="city_id">
                    <option value="">{{ __('views.select_city') }}</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                @error('city_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label class="form-label" for="address">{{ __('views.address') }}</label>
                <textarea class="form-control" id="address" wire:model.defer="address"></textarea>
                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('views.save') }}</button>
    </form>
</div>