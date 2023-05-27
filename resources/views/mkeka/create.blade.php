@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    @isset($mkeka)
                        <form action="{{ route('mkekas.update', ['mkeka' => $mkeka]) }}" method="POST"
                            enctype="multipart/form-data">
                            <div class="card-header">Update Mkeka</div>
                            @method('patch')
                        @else
                            <form action="{{ route('mkekas.store') }}" method="POST" enctype="multipart/form-data">
                                <div class="card-header">Create Mkeka</div>
                            @endisset

                            @csrf
                            <div class="card-body">

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Upload Mkeka') }}</label>

                                    <div class="col-md-6">
                                        <input name="picture" class="form-control @error('picture') is-invalid @enderror"
                                            type="file" multiple>

                                        @error('picture')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                

                               
                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Total Odds') }}</label>

                                    <div class="col-md-6">
                                        <input id="total_olds" type="number" placeholder="Total Odds"
                                            class="form-control @error('total_olds') is-invalid @enderror" name="total_olds"
                                            value="{{ old('total_olds') ?? isset($mkeka->total_olds) }}">

                                        @error('total_olds')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                                    <div class="col-md-6">
                                        <input id="price" type="number" placeholder="{{ __(' Enter Price') }}"
                                            class="form-control
                                            @error('price') is-invalid @enderror"
                                            name="price" value="{{ old('price') ? isset($mkeka) : null }}">

                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                                    <div class="col-md-6">

                                        <textarea placeholder="{{ __(' Enter Description') }}"
                                            class="form-control
                                            @error('description') is-invalid @enderror"
                                            name="description"></textarea>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="from"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Exprice Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="expires_at" type="date"
                                            class="form-control @error('expires_at') is-invalid @enderror"
                                            name="expires_at">

                                        @error('expires_at')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="from"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Select Mkeka Type') }}</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="type">
                                            <option value="premier">Premier</option>
                                            <option value="free">Free</option>
                                            <option value="subscription" selected>Subscription</option>
                                            <option value="results">Results</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>


                                    </div>
                                </div>


                        </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
