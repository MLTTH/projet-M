<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                        <br><a href="/sell" class="text-blue-500 font-bold">Déposer une annonce</a>
                        @else
                        Vous n'avez pas encore publié d'annonce <br> <a href="/sell" class="text-blue-500 font-bold">Déposer une annonce</a>
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
                <div class="text-sm font-semibold">{{$o->title}}</div>
                <div class="text-sm text-gray h-8">{{$o->people}}</div>
            </div>
            <div class="border-t px-4 px-8">
            {{-- CARD RENT PRICE --}}
                <div class="text-sm font-semibold">{{$o->rent}}</div>
            </div>
        </div>
    </a>
    @endforeach
    </div>
</x-app-layout>
