@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="product-picture-container">
                <img src="{{url($product->img_url)}}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-7 offset-1">
            <h1>
                {{ $product->name }}
            </h1>

            <div>
                product rating
            </div>

            <span class="product price">
                $ {{ $product->price }}
            </span>

            <form action="{{ route('cart.addProduct') }}" method="POST">
                @csrf
                <div class="form-group mt-4">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <label for="quantity">
                        Quantity
                    </label>
                    <br>
                    <input type="number" min="1" name="quantity" id="quantity" value="1" class="product quantity">
                    @error('quantity')
                        <span class="text-red">
                            {{ $message }}
                        </span>
                    @enderror
                    <span>
                        10 in stock
                    </span>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Add to cart
                    </button>
                </div>
            </form>

            <p>
                {{ $product->description }}
            </p>
            
        </div>
    </div>
</div>
@endsection