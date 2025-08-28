@props([
    'label' => '',
    'type' => 'text',
    'name' => '',
    'placeholder' => '',
    'value' => '',
    'disabled' => false,
])

<div class="col-md-12 mt-2">
    <div class="row align-items-center">
        <div class="col-md-4">
            <label class="form-label mb-0">{{ $label }}</label>
        </div>
        <div class="col-md-8">
            <input type="{{ $type }}" class="form-control" placeholder="{{ $placeholder }}" wire:model='{{ $name }}' {{ $disabled ? 'disabled' : '' }} />
            @error($name)
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
