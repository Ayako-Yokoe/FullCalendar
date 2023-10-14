<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
        @stack("styles")
        
    </head>
    <body class="bg-orange-200">
        <livewire:calendar />
        
        @livewireScripts
        @stack("scripts")
    </body>
</html>

