<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="bg-white font-inter">

        {{-- BODY --}}
        <div class="relative isolate px-2 pt-8 lg:px-4 sm:mx-8 xs:mx-8">

            <x-polygon-one></x-polygon-one>

            <div class="mx-auto max-w-4xl py-6">

            {{ $slot }}

            </div>

            <x-polygon-two></x-polygon-two>
        </div>
    </div>
</body>

</html>
