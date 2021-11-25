<!DOCTYPE html>
<html lang="{{ __('messages.lang') }}" dir="{{ __('messages.dir') }}">

<head>
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Alex Hospital</title>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    @livewireStyles
</head>

<body class="bg-light">
    <nav class="shadow navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{ __('messages.Alex Hospital') }}</a>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('messages.Language') }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/lang/en">English</a></li>
                            <li><a class="dropdown-item" href="/lang/ar">العربية</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- <div class="container mt-5"> --}}
    <div class="m-5">
        {{-- @livewire('clinics') --}}
        {{-- @livewire('doctors') --}}
        {{-- </div> --}}
        <ul class="nav nav-tabs " id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="clinic-tab" data-bs-toggle="tab" data-bs-target="#clinic"
                    type="button" role="tab" aria-controls="clinic" aria-selected="true">Clinics</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="doctor-tab" data-bs-toggle="tab" data-bs-target="#doctor"
                    type="button" role="tab" aria-controls="doctor" aria-selected="false">Doctors</button>
            </li>
        </ul>
        <div class="shadow bg-white p-5">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active" id="clinic" role="tabpanel" aria-labelledby="clinic-tab">
                    @livewire('clinics')</div>
                <div class="tab-pane fade" id="doctor" role="tabpanel" aria-labelledby="doctor-tab">
                    @livewire('doctors')
                </div>
            </div>
        </div>

    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
