@extends('base')

@section('content')
<div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset('img/nike.png') }}" class="card-img-top" alt="Nike">
                <div class="card-body">
                    <h5 class="card-title">Nike</h5>
                    <p class="card-text">Descripción de los productos Nike.</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset('img/adidas.jpg') }}" class="card-img-top" alt="Adidas">
                <div class="card-body">
                    <h5 class="card-title">Adidas</h5>
                    <p class="card-text">Descripción de los productos Adidas.</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset('img/rebook.png') }}" class="card-img-top" alt="Rebook">
                <div class="card-body">
                    <h5 class="card-title">Rebook</h5>
                    <p class="card-text">Descripción de los productos Rebook.</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
@endsection