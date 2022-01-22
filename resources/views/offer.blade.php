<x-custom-base-layout>
    @include('components/custom-nav')

    <div class="my-9">  
        <h1 class="text-center text-amber-500 text-5xl font-bold">Annonce de {{$offer->user->name}} </h1>
    </div>



    {{-- MAIN CONTENT --}}
<div class="flex m-4">
    {{-- LEFT --}}
    <div class="w-1/2 rounded shadow overflow-hidden">
        <img classe="object-cover w-full h-96" src="{{asset($offer->image_url)}}" alt="">
    </div>
    {{-- RIGHT --}}
    <div class="w-1/2 rounded bg-white ml-2 p-4 shadow relative">


      
            
 {{-- Allow logged in user to modify and delete his own add --}}
 @if(Auth::id()==$offer->user->id)
 <div class="flex justify-start">
 <a class ="m-1 rounded px-4 py-2 bg-cyan-600 shadow hover:bg-sky-700"href="/edit/{{$offer->id}}">
     <div class="text-white font-bold text-sm ">Modifier</div>
 </a>
 <form method ="POST" action="/delete/{{$offer->id}}">
    @csrf
 {{-- <a class ="m-1 rounded px-4 py-2 bg-red-300 shadow hover:bg-red-400"href="/delete/{{$offer->id}}">
     <div class="text-white font-bold text-sm ">Supprimer</div>
 </a> --}}
 <input type="submit" value="Delete" class="bg-red-300 ml-1 rounded-full" />
</form>
 </div>
@endif
      
   
        <div class="p-4">
            <div class="uppercase text-cyan-600  font-semibold font-bold text-xl">{{$offer->title}}</div>
            {{-- TEST --}}
            <div class="text-sm text-gray-500 py-2">{{$offer->user->name}} propose une chambre dans un appartement de {{$offer->squaremeter}}m2 situé dans le {{$offer->area}}ème arrondissement de Paris pour un loyer mensuel HC de {{$offer->rent}}€.<br>La colocation est composée au total de {{$offer->people}} personnes.</div>
       
            <div class="uppercase text-sm font-semibold text-gray-700 py-2">Description : </div>
            <div class="text-sm text-gray-500">{{$offer->long_desc}}</div>
           
        </div>

        {{-- <div class="border-t px-4 py-2"> --}}

        <div class="px-4 py-2">
            <div class="uppercase text-sm font-semibold text-gray-700">Téléphone :</div>
            @auth
            <div class="text-sm text-gray-500">{{$offer->user->phone}}</div>
            @else
            <div class="text-sm text-gray-500">********</div>
            @endauth
        </div>

        <div class="px-4 py-2">
            <div class="uppercase text-sm font-semibold text-gray-700">Email :</div>
            @auth
            <div class="text-sm text-gray-500">{{$offer->user->email}}</div>
            @else
            <div class="text-sm text-gray-500">******@**********.***</div>
            @endauth
        </div>
        <div class="bg-gray-100 p-10">
            <h4 class="text-4x1 font-extrabold mb-10">En bref</h4>
            <span class="inline-grid grid-cols-3 gap-7">
                <div><svg class="w-6 h-6 justify-items-center" fill="bg-neutral-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.736 6.979C9.208 6.193 9.696 6 10 6c.304 0 .792.193 1.264.979a1 1 0 001.715-1.029C12.279 4.784 11.232 4 10 4s-2.279.784-2.979 1.95c-.285.475-.507 1-.67 1.55H6a1 1 0 000 2h.013a9.358 9.358 0 000 1H6a1 1 0 100 2h.351c.163.55.385 1.075.67 1.55C7.721 15.216 8.768 16 10 16s2.279-.784 2.979-1.95a1 1 0 10-1.715-1.029c-.472.786-.96.979-1.264.979-.304 0-.792-.193-1.264-.979a4.265 4.265 0 01-.264-.521H10a1 1 0 100-2H8.017a7.36 7.36 0 010-1H10a1 1 0 100-2H8.472c.08-.185.167-.36.264-.521z" clip-rule="evenodd"></path></svg>
                <span>{{$offer->rent}}€</span>
                </div>
                <div><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg><span>{{$offer->squaremeter}}m2</span></div>
                <div><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg><span>{{$offer->people}}</span></div>
              </span>
        </div>

        {{-- RENT $$$--}}
        <div class="absolute bottom-0 right-0 m-6 rounded-full px-4 py-2 bg-amber-500">
            <div class="text-white font-bold text-xl">{{$offer->rent}}</div>
        </div>

    </div>
</div>


</x-custom-base-layout>