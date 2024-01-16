<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="mx-auto">
        @yield('content')
        @isset($slot)
        {{ $slot }}
        @endisset
    </div>
</body>
</html>
