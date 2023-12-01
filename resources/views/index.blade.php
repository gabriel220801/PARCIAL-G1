@extends('base')

@section('content')
       

        
        <div class="container">
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{ asset('img/nike.png') }}" class="d-block w-50 mx-auto" alt="Nike">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('img/adidas.jpg') }}" class="d-block w-50 mx-auto" alt="Adidas">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/rebook.png') }}" class="d-block w-50 mx-auto" alt="Rebook">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

@endsection
        
    