<x-custom-base-layout>
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
            <div class="text-center">
            <h1>Poster votre annonce</h1>
            <p class="text-xs">Tous les champs doivent être renseignés</p>
            </div>
        </x-slot>


        {{-- FORM --}}
        <form method="POST" action="/offer" enctype="multipart/form-data">

            @csrf


            {{-- <div class="mt-2">
                <label for="title" class="text-sm text-gray-500">Colocation dans un appartement de <input type="text" id="title" name='title' 
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300"> m2 dans le <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                </select>ème arrondissement de Paris</label>
            </div>


            <div class="mt-2">
                <label for="people" class="text-sm text-gray-500">Appartement partagé par 
                    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select> personne(s)
                </label>
            </div> --}}
            <div class="mt-2">
            <label for="title" class="text-sm text-gray-500">Titre de l'annonce</label>
            <input type="text" id="title" name='title' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
            </div>

            <div class="mt-2">
            <label for="squaremeter" class="text-sm text-gray-500">Superficie du logement</label>
            <input type="text" id="squaremeter" name='squaremeter' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
            </div>

            <div class="mt-2">
            <label for="area" class="text-sm text-gray-500">Précisez l'arrondissement</label>
            <input type="number" id="area" name='area' min="1" max="20"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
            </div>

            <div class="mt-2">
            <label for="people" class="text-sm text-gray-500">Nombre de locataires vivant dans la colocation</label>
            <input type="text" id="people" name='people' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
            </div>

            <div class="mt-2">
            <label for="rent" class="text-sm text-gray-500">Loyer mensuel hors charges</label>
            <input type="text" id="rent" name='rent'
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
            </div>


            <div class="mt-2">
            <label for="desc-full" class="text-sm text-gray-500">Décrivez la colocation</label>
            <textarea id="desc-full" name='desc-full' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
            </textarea>
            </div>

{{-- 
            <div class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
            <label for="movein" class="text-sm text-gray-500">Date d'emménagement possible :</label>
            <input type="date" id="movein" name="movein" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
            <span class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full"></span>
            </div> --}}


            <div class="mt-2">
            <label for="img" class="text-sm text-gray-500">Chargez une photo</label>
            <input type="file" id="img" name='img' 
            class="w-full">
            </div>

            <x-button class="mt-4 w-full justify-center">
            Enregistrer
            </x-button>
        </div>
        </form>
    </x-form-container-card>
</x-custom-base-layout>