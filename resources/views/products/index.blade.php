@extends('layouts.app')

@section('content')
    

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if(Auth::user())
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Operation</h2>
            </div>
            <div class="col-lg-6 p-0">
                <div class="float-left">
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="contrainer">
            <div class="container-header">
                    <h2>CD's</h2>
            </div>
            @foreach($products as $product)
            @if ($product->type == 'cd')
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Price</th>
                    <th>Pages/Durations</th>
                    <th width="280px">Action</th>
                </tr>
                
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->firstname }}</td>
                    <td>{{ $product->lastname }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->pgdur }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
            
                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
            
                            @csrf
                            @method('DELETE')
            
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                
            </table>
            @endif
            @endforeach
        </div>
        <div class="contrainer">
            <div class="container-header">
                <h2>Book's</h2>
            </div>
            @foreach($products as $product)
            @if ($product->type == 'book')
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Price</th>
                    <th>Pages/Durations</th>
                    <th width="280px">Action</th>
                </tr>

                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->firstname }}</td>
                    <td>{{ $product->lastname }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->pgdur }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
            
                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
            
                            @csrf
                            @method('DELETE')
            
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

            </table>
            @endif
            @endforeach
        </div>
    </div>
    @endif
    @if(Auth::guest())
    <script>window.location = "/login";</script>
    @endif
    <div class= "container" style="text-align:center">
        <span>{{$products->links()}}</span></div>
    </div>
    
    <style>
    .w-5{
        display: none
    }
    </style>
    

@endsection