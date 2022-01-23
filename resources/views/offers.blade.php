<x-custom-base-layout>


@include('components/custom-header-pic-bg')
@include('components/custom-card')

<div class="my-9">  
<h1 class="text-center text-amber-500 text-5xl font-bold">Nos annonces</h1>
</div>
@include('components/custom-each-offer')

<div class="h-full bg-fixed bg-center bg-cover custom-img md:h-screen" style="background-image: url('image/homepage02.jpg');">

<div class="md:flex md:flex-col text-8xl font-extrabold flex content-center justify-center h-full items-center pb-36">
    {{-- <div class="grid grid-cols-4 gap-4">
        <div class="px-5 py-5 bg-white contrast-50">01</div>
        <div class="px-5 py-5 bg-white contrast-50">09</div>
        <div class="px-5 py-5 bg-white contrast-50">09</div>
        <div class="px-5 py-5 bg-white contrast-50">09</div>
    </div> --}}
</div>
</div>




{{-- pagination --}}
<div class="p-6">{{$offers->links()}}</div>

</x-custom-base-layout>