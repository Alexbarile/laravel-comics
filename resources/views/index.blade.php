<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Comics</title>
    @vite('resources/js/app.js')
</head>

<body>

    {{-- HEADER --}}

    @include('partials.header')

     {{-- MAIN --}}

    <main>

        {{-- jumbotron --}}

        <div class="jumbo">
        </div>

        {{-- card --}}

        <div class="black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-info">
                        <h4>Current series</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        @foreach($products as $product)
                        <div class="album-card">
                            <div class="card-img">
                                <img src="{{$product['thumb']}}" alt="">
                            </div>
                            <h3>{{$product['title']}}</h3>  
                        </div>
                        
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button><a href="#">Load More</a></button>
                    </div>
                </div>
            </div>
        </div>
    </main>

     {{-- FOOTER --}}

    @include('partials.footer')
</body>
</html>
