<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ΔΡ. ΣΙΕΜΠΗΣ ΘΩΜΑΣ</title>
    @vite(['resources/assets/sass/app.scss', 'resources/assets/js/app.js'])
    <link rel="stylesheet" href="https://use.typekit.net/wto6cfh.css">
</head>

<body class="@yield('body-class')">
    @include('partials.header')

    <main>
        @yield('content')
    </main>
    @include('partials.modal')
    @include('partials.footer')
    @stack('scripts')
</body>

</html>
