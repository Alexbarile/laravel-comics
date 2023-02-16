<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')
    <main>
        <!-- jumbotron -->

        <div class="jumbo">
        </div>
        
        @foreach($products as $product)
        <img src="{{$product['thumb']}}" alt="">
        <h1>{{$product['title']}}</h1>
        @endforeach
    </main>
    @include('partials.footer')
</body>

</html>
