    {{-- TITLE --}}
    <div class="py-12">  
        <h2 class="text-center text-amber-500 text-5xl font-bold">Comment ça marche ?</h2>
    </div>

{{-- CARD-PARENT --}}
<div class="md:grid grid-cols-2 gap-4">

{{-- CARD1-RIGHT --}}
<div class="md:h-full bg-cover" style="background-image: url('image/undraw_check.svg');">
</div>
{{-- CARD1-LEFT --}}
<div class="md:relative w-4/5 m-10 wow animate__animated animate__fadeInDown">

    <div class="md:relative shadow-2xl bg-gradient-to-r from-indigo-500 to-indigo-600 text-gray-800 rounded-xl p-8 space-y-7">
               
        <div class="text-2xl font-bold text-gray-50 ">Je cherche une colocation</div>
        <div class="text-xl font-extrabold border-l-4 border-white"><span class="pl-3 text-sm font-semibold uppercase text-white">Je m'inscris</span></div>
        <div class="text-xl font-extrabold border-l-4 border-white"><span class="pl-3 text-sm font-semibold uppercase text-white">Je consulte les offres</span></div>
        <div class="text-xl font-extrabold border-l-4 border-white"><span class="pl-3 text-sm font-semibold uppercase text-white">Je prends contact avec mes futurs colocataires</span></div>
        
        {{-- S'inscrire --}}
            <a href="{{ route('register') }}" class="block text-yellow-400 font-bold tracking-wide flex">
            <span>S'inscrire</span>
            </a>
    </div>
</div>


{{-- CARD2 --}}

{{-- CARD1-RIGHT --}}
<div class="md:h-full bg-cover" style="background-image: url('image/undraw_check.svg');">
</div>
{{-- CARD1-LEFT --}}
</div>
</div>


{{-- CARD-PARENT --}}
<div class="md:grid grid-cols-2 gap-4 ">
    {{-- CARD LEFT --}}
<div class="lg:relative md:w-4/5 m-10 wow animate__animated animate__fadeInUp">
    
        <div class="md:relative shadow-2xl bg-gradient-to-r from-indigo-500 to-indigo-600 text-gray-800 rounded-xl p-8 space-y-7  ">
            <div class="text-2xl font-bold text-gray-50 ">Je propose une colocation</div>
            <div class="text-xl font-extrabold border-l-4 border-white"><span class="pl-3 text-sm font-semibold uppercase text-white">Je m'inscris</span></div>
            <div class="text-xl font-extrabold border-l-4 border-white"><span class="pl-3 text-sm font-semibold uppercase text-white">Je poste mon annonce</span></div>
            <div class="text-xl font-extrabold border-l-4 border-white"><span class="pl-3 text-sm font-semibold uppercase text-white">J'attends d'être contacté par mes futurs colocataires</span></div>

            {{-- S'inscrire --}}
            <a href="{{ route('register') }}" class="block text-yellow-400 font-bold tracking-wide flex">
                <span>S'inscrire</span>
            </a>
        </div>
</div>
    
    {{-- CARD1-RIGHT --}}
    <div class="md:h-full bg-cover" style="background-image: url('image/undraw_post.svg');">
    </div>
</div>
</div>