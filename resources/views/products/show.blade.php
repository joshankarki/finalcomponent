@extends('layouts.app')

@section('content')
@if(Auth::user())
<div class="container">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <div class="card text-white bg-secondary">
                <div class="float-left">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
                <div class="card-header">
                    <h5>Show Product</h5>
                </div>
                
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $product->title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $product->firstname }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $product->lastname }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $product->price }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Pages/Durations:</strong>
                            {{ $product->pgdur }}
                        </div>
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