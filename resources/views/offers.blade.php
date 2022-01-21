<x-custom-base-layout>
    
@include('components/custom-each-offer')



{{-- pagination --}}
<div class="p-6">{{$offers->links()}}</div>

</x-custom-base-layout>