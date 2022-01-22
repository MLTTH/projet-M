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
            <div>
            <a href="{{ url('/add') }}" class="py-2 px-3 text-cyan-600 font-bold">Poster une annonce</a>
            <a href="{{ url('/dashboard') }}" class="py-2 px-3 text-cyan-600 font-bold">Tableau de bord</a>
            {{-- <form class="py-2 px-3 " method="POST" action="{{ route('logout') }}">
            
                
                @csrf
                
                <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Déconnexion') }}
                        </x-dropdown-link>
            </form> --}}


            <form method ="POST" action="{{ route('logout') }}">
                @csrf
             <input type="submit" value="Déconnexion" class="m-1 rounded px-4 py-2 bg-cyan-600 shadow hover:bg-sky-700 text-white font-bold text-sm" />
            </form>


                    @else
                    <a href="{{ route('login') }}" class="py-5 px-3">Se connecter</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="py-2 px-3 bg-yellow-400 text-yellow-800 rounded">S'enregistrer</a>
                    @endif
                    @endauth
        </div>
        </div>
        @endif
    </div>



</nav>