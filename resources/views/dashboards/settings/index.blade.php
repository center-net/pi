<div>
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">إعدادات الموقع</h4>
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
                    <label class="form-label">شعار الموقع</label>
                    <input type="file" class="form-control" placeholder="logo1" wire:model='logo1' />
                    @error('logo1')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div wire:loading wire:target="logo1">Uploading...</div>
                    @if ($logo1)
                        <img width="80" height="80" src="{{ $logo1->temporaryUrl() }}">
                    @else
                        <img width="80" height="80" src="{{ asset('uplods/admin/settings/' .$settings->logo)}}">
                    @endif
                </div>
            </div>
            <div class="col-md-6 row" >
                <div class="col-md-6">
                    <label class="form-label">ايقونة الموقع</label>
                    <input type="file" class="form-control" placeholder="icon1" wire:model='icon1' />
                    @error('icon1')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div wire:loading wire:target="icon1">Uploading...</div>
                    @if ($icon1)
                        <img width="80" height="80" src="{{ $icon1->temporaryUrl() }}">
                    @else
                        <img width="80" height="80" src="{{ asset('uplods/admin/settings/' .$settings->icon) }}">
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label">إسم الموقع</label>
                <input type="text" class="form-control" placeholder="Name" wire:model='settings.name' />
                @error('settings.name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">البريد الإلكتروني</label>
                <input type="text" class="form-control" placeholder="البريد الإلكتروني" wire:model='settings.email' />
                @error('settings.email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">عنوان الشركة</label>
                <input type="text" class="form-control" placeholder="عنوان الشركة" wire:model='settings.address' />
                @error('settings.address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">رقم الهاتف</label>
                <input type="text" class="form-control" placeholder="رقم الهاتف" wire:model='settings.phone' />
                @error('settings.phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">الفيسبوك</label>
                <input type="text" class="form-control" placeholder="الفيسبوك" wire:model='settings.facebook' />
                @error('settings.facebook')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">منصة X</label>
                <input type="text" class="form-control" placeholder="منصة X" wire:model='settings.twitter' />
                @error('settings.twitter')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">Linkedin</label>
                <input type="text" class="form-control" placeholder="Linkedin" wire:model='settings.linkedin' />
                @error('settings.linkedin')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mt-2">
                <label class="form-label">Instagram</label>
                <input type="text" class="form-control" placeholder="Instagram" wire:model='settings.instagram' />
                @error('settings.instagram')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-12 mt-4">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
