<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pixel Positions</title>
</head>

<body class="bg-black text-white font-hanken-grotesk pb-10">

    <div class="px-10  ">
        <nav class="flex justify-between items-center py-4 border-b  border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
            <div class="space-x-6 font-bold">
                <a href="jobs/create">Post Job</a>
                <a href="/logout" class="text-red-500 ">Log Out</a>
            </div>
            @endauth
        @guest
        <div class="space-x-6 font-bold">
            <a href="#">Sign Up</a>
            <a href="#">Log In</a>
       
        </div>
        @endguest
        </nav>


        <main class="mt-10 max-w-[986px] mx-auto">

            {{ $slot }}
        </main>
    </div>

</body>

</html>
