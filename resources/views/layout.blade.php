<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Akademik Kampus')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/62156a3d36.js" crossorigin="anonymous"></script>
</head>

<body>
    @if (!Request::is('login') && !Request::is('register'))
    @include('partials.navbar')
    @endif

    <div
        class="w-full h-full absolute -z-50 bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px]">
    </div>
    <div class="container mx-auto">
        @yield('content')
    </div>

    @if (!Request::is('login') && !Request::is('register'))
    @include('partials.footer')
    @endif
</body>

</html>