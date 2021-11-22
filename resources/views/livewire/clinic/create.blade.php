<h5 class="mb-2"> {{ __('messages.Add Clinic') }}</h5> <hr>

<div class="mb-1">
    <label>{{ __('messages.Name') }}</label>
<input class="form-control" type="text" wire:model="name" value="{{ old('name') }}">
@error('name')
    <small id="helpId" class="text-danger">{{ $message }}</small>
@enderror
</div>


<label>{{ __('messages.Comment') }}</label>
<input class="form-control" type="text" wire:model="comment" value="{{ old('comment') }}">

<div class="my-2">
    <button class="btn btn-success" wire:click.prevent="store()">{{ __('messages.Save') }}</button>
</div>
