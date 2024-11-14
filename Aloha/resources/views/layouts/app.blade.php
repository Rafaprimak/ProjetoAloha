<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aloha')</title>
    <!-- Include your CSS files -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    <!-- Include your JavaScript files -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>