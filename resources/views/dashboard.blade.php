<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vos annonces') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{-- number of offers posted --}}
                        @if (sizeof($offers)) 
                        Vous avez {{sizeof($offers)}} offre(s) publiée(s).
                        <br><a href="/add" class="text-blue-500 font-bold">Déposer une annonce</a>
                        @else
                        Vous n'avez pas encore publié d'annonce <br> <a href="/add" class="text-blue-500 font-bold">Déposer une annonce</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-4 gap-4 px-8 py-4 ml-4">
        @foreach($offers as $o)
        <a href="/offer/{{$o->id}}">
        <div class="m4 bg-white rounded shadow overflow-hidden">
            {{-- <img src="" alt=""> --}}
            <img src="{{$o->image_url}}" class="h-72 object-cover w-full">
              {{-- CARD DESCRIPTION --}}
              <div class="p-4">
                <div class="text-sm font-semibold">{{$o->title}}
                </div>
            </div>
            <div>
                <div class="bg-gray-100 p-10">
                    <span class="grid grid-cols-3 content-center">
                        <div><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.736 6.979C9.208 6.193 9.696 6 10 6c.304 0 .792.193 1.264.979a1 1 0 001.715-1.029C12.279 4.784 11.232 4 10 4s-2.279.784-2.979 1.95c-.285.475-.507 1-.67 1.55H6a1 1 0 000 2h.013a9.358 9.358 0 000 1H6a1 1 0 100 2h.351c.163.55.385 1.075.67 1.55C7.721 15.216 8.768 16 10 16s2.279-.784 2.979-1.95a1 1 0 10-1.715-1.029c-.472.786-.96.979-1.264.979-.304 0-.792-.193-1.264-.979a4.265 4.265 0 01-.264-.521H10a1 1 0 100-2H8.017a7.36 7.36 0 010-1H10a1 1 0 100-2H8.472c.08-.185.167-.36.264-.521z" clip-rule="evenodd"></path></svg>
                        <span class="text-xl font-semibold">{{$o->rent}}€</span>
                        </div>
                        <div><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg><span class="text-xl font-semibold">{{$o->squaremeter}}m2</span></div>
                        <div><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg><span class="text-xl font-semibold">{{$o->people}}</span></div>
                      </span>
                </div>
            </div>

        </div>
    </div>
        </a>
    @endforeach
    </div>
</x-app-layout>
