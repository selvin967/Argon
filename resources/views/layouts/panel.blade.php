<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title') - {{ config('app.name') }}
    </title>
    <!-- Favicon -->
    <link href="{{ asset('img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />

    <style>
        body {
            background: #f4f7fb;
            color: #252f40;
        }
        .main-content {
            min-height: 100vh;
        }
        .navbar-vertical .navbar-brand {
            padding: 1.2rem 0;
        }
        .bg-gradient-primary {
            background: linear-gradient(135deg, #3a76f0 0%, #5f9df8 100%) !important;
        }
        .card {
            border-radius: 1rem;
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.08);
        }
        .card-header {
            background: #ffffff;
            border-bottom: 1px solid #e9ecef;
        }
        .card-footer {
            background: #fbfbfb;
        }
        .crud-card-footer > *:not(:last-child) {
            margin-right: 0.75rem;
        }
        .badge-dark {
            background-color: #344767;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .header {
            min-height: 190px;
        }
        .bg-white .navbar-brand-img {
            max-height: 4rem;
        }
        .navbar-top {
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255,255,255,0.92);
        }
    </style>

    {{-- @vite('resources/js/app.js') --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    @livewireStyles
</head>

<body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0 d-flex align-items-center" href="{{ route('dashboard') }}">
                <img src="{{ asset('img/brand/blue.png') }}" class="navbar-brand-img" alt="Logo" style="width:auto;">
                <span class="ml-2 font-weight-bold text-primary">{{ config('app.name') }}</span>
            </a>
            <!-- User -->
            @include('includes.mobile_menu')
            <!-- Collapse -->
            <livewire:navigation />
        </div>
    </nav>

    @if (request()->routeIs('profile.index'))
        <div class="main-content">
            <!-- Navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <!-- Brand -->
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                        href="{{ route('profile.index') }}">Perfil de
                        Usuario</a>
                    <!-- User -->
                    <livewire:menu />
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- Header -->
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
                style="min-height: 600px; background-image: url({{ auth()->user()->image() }}); background-size: cover; background-position: center top;">
                <!-- Mask -->
                <span class="mask bg-gradient-default opacity-8"></span>
                <!-- Header container -->
                <livewire:profile-edit />
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--7">
                @yield('content')
            </div>
        </div>
    @else
        <div class="main-content">
            <!-- Navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <!-- Brand -->
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                        href="{{ route('dashboard') }}">Dashboard</a>
                    <livewire:menu />
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- Header -->
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
            <div class="container-fluid mt--7">
                @yield('content')
            </div>
        </div>
    @endif

    <!--   Core   -->
    <script src="{{ asset('js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--   Optional JS   -->
    <script src="{{ asset('js/plugins/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('js/plugins/chart.js/dist/Chart.extension.js') }}"></script>

    <!-- Include Choices JavaScript (versioned) -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
    <!--   Argon JS   -->
    <script src="{{ asset('js/argon-dashboard.min.js?v=1.1.2') }}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var selectElement = document.querySelector('#exampleFormControlSelect2');
            if (selectElement) {
                var multipleCancelButton = new Choices(selectElement, {
                    removeItemButton: true,
                    maxItemCount: 5,
                    searchResultLimit: 5,
                    renderChoiceLimit: 5
                });
            }
        });
    </script>


    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @include('components.alerts') <!-- Mueve esto al final -->
    @livewireScripts
</body>

</html>
