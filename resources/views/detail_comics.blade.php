@extends('layouts.app')
@section('title', 'Details | Comics')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-between align-items-center">

        {{-- SX PART --}}

        <div class="col">
            <div>
                <h2>{{($single['title'])}}</h2>
            </div>
            <div class="my-container">
                <div class="row">
                    <div class="col">
                        <p>U.S. Price: <span>{{($single['price'])}}</span></p>
                    </div>
                    <div class="col">
                        <p>AVAILABLE</p>
                    </div>
                </div>
            </div>
        </div>

         {{-- DX PART --}}

        <div class="col d-flex justify-content-center">
            <div class="content">
                <div class="d-flex justify-content-end">
                    <h5>advertisement</h5>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/img/adv.jpg')}}" alt="adv">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

