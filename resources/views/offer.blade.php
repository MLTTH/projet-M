<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body class="bg-gray-50">

    <nav class="relative">
        {{-- NAV LEFT SIDE --}}
        <div class="md:flex justify-between p-6 items-center">
            <a href="{{ url('/') }}"><img class="w-auto h-24" src="{{asset('image/logo.png')}}" alt="" srcset=""></img></a>
        
        {{-- NAV RIGHT SIDE --}}
        <div class="md:relative"> 
            @if (Route::has('login'))
            <div>
                <a href="{{ url('/add-form') }}" class="py-5 px-3">Ajouter</a>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-100 dark:text-gray-500">Tableau de bord</a>
                        @else
                        <a href="{{ route('login') }}" class="py-5 px-3">Se connecter</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="py-2 px-3 bg-yellow-400 text-yellow-800 rounded">S'enregistrer</a>
                        @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </nav>
    
    {{-- MAIN CONTENT --}}
<div class="flex m-4">
    {{-- LEFT --}}
    <div class="w-1/2 rounded shadow overflow-hidden">
        <img classe="object-cover w-full" src="https://picsum.photos/700/700" alt="">
    </div>
    {{-- RIGHT --}}
    <div class="w-1/2 rounded bg-white ml-2 p-4 shadow relative">
        <div class="p-4">
            <div class="font-semibold">Titre</div>
            <div class="text-sm text-gray-500">Titre</div>
            <div class="text-sm text-gray-500">Texte</div>
        </div>
        <div class="border-t px-4 py-2">
        {{-- ROOMATE INFO --}}
            <div class="text-sm font-semibold text-gray">Proposé par :</div>
            <div class="text-sm text-gray-500">NAME</div>
        </div>

        <div class="px-4 py-2">
            <div class="text-sm font-semibold text-gray">Téléphone :</div>
            @auth
            <div class="text-sm text-gray-500">0600000038</div>
            @else
            <div class="text-sm text-gray-500">********</div>
            @endauth
        </div>

        <div class="px-4 py-2">
            <div class="text-sm font-semibold text-gray">Email :</div>
            @auth
            <div class="text-sm text-gray-500">mail@mail.com</div>
            @else
            <div class="text-sm text-gray-500">******@**********.***</div>
            @endauth
        </div>

        {{-- RENT $$$--}}
        <div class="absolute bottom-0 right-0 m-6 rounded-full px-4 py-2 bg-green-500">
            <div class="text-white font-bold text-sm">800 EUROS</div>
        </div>
    </div>
</div>

    {{-- FOOTER --}}
    <footer class="ml-2 md:flex justify-center">
        <div class="md:grid grid-rows-{4} grid-flow-col gap-4 m-4 max-w-md">
            <div class="mt-6 mr-4">A propos</div>
            <div class="mt-6 mr-4">Contact</div>
            <div class="mt-6 mr-4">Designed by Thi N.</div>
            <div class="mt-6 mr-4">2022</div>
        </div>
        </footer>
</body>
</html>