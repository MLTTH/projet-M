<nav class="md:relative">
    {{-- NAV LEFT SIDE --}}
    <div class="md:flex justify-between p-6 items-center">
    <a href="{{ url('/') }}"><img class="w-auto h-24" src="{{asset('image/logo.png')}}" alt="" srcset=""></img>
    </a>
    
    {{-- NAV RIGHT SIDE --}}
    <div class="md:relative"> 
        @if (Route::has('login'))
        <div>
            <a href="{{ url('/add') }}" class="py-2 px-3 bg-yellow-400 text-yellow-800 rounded">Ajouter</a>
                @auth
                    <a href="{{ url('/dashboard') }}" class="py-2 px-3 bg-yellow-400 text-yellow-800 rounded">Tableau de bord</a>
                    @else
                    <a href="{{ route('login') }}" class="py-5 px-3">Se connecter</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="py-2 px-3 bg-yellow-400 text-yellow-800 rounded">S'enregistrer</a>
                    @endif
                @endauth
        </div>
        @endif
    </div>



</nav>