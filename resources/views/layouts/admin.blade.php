<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('build/assets/css/bootstrap.min.css')  }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png')}}" />
        @livewireStyles
    </head>
    <body >

        <div class="container-scroller">
                @include('layouts.inc.admin.navbar')
                
            <div class="container-fluid page-body-wrapper">
                @include('layouts.inc.admin.sidebar')

                <div class="main-panel">
                    <div class="content-wrapper">
                            @yield('content')
                    </div>
                </div>
            </div>

        </div>


         <!-- Scripts -->
        <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
        <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <!-- inject:js -->
        <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
        <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
        <script src="{{ asset('admin/js/template.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('admin/js/dashboard.js')}}"></script>
        <script src="{{ asset('admin/js/data-table.js')}}"></script>
        <script src="{{ asset('admin/js/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('admin/js/dataTables.bootstrap4.js')}}"></script>
        <!-- End custom js for this page-->
         <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/js/app.js'])
         <script src=" {{ asset('build/assets/js/jquery-3.6.1.min.js') }} "></script>
         <script src=" {{ asset('build/assets/js/bootstrap.bundle.min.js') }} "></script>
         @livewireScripts
    </body>
</html>
