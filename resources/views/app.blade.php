<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.0.0/dist/tailwind.min.css">
        {{-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@3.0.0/dist/tailwind.min.css"> --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <script src="{{ mix('/js/app.js') }}" defer></script>
        @inertiaHead
    </head>

    <body>
        @inertia
    </body>
</html>