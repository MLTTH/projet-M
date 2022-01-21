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
    <div class="h-full bg-fixed bg-center bg-cover custom-img md:h-screen" style="background-image: url('image/header-pic.jpeg');">

@include ('components/custom-nav')  
     {{-- TITLE --}}
     <div class="md:flex md:flex-col text-5xl font-extrabold flex content-center justify-center h-full items-center pb-36">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
          Bienvenue
        </span>
      </div>
</div>
 
{{$slot}}

    {{-- FOOTER --}}
    <footer class="ml-2 md:flex justify-center">
        <div class="md:grid grid-rows-{4} grid-flow-col gap-4 m-4 max-w-md">
            <div class="mt-6 mr-4">A propos</div>
            <div class="mt-6 mr-4">Contact</div>
            <div class="mt-6 mr-4">Designed by Thi N.</div>
            <div class="mt-6 mr-4">2022</div>
        </div>
        </footer>
</body>
</html>