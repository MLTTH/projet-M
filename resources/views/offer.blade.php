<x-custom-base-layout>
    {{-- MAIN CONTENT --}}
<div class="flex m-4">
    {{-- LEFT --}}
    <div class="w-1/2 rounded shadow overflow-hidden">
        <img classe="object-cover w-full" src="https://picsum.photos/700/700" alt="">
    </div>
    {{-- RIGHT --}}
    <div class="w-1/2 rounded bg-white ml-2 p-4 shadow relative">
        <div class="p-4">
            <div class="font-semibold">Titre</div>
            <div class="text-sm text-gray-500">Titre</div>
            <div class="text-sm text-gray-500">Texte</div>
        </div>
        <div class="border-t px-4 py-2">
        {{-- ROOMATE INFO --}}
            <div class="text-sm font-semibold text-gray">Proposé par :</div>
            <div class="text-sm text-gray-500">NAME</div>
        </div>

        <div class="px-4 py-2">
            <div class="text-sm font-semibold text-gray">Téléphone :</div>
            @auth
            <div class="text-sm text-gray-500">0600000038</div>
            @else
            <div class="text-sm text-gray-500">********</div>
            @endauth
        </div>

        <div class="px-4 py-2">
            <div class="text-sm font-semibold text-gray">Email :</div>
            @auth
            <div class="text-sm text-gray-500">mail@mail.com</div>
            @else
            <div class="text-sm text-gray-500">******@**********.***</div>
            @endauth
        </div>

        {{-- RENT $$$--}}
        <div class="absolute bottom-0 right-0 m-6 rounded-full px-4 py-2 bg-green-500">
            <div class="text-white font-bold text-sm">800 EUROS</div>
        </div>
    </div>
</div>

</x-custom-base-layout>