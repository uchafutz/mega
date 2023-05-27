@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class=" px-2">
                      <a href="{{ route('packages.index') }}" class="btn btn-primary">Back</a>
                    </div>
                
                </div>

                <div class="card-body">
                      @isset($package)
                       <form
                       action="{{ route('packages.update', ['package' => $package]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @method('patch')
                        @else
                         <form action="{{ route('packages.store') }}" method="POST"
                                        enctype="multipart/form-data">
                        @endisset
                         @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{  isset($package)?$package->name :''}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ isset($package)?$package->amount :"" }}" required>

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="duration" class="col-md-4 col-form-label text-md-end">{{ __('Duration') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="duration">
                                    <option value="{{isset($package)?$package->duration:''}}" selected></option>
                                   <option value="7">Weekly</option>
                                   <option value="30">Monthly</option>
                                </select>
                                

                                @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
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