@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse">
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>S/n</th>
                                    <th>Name</th>
                                    <th>Mkeka No:</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $order->user->name ?? null }}
                                        </td>
                                        <td>{{ $order->mkeka_id }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->description }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>
                                          <div class="row d-flex ">

                                                    <div class="col"> 
                                                        <form method="POST" action="{{route('orders.update',['order'=>$order])}}" style="display: inline">
                                                            @method("PUT")
                                                            @csrf
                                                            <input type="hidden" name="status" value="PAID"/>

                                                            <button class="btn btn-outline-success">Proccess</button>

                                                        </form>
                                                    </div>
                                                        <div class="col">
                                                            <form method="POST" action="{{route('orders.destroy',['order'=>$order])}}" style="display: inline">
                                                            @method("DELETE")
                                                            @csrf

                                                            <button class="btn btn-outline-danger">Delete</button>

                                                        </form>

                                                        </div>
                                                            
                                                        
                                                    
                                                </div>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            {{$orders->links()}}
                        </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
