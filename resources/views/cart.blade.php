@extends('layouts.app')

@section('content')
    @if($count > 0)
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col">
                            Products
                        </div>
                    </div>
                    @foreach($cart as $product)
                        <div class="row">
                            <div class="col cart img-container">
                                <img src="{{ $product->img_url }}" alt="">
                            </div>
                            <div class="col">
                                <h5>
                                    {{ $product->name }}
                                </h5>

                                <span>
                                    ${{ $product->price }}
                                </span>

                                <quantity-input />
                            </div>
                        </div>

                        <hr>
                    @endforeach
                </div>
                <div class="col-4">
                    Order summary
                </div>
            </div>
        </div>        
    @else
        <div class="cart empty">
            <h3>
                Your cart is currently empty
            </h3>

            <a href="/" class="btn btn-primary">
                Get back to shopping
            </a>
        </div>
    @endif
@endsection