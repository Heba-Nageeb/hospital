<h5 class="mb-2"> {{ __('messages.Edit Clinic') }}</h5> <hr>

<div class="mb-1">
    <label>{{ __('messages.Name') }}</label>
    <input class="form-control" type="text" wire:model="name" value="{{ $name }}">
    @error('name')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>

<label>{{ __('messages.Comment') }}</label>
<input class="form-control" type="text" wire:model="comment" value="{{ $comment }}">

<div class="my-2">
    <button class="btn btn-success" wire:click.prevent="update({{ $clinic_id }})">{{ __('messages.Save') }}</button>
    <button class="btn btn-secondary mr-1" wire:click.prevent="cancel()">{{ __('messages.Cancel') }}</button>
</div>
