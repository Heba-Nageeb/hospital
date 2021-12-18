<h5 class="mb-2"> {{ __('messages.Add Doctor') }}</h5>
<hr>

<div class="mb-1">
    <label>{{ __('messages.Name') }}</label>
    <input class="form-control" type="text" wire:model.lazy="name" value="{{ old('name') }}">
    @error('name')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-1">
    <label>{{ __('messages.Phone Number') }}</label>
    <input class="form-control" type="number" wire:model.lazy="phone" value="{{ old('phone') }}">
    @error('phone')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-1">
    <label>{{ __('messages.Clinic name') }}</label>
    <select class="form-control" wire:model="clinic_id">
        <option></option>
        @foreach ($Clinics as $clinic)
            <option value="{{ $clinic->id }}">{{ $clinic->name }}</option>
        @endforeach
    </select>
    @error('clinic_id')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-1">
    <label>{{ __('messages.Shift') }}</label>
    <select class="form-control" wire:model="shift">
        <option></option>
        <option value="morning">Morning</option>
        <option value="evening">Evening</option>
    </select>
    @error('shift')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-1">
    <label>{{ __('messages.Title') }}</label>
    <select class="form-control" wire:model="title">
        <option></option>
        <option value="professor">Professor</option>
        <option value="consultant">Consultant</option>
        <option value="specialist">Specialist</option>
    </select>
    @error('title')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-1">
    <label>{{ __('messages.Examination Fees') }}</label>
    <input class="form-control" type="number" wire:model.lazy="ex_fees" value="{{ old('ex_fees') }}">
    @error('ex_fees')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>

<label>{{ __('messages.Comment') }}</label>
<input class="form-control" type="text" wire:model.lazy="comment" value="{{ old('comment') }}">

<div class="my-2">
    <button class="btn btn-success" wire:click.prevent="store()">{{ __('messages.Save') }}</button>
</div>
