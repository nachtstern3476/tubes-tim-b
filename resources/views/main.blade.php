<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthro Technology</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    @include('component.header')
    @yield('content')
    @include('component.footer')
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
