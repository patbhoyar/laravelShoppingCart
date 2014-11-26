@extends('master')

@section('pageContent')
<div class="container-fluid">
    @foreach($products as $product)

        <?php
            if($product->discount > 0.00){
                $price = number_format($product->price - ($product->price * $product->discount/100));
                $op = "<s>Rs.".number_format($product->price)."</s> Rs.".$price." ($product->discount% off)";
            }else{
                $op = "Rs.".number_format($product->price);
            }
        ?>

        <div class="productSummaryContainer row">
            <div class="productSummaryImage span2">{{ "<img src='$product->image' alt='$product->name'>" }}</div>
            <div class="productSummaryDetails span9">
                <div class="productName"><h2>{{ link_to('product/'.$product->id, $product->name) }}</h2></div>
                <div class="productRating"><b>Rating : {{ number_format($product->rating, 1) }}</b></div>
                <div class="productDescription">{{ $product->description }}</div>
                <div class="productPricing"><em><h4>{{ $op }}</h4></em></div>
                <div>
                    <a href="product/123" class="btn btn-info"><i class="icon-white icon-shopping-cart"></i> Add to Cart  </a></div>
            </div>
            <div class="span1"></div>
        </div>
        <hr/>
    @endforeach
</div>
@stop
