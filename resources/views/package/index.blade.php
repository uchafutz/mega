@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class=" px-2">
                      <a href="{{ route('packages.create') }}" class="btn btn-success">Add Package</a>
                    </div>
                
                </div>

                <div class="card-body">
                   <table class="table table-bordered">
                    <head>
                    <tr>
                        <th>S/n</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Duration</th>
                        <th></th>
                    </tr>
                    </head>
                    <body>
                        @foreach ($packages as $package)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$package->name}}</td>
                            <td>{{$package->amount}}</td>
                            <td>{{$package->duration}}</td>
                            <td>
                                 <a href="{{ route('packages.edit', ['package' => $package]) }}"
                                                    class="btn btn-outline-info">edit</a>
                            </td>

                        </tr>
                            
                        @endforeach
                        
                    </body>

  
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection