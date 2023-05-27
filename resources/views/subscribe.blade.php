@extends('layouts.app')

@section('content')
    {{-- <x-web.header /> --}}
    <div class=" mt-16"
        style="background: url('{{ asset('images/bg/bg.webp') }}');   background-repeat: no-repeat; background-size: cover !important; min-height: 70vh;">
        <div class="container">

            <div class="row py-5">

                <div class="col-sm-2"></div>
                <div class="col-sm-8 mt-5">
                    <div class="d-flex justify-content-center">
                        <h1 class="fs-1 fw-bold">TheMega Bet Subscription Packages</h1>

                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <h3 class="text-muted text-center">
                            <strong>Subscribe now and get special offers like FREE TICKECT INSTANTLY, its simple Choose your
                                plan and press the button to continue</strong>

                        </h3>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                @foreach ($packages as $package)
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class=" py-3" style="background-color: #0e519c">
                                <h4 class="my-0 fw-bold text-light">{{ $package->name }}</h4>
                            </div>
                            <div class="card-body">
                                <h1 class=" pricing-card-title">TSH {{ $package->amount }}</h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    {{-- <li>{{ $package->description }}</li> --}}

                                </ul>
                                <form method="POST" style="display:inline" action="{{route("subscriptions.store")}}">
                                    @csrf
                                    <input type="hidden" name="package_id" value="{{ $package->id }}" />
                                    <input type="hidden" name="package_duration" value="{{$package->duration}}">
                                <button class="w-100 btn btn-lg btn-outline-primary">Subscribe</button>
                                   
                                </form>
                              

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>


        </div>

    </div>

     <x-footer /> 
@endsection
