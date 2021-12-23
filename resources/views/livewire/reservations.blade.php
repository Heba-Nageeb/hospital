<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="row flex-lg-nowrap">
        <div class="col-8 e-panel card bg-light">
            <div class="card-body">

                <div class="card-title text-center">
                    <h2 class="mr-2">{{ __('messages.List of') }} {{ __('messages.Reservations') }}</h2>
                </div>

                <input class="form-control w-100" wire:model="search" type="text"
                    placeholder="{{ __('messages.Search') }} {{ __('messages.Reservations') }} ..." value="">

                <div class="e-table">
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th class="max-width"> </th>
                                    <th class="max-width">{{ __('messages.Patient Name') }}</th>
                                    <th class="max-width">{{ __('messages.Clinic name') }}</th>
                                    <th class="max-width">{{ __('messages.Doctor name') }}</th>
                                    <th class="max-width">{{ __('messages.Examination Fees') }}</th>
                                    <th class="max-width">{{ __('messages.Comment') }}</th>
                                    <th class="max-width">{{ __('messages.Created by') }}</th>
                                    <th>{{ __('messages.Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Reservations as $Reservation)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-wrap align-middle">{{ $Reservation->name }}</td>
                                        <td class="align-middle">{{ $Reservation->doctors->clinics->name}}</td>
                                        <td class="align-middle">{{ $Reservation->doctors->name }}</td>
                                        <td class="align-middle">{{ $Reservation->doctors->ex_fees }}</td>
                                        <td class="align-middle">{{ $Reservation->comment }}</td>
                                        <td class="align-middle">{{ $Reservation->users->name}}</td>
                                        {{-- <td class="text-center align-middle">
                                            <div class="btn-group-md align-top ">
                                                <a class="btn text-light btn-success badge"
                                                    wire:click.prevent="edit({{ $Doctor->id }})">{{ __('messages.Edit') }}</a>
                                                <a class="btn text-light btn-danger badge"
                                                    wire:click.prevent="destroy({{ $Doctor->id }})"><i
                                                        class="fa fa-trash"></i><a>
                                            </div>
                                        </td> --}}
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">
                                            {{ __('messages.No Reservations to show') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $Reservations->links('livewire-pagination-links') }}
        </div>
        <div class="col-4 mb-3">
            <div class="card bg-light">
                <div class="card-body text-center">
                    {{-- @if ($updateMode)
                        @include('livewire.doctor.edit')
                    @else --}}
                        {{-- @include('livewire.doctor.create') --}}
                    {{-- @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
