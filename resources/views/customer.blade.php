@extends('layouts.app')

@section('content')
    {{-- <x-web.header /> --}}

    <div class="my-5"
        style="background: url('{{ asset('images/bg/bg.webp') }}');   background-repeat: no-repeat; background-size: cover !important; min-height: 70vh;">
        <div class="container text-center">
            <div class="row py-3">
                <div class="col-sm-12 mt-5">
                    <div class="justify-content-start text-start">
                        <h1 class="fs-1 fw-bold">Our Today's bet ODDS</h1>
                        <h2 class="text-muted fs-2">

                            Here you can select between the three options provided, and click continue to payments

                        </h2>

                    </div>

                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
                @foreach ($mkekas as $mkeka)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $mkeka->picture }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                @if ($mkeka->type == 'premier')
                                    <h5 class="card-title text-muted fw-bold fs-4">TZS.{{ $mkeka->price }} /=</h5>
                                    {{-- <a href="{{ route('showMkekas', ['id' => $mkeka->id]) }}" type="button"
                                        class="btn btn-warning mt-3">Continue to pay</a> --}}
                                @else
                                    <button type="button" class="btn btn-success mt-3 text-dark">View more</button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-footer />
@endsection
