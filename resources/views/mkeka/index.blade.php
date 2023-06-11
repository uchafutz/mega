@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mt-4 mb-4" style="margin-bottom: 50px!important, float:none">
                    <div class="card-header">
                        
                        <div class="d-flex flex-row-reverse">
                            <div class=" px-2">
                                    <a href="{{ route('mkekas.create') }}" class="btn btn-success">Add Mkeka</a>
                            </div>

                        </div>
                    </div>
                    <div class="card-body ">
                       
                            <div class="card">
                                <div class="body">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                            <thead>
                                                <th> No:</th>
                                                <th>Image</th>
                                                <th>Olds</th>
                                                <th>Price</th>
                                                <th>Type</th>
                                                <th>Premier</th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                @foreach ($mkekas as $mkeka)
                                                    <tr>
                                                        <td> {{ __('NO:000-') }}{{ $mkeka->id }}</td>
                                                        <td><img src="uploads/{{ $mkeka->picture }}" class="img-fluid rounded-start"
                                                        alt="..." width="50px" height="40px"> </td>
                                                        <td>{{ $mkeka->total_olds }}</td>
                                                        <td>{{ $mkeka->price }}</td>
                                                        <td> {{ $mkeka->type }}</td>
                                                        <th>
                                                            @if ($mkeka->type != "premier")
                                                                
                                                            @else
                                                            <img  src="uploads/{{ $mkeka->featureImage }}" height="40px"
                                                                width="80px" ></th>
                                                            @endif
                                                      
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <div class="col">
                                                                   
                                                                <a href="{{ route('mkekas.edit', ['mkeka' => $mkeka->id]) }}"
                                                                            class="btn btn-outline-info">edit</a>
                                                                </div>

                                                                <div class="col">
                                                                <form method="POST" action="{{route('mkekas.destroy', $mkeka->id)}}" style="display: inli
                                                                    ">
                                                                    @csrf
                                                                    @method("DELETE")
                                                                    <button class='btn btn-outline-danger'>Delete</button>

                                                                    </form>
                                                                  
                                                                </div>
                                                                <div class="col">
                                                                     @if ($mkeka->type != "premier")
                                                                
                                                                     @else
                                                                    <a href="{{ route('mkekas.show', ['mkeka' => $mkeka->id]) }}"
                                                                        class="btn btn-outline-success">show</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            {{$mkekas->links()}}
                                        </table>
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
