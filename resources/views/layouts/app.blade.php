<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Krepsinio statistika</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Čia galite įtraukti kitus stilių ar JavaScript failus -->
</head>
<body>
    <div class="container mx-auto px-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Čia galite įtraukti papildomus JavaScript failus -->
</body>
</html>
