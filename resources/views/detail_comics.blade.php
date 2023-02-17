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

