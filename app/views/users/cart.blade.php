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
            <th><h3>Product</h3></th>
            <th><h3>Quantity</h3></th>
            <th><h3>Price</h3></th>
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
                        <div class="col-lg-9 col-md-9 col-sm-9"><h3>{{ link_to('product/'.$product->id, $product->name) }}</h3></div>
                    </div>
                </td>
                <td class="col-lg-1 col-md-1 col-sm-1"><h3>1</h3></td>
                <?php
                    $price = Util::calculatePrice($product->price, $product->discount);
                    $totalPrice += $price;
                ?>
                <td class="removeFromCart col-lg-3 col-md-3 col-sm-3 "><h3>Rs.{{ number_format($price) }}</h3></td>
                <td class="removeFromCart col-lg-2 col-md-2 col-sm-2"><a href="">Remove <span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <table class="table">
        <tbody>
        <td class="col-lg-6 col-md-6 col-sm-6"></td>
        <td class="col-lg-1 col-md-1 col-sm-1"><h3>Total</h3></td>
        <td class="col-lg-3 col-md-3 col-sm-3"><h3>Rs.{{ number_format($totalPrice) }}</h3></td>
        <td class="col-lg-2 col-md-2 col-sm-2"></td>
        </tbody>
    </table>
    @else
    <h3 class="text-center">No products in your cart yet! <a href="{{ route('products') }}">Add some now</a> </h3>
    @endif
</div>

@stop