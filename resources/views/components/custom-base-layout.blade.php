<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  
        <title>La bonne coloc'</title>
</head>
<body class="bg-gray-50">

 
{{$slot}}

    {{-- FOOTER --}}
    <footer class="md:flex justify-center">
        <div class="md:grid grid-rows-{3} grid-flow-col gap-4 m-4 max-w-md">

            <div class="mt-6 py-2 px-3 text-sky-700 font-bold text-sm">CONTACT</div>
            <a href="{{ url('/') }}"><img class="w-auto h-24" src="{{asset('image/logo.png')}}" alt="" srcset=""></img>
            </a>
            <div class="mt-6 py-2 px-3 text-sky-700 font-bold text-sm">&copy;2022</div>
        </div>
        </footer>
</body>
</html>