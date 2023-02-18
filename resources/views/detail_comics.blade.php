@extends('layouts.app')
@section('title', 'Details | Comics')

@section('content')

{{-- SCHEDA COMIC --}}

<div class="container">
    <div class="row d-flex justify-content-between align-items-center p-5">

        {{-- SX PART --}}

        <div class="col-60">
            <div class="pb-3">
                <h2>{{($single['title'])}}</h2>
            </div>
            <div class="container-info pb-4">
                <div class="row d-flex align-items-center">
                    <div class="col-70">
                        <div class="row-mini d-flex">
                            <div class="col d-flex">
                                <p>U.S. Price: </p><span>{{($single['price'])}}</span>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <p>AVAILABLE</p>
                            </div>
                        </div>                 
                    </div>
                    <div class="col-30 d-flex justify-content-center">
                        <span>Check Availability</span>
                    </div>
                </div>
            </div>
            <div>
                <p>{{$single['description']}}</p>
            </div>
        </div>

         {{-- DX PART --}}

        <div class="col-40 d-flex justify-content-end">
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

{{-- INFO COMIC --}}

<div class="container-gray">
    <div class="row">
        <div class="col">
            ciao
        </div>
    </div>
</div>


@endsection

