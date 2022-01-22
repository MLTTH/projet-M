<x-app-layout>
    <x-slot name="header">
       
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

    <div class="text-center text-amber-500 text-5xl font-bold">
        <h1>{{ __('Vos annonces') }}</h1>
        </div>

@include('components/custom-each-offer')
</x-app-layout>
