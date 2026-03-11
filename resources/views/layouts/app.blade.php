<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel Livewire Starter')</title>
    <meta name="description" content="@yield('description', 'Starter template for admin-heavy Laravel Livewire apps.')">
    @livewireStyles
</head>
<body style="font-family: Inter, sans-serif; margin: 0; background: #fff; color: #111827;">
    @include('partials.header')
    <main>@yield('content')</main>
    @livewireScripts
</body>
</html>
