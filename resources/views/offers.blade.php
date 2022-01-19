<x-custom-base-layout>

    <h1>hello</h1>
    
    {{-- CARD --}}
    <div class="grid grid-cols-4 gap-4 p-4">
        @foreach($offers as $o)
        <a href="/offer/{{$o->id}}">
        <div class="m4 bg-white rounded shadow overflow-hidden">
            {{-- <img src="" alt=""> --}}
            <img src="{{$o->image_url}}" alt="">

            {{-- CARD DESCRIPTION --}}
            <div class="p-4">
                <div class="text-sm font-semibold">{{$o->title}}</div>
                <div class="text-sm font-semibold">{{$o->people}}</div>
            </div>
            <div class="border-t px-4 py-2">
            {{-- CARD RENT PRICE --}}
                <div class="text-sm font-semibold">{{$o->rent}}</div>
            </div>
        </div>
    </a>
    @endforeach
    </div>

</x-custom-base-layout>