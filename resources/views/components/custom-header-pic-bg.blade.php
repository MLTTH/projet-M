
<div class="h-full bg-fixed bg-center bg-cover custom-img md:h-screen" style="background-image: url('image/header-pic.jpeg');">
{{-- @include ('components/custom-nav')  --}}
     {{-- TITLE --}}
     <div class="md:flex md:flex-col text-8xl font-extrabold flex content-center justify-center h-full items-center pb-36">
        <h1 class="bg-clip-text text-amber-500">
          La bonne coloc'
        </h1>

        {{-- NAV --}}
        <div class="text-sm my-3 opacity-80">    
          <div> 
          @if (Route::has('login'))
          <div>
              @auth
              <a href="{{ url('/add') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">Poster une annonce</a>
              <a href="{{ url('/dashboard') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">Tableau de bord</a>
              <form class="py-2 px-3 text-red-500" method="POST" action="{{ route('logout') }}">
                  @csrf
                          <x-dropdown-link :href="route('logout')"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                              {{ __('Log Out') }}
                          </x-dropdown-link>
                      </form>
                      @else
                      <a href="{{ route('login') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">Se connecter</a>
                      @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">S'enregistrer</a>
                      @endif
                  @endauth
          </div>
          @endif
      </div>
      </div>

      </div>
</div>