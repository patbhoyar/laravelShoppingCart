<?php use library\Util; ?>
@extends('master')

@section('pageContent')

<div class="container">
    <h2>Displaying products by: {{ $title }}</h2>
</div>

<div class="container-fluid">
    @foreach($products as $product)
    <div class="productSummaryContainer row">
        <?php $imgPath = URL::to('/')."/".$product->image; ?>
        <div class="productSummaryImage col-lg-2 col-md-3 col-sm-3 col-xs-12">{{ "<img src='$imgPath' alt='$product->name'>" }}</div>
        <div class="productSummaryDetails col-lg-9 col-md-8 col-sm-8 col-xs-12">
            <div class="productName"><h2>{{ link_to('product/'.$product->id, $product->name) }}</h2></div>
            <div class="productRating"><h4>Rating : {{ number_format($product->rating, 1) }}</h4></div>
            <div class="productDescription">{{ $product->description }}</div>
            <div class="productPricing"><em><h4> <?php echo Util::calculateDiscount($product->price, $product->discount); ?> </h4></em></div>
            <div>
                <a href="{{ route('product', $product->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-white glyphicon-zoom-in"></i> Buy Now</a>
                <a href="addToCart" class="btn btn-warning"><i class="glyphicon glyphicon-white glyphicon-shopping-cart"></i> Add to Cart  </a>
                <a href="addtoWishList" class="btn btn-danger"><i class="glyphicon glyphicon-white glyphicon-heart"></i> Add to Wishlist  </a>
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
