
<div class="h-full bg-fixed bg-center bg-cover custom-img md:h-screen" style="background-image: url('image/header-pic.jpeg');">
{{-- @include ('components/custom-nav')  --}}
     {{-- TITLE --}}
     <div class="md:flex md:flex-col text-8xl font-extrabold flex content-center justify-center h-full items-center pb-36">
        <h1 class="bg-clip-text text-amber-500">
          La bonne coloc'
        </h1>

        {{-- NAV --}}
        {{-- <div class="text-sm my-3 opacity-80">    
          <> 
          @if (Route::has('login'))
          <div>
              @auth
              <a href="{{ url('/add') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">Poster une annonce</a>
              <a href="{{ url('/dashboard') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">Tableau de bord</a>
              <div class="flex justify-center m-2">
              <form method ="POST" action="{{ route('logout') }}">
                @csrf
              <input type="submit" value="Déconnexion" class="uppercase m-2 rounded px-4 py-2 bg-slate-200 shadow hover:bg-slate-300 text-cyan-600 text-sm" />
              </form>
                      @else
                      <a href="{{ route('login') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">Se connecter</a>
                      @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">S'enregistrer</a>
                      @endif
                  @endauth
                </div>
          </div>
          @endif
    
        </div> --}}

      </div>
</div>

<div>    

  @if (Route::has('login'))
  <div class="flex justify-items-start">
      @auth
      <div>
        <a href="{{ url('/add') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">Poster une annonce</a>
      </div>
      <div>
        <a href="{{ url('/dashboard') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">Tableau de bord</a>
      </div>
      <div>
        <form method ="POST" action="{{ route('logout') }}">
        @csrf
        <input type="submit" value="Déconnexion" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700" />
        </form>
              @else
              <a href="{{ route('login') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">Se connecter</a>
              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700">S'enregistrer</a>
              @endif
          @endauth
      </div>
  </div>
  @endif

</div>


{{-- TEST --}}
<div>
@if (Route::has('login'))
@auth
<form method ="POST" action="{{ route('logout') }}">
  @csrf
  <input type="submit" value="Déconnexion" class="py-2 px-3 bg-cyan-600 text-slate-50 rounded hover:bg-sky-700" />
  </form>
  @endauth
@endif
</div>