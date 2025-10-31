<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css')}}" />
        <title>Contact - Livewire</title>

        @livewireStyles
    </head>
<body>
    {{ $slot ?? '' }}

    {{-- @livewireScripts --}}
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
