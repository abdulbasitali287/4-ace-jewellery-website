<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jewelry</title>
    <link rel="stylesheet" href="{{ asset('app/assets/images/logo/logo-1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('app/assets/css/custom-styles.css') }}">
    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body>
    {{-- header component --}}
    <x-app.header></x-app.header>


    <div class="w-auto">
        @yield('content')
    </div>

    {{-- javascript links --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@heroicons/vue@1.0.4/dist/heroicons.js"></script> --}}


    {{-- footer component --}}
    <x-app.footer></x-app.footer>

    {{-- reCaptcha --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <script src="{{ asset('app/assets/js/navbar.js') }}"></script>
    @stack('js')
</body>

</html>
