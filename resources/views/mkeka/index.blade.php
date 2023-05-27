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
                                                <th>Description</th>
                                                <th>Old</th>
                                                <th>Price</th>
                                                <th>Type</th>
                                               
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($mkekas as $mkeka)
                                                    <tr>
                                                        <td> {{ __('NO:000-') }}{{ $mkeka->id }}</td>
                                                        <td> <img class="card-img-top" src={{ $mkeka->picture }} height="40px"
                                                                width="80px" alt="Card image"></td>
                                                        <td> {{ $mkeka->description }}</td>
                                                        <td>{{ $mkeka->total_olds }}</td>
                                                        <td>{{ $mkeka->price }}</td>
                                                        <td> {{ $mkeka->type }}</td>
                                                      
                                                        <td>
                                                            <div class="row">
                                                                <div class="col">
                                                                   
                                                                <a href="{{ route('mkekas.edit', ['mkeka' => $mkeka->id]) }}"
                                                                            class="btn btn-outline-info">edit</a>
                                                                </div>

                                                                <div class="col">
                                                                <form method="POST" action="{{route('mkekas.destroy', $mkeka->id)}}" style="display: inli
                                                                    ">
                                                                    <button class='btn btn-outline-danger'>Delete</button>

                                                                    </form>
                                                                  
                                                                </div>
                                                                <div class="col">
                                                                    <a href="{{ route('mkekas.show', ['mkeka' => $mkeka->id]) }}"
                                                                        class="btn btn-outline-success">show</a>
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
