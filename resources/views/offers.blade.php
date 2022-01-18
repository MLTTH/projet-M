<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body class="bg-gray-50">
    <h1>hello</h1>
    
    {{-- CARD --}}
    <div class="grid grid-cols-4 gap-4 p-4">
    @for($i=0; $i<4;$i++)
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
    @endfor
    </div>

</body>
</html>