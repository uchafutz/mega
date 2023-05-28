@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Packages {{ $packagecount}}
                            </div>
                            <div class="card-body">
                             <a href="{{route('packages.index')}}">Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Subscriptions {{$subcount}}
                            </div>
                            <div class="card-body">
                                 <a href="{{route('subscriptions.index')}}">Subscription</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Mkeka  {{$mkekacount}}
                            </div>
                            <div class="card-body">
                                 <a href="{{route('mkekas.index')}}">mkeka</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Orders {{$ordercount}}
                            </div>
                            <div class="card-body">
                                 <a href="{{route('orders.index')}}">Orders</a>
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
