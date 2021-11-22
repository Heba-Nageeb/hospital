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
                    <h2 class="mr-2">{{ __('messages.List of') }} {{ __('messages.Clinics') }}</h2>
                </div>

                <input class="form-control w-100" wire:model="search" type="text"
                    placeholder="{{ __('messages.Search') }} {{ __('messages.Clinics') }} ..." value="">

                <div class="e-table">
                    <div class="table-responsive table-lg mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th class="max-width"> </th>
                                    <th class="max-width">{{ __('messages.Name') }}</th>
                                    <th class="sortable">{{ __('messages.Comment') }}</th>
                                    <th>{{ __('messages.Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Clinics as $Clinic)
                                    <tr>
                                        <td class="text-nowrap align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-nowrap align-middle">{{ $Clinic->name }}</td>
                                        <td class="text-nowrap align-middle">{{ $Clinic->comment }}</td>
                                        <td class="text-center align-middle">
                                            <div class="btn-group-md align-top ">
                                                <a class="btn text-light btn-success badge"
                                                    wire:click.prevent="edit({{ $Clinic->id }})">{{ __('messages.Edit') }}</a>
                                                <a class="btn text-light btn-danger badge"
                                                    wire:click.prevent="destroy({{ $Clinic->id }})"><i
                                                        class="fa fa-trash"></i><a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            {{ __('messages.No Clinics to show') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $Clinics->links() }}
        </div>
        <div class="col-4 mb-3">
            <div class="card bg-light">
                <div class="card-body text-center">
                    @if ($updateMode)
                        @include('livewire.clinic.edit')
                    @else
                        @include('livewire.clinic.create')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
