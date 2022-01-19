<x-custom-base-layout>

    <h1>hello</h1>
    
    {{-- CARD --}}
    <div class="grid grid-cols-4 gap-4 p-4">
        @for($i=0; $i<4;$i++)
        <a href="/offer/1">
        <div class="m4 bg-white rounded shadow overflow-hidden">
            {{-- <img src="" alt=""> --}}
            <img src="https://picsum.photos/300/300" alt="">

            {{-- CARD DESCRIPTION --}}
            <div class="p-4">
                <div class="text-sm font-semibold">Titre</div>
                <div class="text-sm font-semibold">Texte</div>
            </div>
            <div class="border-t px-4 py-2">
            {{-- CARD RENT PRICE --}}
                <div class="text-sm font-semibold">Prix</div>
            </div>
        </div>
    </a>
    @endfor
    </div>

</x-custom-base-layout>