<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login Admin</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Custom fonts for this template-->
        <link href="{{ asset('template') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{ asset('template') }}/css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('template') }}/vendor/jquery/jquery.min.js"></script>
        <script src="{{ asset('template') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('template') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('template') }}/js/sb-admin-2.min.js"></script>
    </head>
    <body class="bg-gradient-primary">
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>
    </body>
</html>
