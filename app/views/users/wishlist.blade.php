<?php
    use library\Util;
    $totalPrice = 0;
?>
@extends('master')

@section('pageContent')

<div class="row">
    @if(sizeof($products) > 0)
    <table class="table">
        <thead>
            <th><h4>Product</h4></th>
            <th><h4>Price</h4></th>
            <th></th>
        </thead>
        @foreach($products as $product)
        <tbody>
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
                <td class="removeFromCart col-lg-3 col-md-3 col-sm-3 "><h4>Rs.{{ number_format($price) }}</h4></td>
                <td class="removeFromCart col-lg-3 col-md-3 col-sm-3">
                    <a href="">Remove <span class="glyphicon glyphicon-trash"></span></a> |
                    <a href="">Move to Cart <span class="glyphicon glyphicon-share-alt"></span></a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <table class="table">
        <tbody>
        <td class="col-lg-6 col-md-6 col-sm-6 text-right"><h4>Total: </h4></td>
        <td class="col-lg-3 col-md-3 col-sm-3"><h4>Rs.{{ number_format($totalPrice) }}</h4></td>
        <td class="col-lg-3 col-md-3 col-sm-3"></td>
        </tbody>
    </table>
    @else
        <h3 class="text-center">No products in your wishlist yet! <a href="{{ route('products') }}">Add some now</a> </h3>
    @endif
</div>

@stop