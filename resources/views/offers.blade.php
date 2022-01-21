<x-custom-base-layout>

@include('components/custom-header-pic-bg')
@include('components/custom-each-offer')



{{-- pagination --}}
<div class="p-6">{{$offers->links()}}</div>

</x-custom-base-layout>