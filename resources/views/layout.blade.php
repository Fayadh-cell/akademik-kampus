<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Akademik Kampus')</title>
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
    @include('partials.navbar')
    
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
    
    @include('partials.footer')
</body>
</html>