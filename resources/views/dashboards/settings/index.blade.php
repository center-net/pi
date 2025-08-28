<div class="container-fluid">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">{{ __('views.site_settings') }}</h4>
        </div>
    </div>
    <div class="card-body p-5">
        <form wire:submit.prevent='submit'>
            @if (session()->has('message'))
                <div class="alert alert-primary my-success-alert">
                    {{ session('message') }}
                </div>
            @endif

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true">{{ __('views.general') }}</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="branding-tab" data-bs-toggle="tab" data-bs-target="#branding" type="button" role="tab" aria-controls="branding" aria-selected="false">{{ __('views.branding') }}</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="social-media-tab" data-bs-toggle="tab" data-bs-target="#social-media" type="button" role="tab" aria-controls="social-media" aria-selected="false">{{ __('views.social_media') }}</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active p-3" id="general" role="tabpanel" aria-labelledby="general-tab">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <x-form-input name="settings.name" label="{{ __('views.site_name') }}" placeholder="{{ __('views.site_name') }}" :disabled="!auth()->user()->hasPermission('edit_settings')" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input name="settings.email" label="{{ __('views.email') }}" placeholder="{{ __('views.email') }}" :disabled="!auth()->user()->hasPermission('edit_settings')" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input name="settings.phone" label="{{ __('views.phone_number') }}" placeholder="{{ __('views.phone_number') }}" :disabled="!auth()->user()->hasPermission('edit_settings')" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input name="settings.address" label="{{ __('views.site_address') }}" placeholder="{{ __('views.site_address') }}" :disabled="!auth()->user()->hasPermission('edit_settings')" />
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade p-3" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="form-label">{{ __('views.site_logo') }}</label>
                            <input type="file" class="form-control" wire:model='logo1' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                            @error('logo1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div wire:loading wire:target="logo1">{{ __('views.uploading') }}...</div>
                            @if ($logo1)
                                <img class="img-fluid rounded mt-2" src="{{ $logo1->temporaryUrl() }}">
                            @else
                                <img class="img-fluid rounded mt-2" src="{{ Storage::disk('public')->url('admin/settings/' . $settings->logo) }}">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">{{ __('views.site_icon') }}</label>
                            <input type="file" class="form-control" wire:model='icon1' {{auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'}}/>
                            @error('icon1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div wire:loading wire:target="icon1">{{ __('views.uploading') }}...</div>
                            @if ($icon1)
                                <img class="img-fluid rounded mt-2" src="{{ $icon1->temporaryUrl() }}">
                            @else
                                <img class="img-fluid rounded mt-2" src="{{ Storage::disk('public')->url('admin/settings/' . $settings->icon) }}">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade p-3" id="social-media" role="tabpanel" aria-labelledby="social-media-tab">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <x-form-input name="settings.facebook" label="{{ __('views.fb') }}" placeholder="{{ __('views.fb') }}" :disabled="!auth()->user()->hasPermission('edit_settings')" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input name="settings.twitter" label="{{ __('views.x') }}" placeholder="{{ __('views.x') }}" :disabled="!auth()->user()->hasPermission('edit_settings')" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input name="settings.linkedin" label="{{ __('views.li') }}" placeholder="{{ __('views.li') }}" :disabled="!auth()->user()->hasPermission('edit_settings')" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input name="settings.instagram" label="{{ __('views.in') }}" placeholder="{{ __('views.in') }}" :disabled="!auth()->user()->hasPermission('edit_settings')" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                @if (auth()->user()->hasPermission('edit_settings'))
                    <button class="btn btn-primary">{{ __('views.submit') }}</button>
                @endif
            </div>
        </form>
    </div>
</div>

