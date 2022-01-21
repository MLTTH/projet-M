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