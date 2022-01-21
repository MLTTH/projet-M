   {{-- CARD --}}
   <div class="lg:grid grid-cols-4 gap-4 p-4 mb-8">
    @foreach($offers as $o)
    <a href="/offer/{{$o->id}}">
    <div class="mb-10 md:mb-0m4 bg-white rounded shadow overflow-hidden ">
        {{-- <img src="" alt=""> --}}
        <img src="{{$o->image_url}}" class="h-72 object-cover w-full">
        {{-- CARD DESCRIPTION --}}
        <div class="p-4">
            <div class="uppercase md:normal-case text-sm font-semibold">{{$o->title}}
            </div>
        </div>
        <div>
            <div class="pb-4bg-gray-100">
                <span class="grid grid-cols-3 place-items-center">
                    <div><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.736 6.979C9.208 6.193 9.696 6 10 6c.304 0 .792.193 1.264.979a1 1 0 001.715-1.029C12.279 4.784 11.232 4 10 4s-2.279.784-2.979 1.95c-.285.475-.507 1-.67 1.55H6a1 1 0 000 2h.013a9.358 9.358 0 000 1H6a1 1 0 100 2h.351c.163.55.385 1.075.67 1.55C7.721 15.216 8.768 16 10 16s2.279-.784 2.979-1.95a1 1 0 10-1.715-1.029c-.472.786-.96.979-1.264.979-.304 0-.792-.193-1.264-.979a4.265 4.265 0 01-.264-.521H10a1 1 0 100-2H8.017a7.36 7.36 0 010-1H10a1 1 0 100-2H8.472c.08-.185.167-.36.264-.521z" clip-rule="evenodd"></path></svg>
                    <span class="text-lg font-semibold">{{$o->rent}}€</span>
                    </div>
                    <div><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg><span class="text-lg font-semibold">{{$o->squaremeter}}m2</span></div>
                    <div><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg><span class="text-lg font-bold">{{$o->people}}</span></div>
                  </span>
            </div>
        </div>
        
        </div>
    </a>
    @endforeach
</div>
