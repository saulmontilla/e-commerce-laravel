<div 
    class="container cart-nav"
    v-bind:class="{open : cartOpen}"
>
    <svg @click="closeTogglers()" 
        width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill close-btn" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.146-3.146a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
    </svg>
    
    <h5 class="text-center mb-5">
        Cart
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
        </svg>
    </h5>
    
    @if($filled())
        @foreach($collection as $item)
            <div class="row">
                <div class="col img-container">
                    <img src="{{ $item->img_url }}" alt="">
                </div>
                
                <div class="col item-summary">
                    <p class="item-name">
                        {{ $item->name }}
                    </p>
                    <span class="item-total">
                        {{ $item->quantity }} x ${{ $item->price }}
                    </span>
                </div>
            
            </div>

            <hr>
        @endforeach
        
        <div class="row">
            <div class="col text-center">
                <a href="{{ route('cart') }}" class="btn btn-primary">
                    View cart
                </a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col">
                <h5 class="text-center">
                    Your cart is currently empty
                </h5>
            </div>
        </div>
    @endif
        
</div>