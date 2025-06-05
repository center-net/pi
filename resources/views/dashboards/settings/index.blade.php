<div>
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">{{ __('views.site_settings') }}</h4>
        </div>
    </div>
    <div class="card-body p-5">
        <form class="row" wire:submit.prevent='submit'>
            @if (session()->has('message'))
                <div class="alert alert-primary my-success-alert">
                    {{ session('message') }}
                </div>
            @endif
              <div class="col-md-6 row" >
                <div class="col-md-6">
                    <label class="form-label">{{ __('views.site_logo') }}</label>
                    <input type="file" class="form-control" placeholder="logo1" wire:model='logo1' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                    @error('logo1')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div wire:loading wire:target="logo1">{{ __('views.uploading') }}...</div>
                    @if ($logo1)
                        <img width="80" height="80" src="{{ $logo1->temporaryUrl() }}">
                    @else
                        <img width="80" height="80" src="{{ asset('uplods/admin/settings/' .$settings->logo)}}">
                    @endif
                </div>
            </div>
            <div class="col-md-6 row" >
                <div class="col-md-6">
                    <label class="form-label">{{ __('views.site_icon') }}</label>
                    <input type="file" class="form-control" placeholder="icon1" wire:model='icon1' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                    @error('icon1')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div wire:loading wire:target="icon1">{{ __('views.uploading') }}...</div>
                    @if ($icon1)
                        <img width="80" height="80" src="{{ $icon1->temporaryUrl() }}">
                    @else
                        <img width="80" height="80" src="{{ asset('uplods/admin/settings/' .$settings->icon) }}">
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label">{{ __('views.site_name') }}</label>
                <input type="text" class="form-control" placeholder="{{ __('views.site_name') }}" wire:model='settings.name' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                @error('settings.name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">{{ __('views.email') }}</label>
                <input type="text" class="form-control" placeholder="{{ __('views.email') }}" wire:model='settings.email' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                @error('settings.email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">{{ __('views.site_address') }}</label>
                <input type="text" class="form-control" placeholder="{{ __('views.site_address') }}" wire:model='settings.address' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                @error('settings.address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">{{ __('views.phone_number') }}</label>
                <input type="text" class="form-control" placeholder="{{ __('views.phone_number') }}" wire:model='settings.phone' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                @error('settings.phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">{{ __('views.fb') }}</label>
                <input type="text" class="form-control" placeholder="{{ __('views.fb') }}" wire:model='settings.facebook' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                @error('settings.facebook')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">{{ __('views.x') }}</label>
                <input type="text" class="form-control" placeholder="{{ __('views.x') }}" wire:model='settings.twitter' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                @error('settings.twitter')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">{{ __('views.li') }}</label>
                <input type="text" class="form-control" placeholder="{{ __('views.li') }}" wire:model='settings.linkedin' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                @error('settings.linkedin')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">{{ __('views.in') }}</label>
                <input type="text" class="form-control" placeholder="{{ __('views.in') }}" wire:model='settings.instagram' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                @error('settings.instagram')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-12 mt-4">
                @if (auth()->user()->hasPermission('edit_settings'))
                    <button class="btn btn-primary">{{ __('views.submit') }}</button>
                @endif 
            </div>
        </form>
    </div>
</div>
