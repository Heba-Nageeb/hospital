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
                    <h2 class="mr-2">{{ __('messages.List of') }} {{ __('messages.Doctors') }}</h2>
                </div>

                <input class="form-control w-100" wire:model="search" type="text"
                    placeholder="{{ __('messages.Search') }} {{ __('messages.Doctors') }} ..." value="">

                <div class="e-table">
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th class="max-width"> </th>
                                    <th class="max-width">{{ __('messages.Name') }}</th>
                                    <th class="max-width">{{ __('messages.Phone Number') }}</th>
                                    <th class="max-width">{{ __('messages.Clinic name') }}</th>
                                    <th class="max-width">{{ __('messages.Title') }}</th>
                                    <th class="max-width">{{ __('messages.Shift') }}</th>
                                    <th class="max-width">{{ __('messages.Examination Fees') }}</th>
                                    <th class="max-width">{{ __('messages.Comment') }}</th>
                                    <th>{{ __('messages.Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Doctors as $Doctor)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-wrap align-middle">{{ $Doctor->name }}</td>
                                        <td class="align-middle">{{ $Doctor->phone }}</td>
                                        <td class="align-middle">{{ $Doctor->clinics->name }}</td>
                                        <td class="align-middle">{{ $Doctor->title }}</td>
                                        <td class="align-middle">{{ $Doctor->shift }}</td>
                                        <td class="align-middle">{{ $Doctor->ex_fees }}</td>
                                        <td class="align-middle">{{ $Doctor->comment }}</td>
                                        <td class="text-center align-middle">
                                            <div class="btn-group-md align-top ">
                                                <a class="btn text-light btn-success badge"
                                                    wire:click.prevent="edit({{ $Doctor->id }})">{{ __('messages.Edit') }}</a>
                                                <a class="btn text-light btn-danger badge"
                                                    wire:click.prevent="destroy({{ $Doctor->id }})"><i
                                                        class="fa fa-trash"></i><a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            {{ __('messages.No Doctors to show') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $Doctors->links('livewire-pagination-links') }}
        </div>
        <div class="col-4 mb-3">
            <div class="card bg-light">
                <div class="card-body text-center">
                    @if ($updateMode)
                        @include('livewire.doctor.edit')
                    @else
                        @include('livewire.doctor.create')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
