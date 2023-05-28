@extends('layouts.app')
@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
    <div class="flex flex-col">

        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">

            <div
                class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">

                <div class="card-body">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                            ID::<b>{{ $mkeka->id }}</b>
                        </div>
                        <div class="col">
                        <a href="{{ route('mkekas.index') }}" class="btn btn-danger">
                           Cancel
                         </a>
                        </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col">
                                        <div class="card mb-3" style="max-width: 640px; max-heght:500px">
                                            <div class="row g-0">
                                                <div class="col-md-8">
                                                    <img src="{{ $mkeka->picture }}" class="img-fluid rounded-start"
                                                        alt="...">
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body">
                                                        <h5 class="card-title"> {{ $mkeka->description }}
                                                        </h5>
                                                        <hr />
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <p>{{ $mkeka->price }}</p>
                                                            </li>
                                                            
                                                            <li class="list-group-item">
                                                                <button type="button" class="btn btn-primary">
                                                                    <span
                                                                        class="badge bg-danger">{{ $mkeka->total_olds }}</span>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                       
                                    </div>
                                    
                                     
                                </div>
                                <div class="row">
                                     <div class="col">
                                             <form method="POST"
                                            action="{{ route('mkekas.update', ['mkeka' => $mkeka]) }}" enctype="multipart/form-data">
                                            @method('patch')
                                            @csrf
                                             @if ($mkeka->type=="premier")
                                             <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Upload Mkeka---Real') }}</label>

                                    <div class="col-md-6">
                                        <input name="featureImage"
                                            class="form-control @error('featureImage') is-invalid @enderror" type="file"
                                            multiple>

                                        @error('featureImage')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        </div>


                                              <button class="btn btn-primary" type="submit">Save</button> 
                                                 
                                             @endif
                                        
                                            </div>
                                        </form>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>

        @endsection
