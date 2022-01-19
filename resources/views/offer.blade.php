<x-custom-base-layout>
    {{-- MAIN CONTENT --}}
<div class="flex m-4">
    {{-- LEFT --}}
    <div class="w-1/2 rounded shadow overflow-hidden">
        <img classe="object-cover w-full" src="{{asset($offer->image_url)}}" alt="">
    </div>
    {{-- RIGHT --}}
    <div class="w-1/2 rounded bg-white ml-2 p-4 shadow relative">
        <div class="p-4">
            <div class="font-semibold">{{$offer->title}}</div>
            <div class="text-sm text-gray-500">{{$offer->people}}</div>
            <div class="text-sm text-gray-500">{{$offer->rent}}</div>
            <div class="text-sm text-gray-500">{{$offer->squaremeter}}</div>
            <div class="text-sm text-gray-500">{{$offer->long_desc}}</div>
        </div>
        <div class="border-t px-4 py-2">
        {{-- ROOMATE INFO --}}
            <div class="text-sm font-semibold text-gray">Proposé par :</div>
            <div class="text-sm text-gray-500">{{$offer->user->name}}</div>
        </div>

        <div class="px-4 py-2">
            <div class="text-sm font-semibold text-gray">Téléphone :</div>
            @auth
            <div class="text-sm text-gray-500">{{$offer->user->phone}}</div>
            @else
            <div class="text-sm text-gray-500">********</div>
            @endauth
        </div>

        <div class="px-4 py-2">
            <div class="text-sm font-semibold text-gray">Email :</div>
            @auth
            <div class="text-sm text-gray-500">{{$offer->user->email}}</div>
            @else
            <div class="text-sm text-gray-500">******@**********.***</div>
            @endauth
        </div>

        {{-- RENT $$$--}}
        <div class="absolute bottom-0 right-0 m-6 rounded-full px-4 py-2 bg-green-500">
            <div class="text-white font-bold text-sm">{{$offer->rent}}</div>
        </div>
    </div>
</div>

</x-custom-base-layout>