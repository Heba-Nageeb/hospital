<h5 class="mb-2"> {{ __('messages.Edit Clinic') }}</h5> <hr>

<div class="mb-1">
    <label>{{ __('messages.Name') }}</label>
    <input class="form-control" type="text" wire:model="name" value="{{ $name }}">
    @error('name')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="mb-1">
    <label>{{ __('messages.Phone Number') }}</label>
    <input class="form-control" type="text" wire:model="phone" value="{{ $phone }}">
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
        <option value="morning" @if ($shift == "morning"){{"selected"}}@endif>Morning</option>
        <option value="evening" @if ($shift == "evening"){{"selected"}}@endif>Evening</option>
    </select>
    @error('shift')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-1">
    <label>{{ __('messages.Title') }}</label>
    <select class="form-control" wire:model="title">
        <option></option>
        <option value="professor" @if ($title == "professor"){{"selected"}}@endif>Professor</option>
        <option value="consultant" @if ($title == "consultant"){{"selected"}}@endif>Consultant</option>
        <option value="specialist" @if ($title == "specialist"){{"selected"}}@endif>Specialist</option>
    </select>
    @error('title')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-1">
    <label>{{ __('messages.Examination Fees') }}</label>
    <input class="form-control" type="number" wire:model="ex_fees" value="{{ $ex_fees }}">
    @error('ex_fees')
        <small id="helpId" class="text-danger">{{ $message }}</small>
    @enderror
</div>

<label>{{ __('messages.Comment') }}</label>
<input class="form-control" type="text" wire:model="comment" value="{{ $comment }}">

<div class="my-2">
    <button class="btn btn-success" wire:click.prevent="update({{ $doctor_id }})">{{ __('messages.Save') }}</button>
    <button class="btn btn-secondary mr-1" wire:click.prevent="cancel()">{{ __('messages.Cancel') }}</button>
</div>
