<!doctype html>
<html lang="en">

<head>
    <title>@yield('title', 'Tes Fullstack Using Template Ablepro')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Backend Panel">
    <meta name="author" content="Phoenixcoded">
    <link rel="icon" href="{{ url('/ableproadmin.com') }}/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/css/plugins/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/fonts/inter/inter.css">
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/fonts/phosphor/duotone/style.css">
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/fonts/tabler-icons.min.css">
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/fonts/feather.css">
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/fonts/material.css">
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/css/style-preset.css">
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/css/plugins/flatpickr.min.css" />
    <link rel="stylesheet" href="{{ url('/ableproadmin.com') }}/assets/css/plugins/datepicker-bs5.min.css" />
    @yield('styles')
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme="dark">
    @include('partials.header')

    <div class="container mt-5">
        @yield('content')
    </div>

    @include('partials.footer')
    <script src="{{ url('/ableproadmin.com') }}/assets/js/plugins/flatpickr.min.js"></script>
    <script src="{{ url('/ableproadmin.com') }}/assets/js/plugins/popper.min.js"></script>
    <script src="{{ url('/ableproadmin.com') }}/assets/js/plugins/simplebar.min.js"></script>
    <script src="{{ url('/ableproadmin.com') }}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ url('/ableproadmin.com') }}/assets/js/fonts/custom-font.js"></script>
    <script src="{{ url('/ableproadmin.com') }}/assets/js/pcoded.js"></script>
    <script src="{{ url('/ableproadmin.com') }}/assets/js/plugins/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>
    <script src="{{ url('/ableproadmin.com') }}/assets/js/plugins/dataTables.min.js"></script>
    <script src="{{ url('/ableproadmin.com') }}/assets/js/plugins/dataTables.bootstrap5.min.js"></script>
    <script src="{{ url('/ableproadmin.com') }}/assets/js/plugins/datepicker-full.min.js"></script>
    <script src="{{ url('/ableproadmin.com') }}/assets/js/plugins/bouncer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            layout_change('dark');
        });
    </script>
    @yield('scripts')
</body>

</html>
