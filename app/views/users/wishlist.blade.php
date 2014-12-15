<?php
    use library\Util;
    $totalPrice = 0;
    $js = array('wishlist');
?>
@extends('master')

@section('pageContent')

<div class="row">

    <table class="table" id="productsInWishlist">
        <thead>
            <th><h4>Product</h4></th>
            <th><h4>Price</h4></th>
            <th></th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" width="90" height="120"/>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9"><h4>{{ link_to('product/'.$product->id, $product->name) }}</h4></div>
                    </div>
                </td>
                <?php
                    $price = Util::calculatePrice($product->price, $product->discount);
                    $totalPrice += $price;
                ?>
                <td class="removeFromCart col-lg-3 col-md-3 col-sm-3"><h4>Rs.{{ number_format($price) }}</h4></td>
                <td class="removeFromCart col-lg-3 col-md-3 col-sm-3">
                    <a href="#" class="removeProductFromWishlist" data-product-id="{{ $product->id }}" data-cost="{{$price}}">Remove <span class="glyphicon glyphicon-trash"></span></a> |
                    <a href="#" class="moveProductToCart" data-product-id="{{ $product->id }}" data-cost="{{$price}}">Move to Cart <span class="glyphicon glyphicon-share-alt"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table class="table" id="totalDisplayTable">
        <tbody>
        <td class="col-lg-6 col-md-6 col-sm-6 text-right"><h4>Total: </h4></td>
        <td class="col-lg-3 col-md-3 col-sm-3"><h4>Rs. <span id="totalCostofWishlist" data-total-cost="{{$totalPrice}}">{{ number_format($totalPrice) }}</span> </h4></td>
        <td class="col-lg-3 col-md-3 col-sm-3"></td>
        </tbody>
    </table>

    <h3 class="text-center" id="noProdsInWishlist">No products in your wishlist yet! <a href="{{ route('products') }}">Add some now</a> </h3>

</div>

@stop