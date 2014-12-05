<?php use library\Util; ?>
@extends('master')

@section('pageContent')
<div class="container-fluid">
    @foreach($products as $product)
        <div class="productSummaryContainer row">
            <div class="productSummaryImage col-lg-2 col-md-3 col-sm-3 col-xs-12">{{ "<img src='$product->image' alt='$product->name'>" }}</div>
            <div class="productSummaryDetails col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="productName"><h2>{{ link_to('product/'.$product->id, $product->name) }}</h2></div>
                <div class="productRating"><h4>Rating : {{ number_format($product->rating, 1) }}</h4></div>
                <div class="productDescription">{{ $product->description }}</div>
                <div class="productPricing"><em><h4>{{ Util::calculateDiscount($product->price, $product->discount) }}</h4></em></div>
                <div>
                    <a href="{{ route('product', $product->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-white glyphicon-zoom-in"></i> Buy Now</a>
                    <a href="{{ route('addToCart', $product->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-white glyphicon-shopping-cart"></i> Add to Cart  </a>
                    <a href="{{ route('addToWishlist', $product->id) }}" class="btn btn-danger"><i class="glyphicon glyphicon-white glyphicon-heart"></i> Add to Wishlist  </a>
                </div>
            </div>
        </div>
        <hr/>
    @endforeach
    <div class="pull-right">
        {{ $products->links() }}
    </div>
</div>
@stop
