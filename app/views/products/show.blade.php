<?php use library\Util; ?>
@extends('master')

@section('pageContent')

    <div class="productDetailContainer row">
        <div class="productDetailImage col-lg-2 col-md-3 col-sm-3 col-xs-12">
            {{ "<img src='http://localhost:8888/projects/laravelShoppingCart/public/$product->image' alt='$product->name'>" }}
        </div>
        <div class="productDetails col-lg-9 col-md-8 col-sm-8 col-xs-12">
            <div class="productName"><h2>{{ $product->name }}</h2></div>
            <div class="productRating"><h4>Rating : {{ number_format($product->rating, 1) }}</h4></div>
            <div class="productDescription">{{ $product->description }}</div>
            <div class="productPricing"><em><h4> <?php Util::calculateDiscount($product->price, $product->discount); ?> </h4></em></div>
            <div>
                <a href="product/123" class="btn btn-info"><i class="icon-white icon-shopping-cart"></i> Add to Cart  </a>
            </div>
        </div>
    </div>

    <hr/>

    <div class="row">
        <h3>Reviews for {{ $product->name }}:</h3>
        @if(sizeof($reviews) == 0)
            <div class="userReviewContainer">No Reviews yet.</div>
        @else
            @foreach($reviews as $review)
                <div class="userReviewContainer">
                    <div class="">
                        <span class="userName"> {{ $review->firstName." ".$review->lastName  }} </span>
                        @for($i = 0; $i<$review->rating; $i++)
                            <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </div>
                    <div class="reviewTimestamp">posted on: {{ date('m-d-Y', strtotime($review->created_at)) }}</div>
                    <div class="review">
                        {{ $review->review }}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@stop