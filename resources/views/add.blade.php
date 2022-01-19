<x-custom-base-layout>
    <x-form-container-card>

        <x-slot name="title">
            Annonce
        </x-slot>

        <form>

            @csrf


            <div class="mt-2">
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
            </div>



            <div class="mt-2">
            <label for="title" class="text-sm text-gray-500">Loyer mensuel hors charges</label>
            <input type="text" id="title" name='title' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
            </div>


            <div class="mt-2">
            <label for="title" class="text-sm text-gray-500">Décrivez la colocation</label>
            <textarea id="desc-full" name='desc-full' 
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
            </textarea>
            </div>


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