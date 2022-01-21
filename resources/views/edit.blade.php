<x-custom-base-layout>
    @include('components/custom-nav')
    <x-form-container-card>


        {{-- STORE ERRORS --}}
        @if($errors->any())
        <div class="text-red-600 text-xs">
            @foreach($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
        </div>
        @endif


        {{--  --}}
        <x-slot name="title">
            <div class="text-center text-amber-500 text-5xl font-bold">
                <h1>Modifier votre annonce</h1>
                <p class="text-xs">Tous les champs doivent être renseignés</p>
                </div>
        </x-slot>


        {{-- FORM --}}
        <form method="POST" action="/update" enctype="multipart/form-data">

            @csrf

            <div class="mt-2">
            <label for="title" class="text-sm text-gray-500">Titre de l'annonce</label>
            <input type="text" id="title" name='title' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full" value="{{$offer->title}}">
            </div>

            <div class="mt-2">
            <label for="squaremeter" class="text-sm text-gray-500">Superficie du logement</label>
            <input type="text" id="squaremeter" name='squaremeter' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full" value="{{$offer->squaremeter}}">
            </div>

            <div class="mt-2">
            <label for="area" class="text-sm text-gray-500">Précisez l'arrondissement</label>
            <input type="text" id="area" name='area' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full" value="{{$offer->area}}">
            </div>

            <div class="mt-2">
            <label for="people" class="text-sm text-gray-500">Nombre de colocataires vivant dans la colocation</label>
            <input type="text" id="people" name='people' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full" value="{{$offer->people}}">
            </div>

            <div class="mt-2">
            <label for="rent" class="text-sm text-gray-500">Loyer mensuel hors charges</label>
            <input type="text" id="rent" name='rent' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full" value="{{$offer->rent}}">
            </div>


            <div class="mt-2">
            <label for="desc-full" class="text-sm text-gray-500">Décrivez la colocation</label>
            <textarea id="desc-full" name='desc-full' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full" value="{{$offer->long_desc}}">
            </textarea>
            </div>


            <div class="mt-2">
            <label for="img" class="text-sm text-gray-500">Chargez une photo</label>
            <input type="file" id="img" name='img' class="w-full">
            </div>

            <x-button class="mt-4 w-full justify-center">
            Mettre à jour
            </x-button>
        </div>
        </form>
    </x-form-container-card>
</x-custom-base-layout>