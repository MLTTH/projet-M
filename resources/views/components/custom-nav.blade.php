<nav class="md:relative">
    {{-- NAV LEFT SIDE --}}
    <div class="md:flex justify-between p-6 items-center">
    <a href="{{ url('/') }}"><img class="w-auto h-24" src="{{asset('image/logo.png')}}" alt="" srcset=""></img>
    </a>
    
    {{-- NAV RIGHT SIDE --}}
    <div class="md:relative"> 
        @if (Route::has('login'))
        <div>
            @auth
            <div class="flex justify-right">
            <div><a href="{{ url('/add') }}" class="py-2 px-3 bg-amber-500 hover:bg-amber-400 rounded font-semibold">Poster une annonce</a></div>
            <div><a href="{{ url('/dashboard') }}" class="py-5 px-3 font-semibold hover:text-gray-800">Tableau de bord</a></div>

            <div><form method ="POST" action="{{ route('logout') }}">
                @csrf
             <input type="submit" value="Déconnexion" class="px-3 font-semibold hover:text-gray-800" />
            </form></div>


            @else
            <a href="{{ route('login') }}" class="py-5 px-3 font-semibold hover:text-gray-800">Se connecter</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="py-2 px-3 bg-amber-500 hover:bg-amber-400 rounded font-semibold">S'enregistrer</a>
            @endif
            @endauth
            </div>
        </div>
        @endif
    </div>



</nav>