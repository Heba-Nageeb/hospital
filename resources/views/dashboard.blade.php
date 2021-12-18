<x-app-layout>
    <x-slot name="header">
        <h2 class="p-3">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>

    <div class="m-5">
        <ul class="nav nav-tabs " id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="clinic-tab" data-bs-toggle="tab" data-bs-target="#clinic"
                    type="button" role="tab" aria-controls="clinic" aria-selected="true">{{ __('messages.Clinics') }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="doctor-tab" data-bs-toggle="tab" data-bs-target="#doctor"
                    type="button" role="tab" aria-controls="doctor" aria-selected="false">{{ __('messages.Doctors') }}</button>
            </li>
        </ul>
        <div class="shadow bg-white p-5">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="clinic" role="tabpanel" aria-labelledby="clinic-tab">
                    @livewire('clinics')</div>
                <div class="tab-pane fade" id="doctor" role="tabpanel" aria-labelledby="doctor-tab">
                    @livewire('doctors')
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
