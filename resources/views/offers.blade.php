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

    <h1>hello</h1>
    
    {{-- CARD --}}
    <div class="grid grid-cols-4 gap-4 p-4">
    @for($i=0; $i<4;$i++)
        <div class="m4 bg-white rounded shadow overflow-hidden">
            {{-- <img src="" alt=""> --}}
            <img src="https://picsum.photos/300/300" alt="">

            {{-- CARD DESCRIPTION --}}
            <div class="p-4">
                <div class="text-sm font-semibold">Titre</div>
                <div class="text-sm font-semibold">Texte</div>
            </div>
            <div class="border-t px-4 py-2">
            {{-- CARD RENT PRICE --}}
                <div class="text-sm font-semibold">Prix</div>
            </div>
        </div>
    @endfor
    </div>

</body>
</html>