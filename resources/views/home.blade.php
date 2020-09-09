@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('/img/slide1.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/img/slide2.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ url('/img/slide3.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col text-center">
      <h1>
        Welcome to Laravel store
      </h1>

      <p class="lead mt-5">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi illum accusantium, et ipsa omnis nostrum saepe fugit atque consequuntur non. Quod aperiam quae a cupiditate recusandae minus animi ratione officia.
      </p>
    </div>
  </div>
  
  <div class="row">

    @foreach($featured_products as $product)
      <div class="col-12 col-md-3">
        <div class="card product-card">
          <div class="row no-gutters">
            <div class="col-4 col-md-12 img-container">
              <img src="{{ $product->img_url }}" alt="{{ $product->name }}">
            </div>

            <div class="col-8 col-md-12">
              <div class="card-body text-center">
                <h5 class="card-title">
                  {{ $product->name }}
                </h5>
    
                <div>
                  stars {{ $product->subcategory->name }}
                </div>
                
                <p class="card-text">
                  $ {{ $product->price }} 
                </p>
    
              </div>
            </div>
          </div>
          
          <div class="product-link-container">
            <a href="{{ route('product', [$product->category->name, $product->subcategory->name, $product->slug]) }}" class="btn btn-primary stretched-link">
              Watch product
            </a>
          </div>
          
        </div>
      </div>
    @endforeach
    
    <div class="col-3">
      <div class="card">
      <div class="card">
        <img src="{{ url('/img/item.jpg') }}" alt="" class="card-img-top">
          <div class="card-body text-center">
            <h5>
              Nombre del artículo
            </h5>

            <div>
              stars
            </div>
            
            <span>
              $100.00
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card">
      <div class="card">
        <img src="{{ url('/img/item.jpg') }}" alt="" class="card-img-top">
          <div class="card-body text-center">
            <h5>
              Nombre del artículo
            </h5>

            <div>
              stars
            </div>
            
            <span>
              $100.00
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-3">
      <div class="card">
      <div class="card">
        <img src="{{ url('/img/item.jpg') }}" alt="" class="card-img-top">
          <div class="card-body text-center">
            <h5>
              Nombre del artículo
            </h5>

            <div>
              stars
            </div>
            
            <span>
              $100.00
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
