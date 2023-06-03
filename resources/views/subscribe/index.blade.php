@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-sm-8">


               <div class="card">
                <div class="card-header">
                     <div class="px-3">
                                List Subscription
                            </div>
                </div>
                <div class="card-body">
                     <div class="table-responsive">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>S/n</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Status</th>
                                <th>Package</th>
                                <th>Customer</th>
                                <th>Description</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscriptions as $subscription)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $subscription->date_from }}</td>
                                    <td> {{ $subscription->date_to }}</td>
                                    <td>{{ $subscription->status }}</td>
                                    <td>{{ $subscription->package->name ?? null }}</td>

                                    <td> {{ $subscription->user->name ?? null }}</td>
                                    <td>{{ $subscription->description }}</td>
                                    <td>
                                     <div class="btn-group" role="group" aria-label="Basic example">

                                            <form method="POST" action="{{route('subscriptions.update',['subscription'=>$subscription])}}" style="display: :inline">
                                                @method('PATCH')
                                                @csrf
                                           @if ($subscription->active==0)
                                               <button class="btn btn-outline-primary">disable</button>
                                            @else
                                                <button class="btn btn-outline-success">able</button>
                                           @endif
                                           
                                     
                                            
                                            </form>
                                        <form method="POST" action='{{route('subscriptions.destroy',['subscription'=>$subscription])}}' style='display:inline'>
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-outline-danger">Delete</button>
                                        </form>

                                      </div>
                                        

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        {{$subscriptions->links()}}
                    </table>
                </div>

                </div>
               </div>



            </div>
        </div>
    </div>
@endsection
