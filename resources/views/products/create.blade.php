@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Auth::user())
<div class="container">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <div class="card text-white bg-secondary">
                <div class="card-header">
                    <h5>
                        Create New Product
                    </h5>
                </div>
                <div class="float-left">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                        
                            <div class="row">
                                <div class="form-group">
                                    <label>Product Type</label>
                                    <select name="type">
                                    <option value="book">Book</option>
                                    <option value="cd">CD</option>
                                    </select><br/>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Title:</strong>
                                        <input type="text" name="title" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>First Name:</strong>
                                        <input type="text" name="firstname" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Last Name:</strong>
                                        <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Price:</strong>
                                        <input type="number" name="price" class="form-control" placeholder="Price">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Pages/Durations:</strong>
                                        <input type="number" name="pgdur" class="form-control" placeholder="Pages / Durations">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>
@endif
@if(Auth::guest())
<script>window.location = "/login";</script>
@endif
@endsection