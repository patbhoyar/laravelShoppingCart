<?php use library\Util; ?>
@extends('master')

@section('pageContent')

<div class="jumbotron">
    <h3>Today's Deals</h3>
    <hr/>
    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="thumbnail text-center">
                <img src="{{ asset($product->image) }}" alt="..." width="200" height="250">
                <div class="caption">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ Util::compressText($product->description, 100) }}</p>
                    <a href="product/{{ $product->id }}" class="btn btn-primary"><i class="glyphicon glyphicon-white glyphicon-zoom-in"></i> Buy Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@stop