@extends('layout')

@section('conteudo')


<div class="row flex-lg-row-reverse align-items-center g-5 py-5">

    <div class="col-10 col-sm-8 col-lg-6">
        <img src="imagem/barbershop.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>

    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Bem Vindo ao BarberShop</h1>
        <p class="lead">A sua barbearia favorita em Caxias!</p>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="/contato" class="btn btn-primary btn-lg px-4 me-md-2">Agende seu horario</a>
        </div>
    </div>
</div>

<div class="row">

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagem/barba.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="imagem/corte.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="imagem/salao.jpeg" class="d-block w-100" alt="3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Proxima</span>
        </button>
    </div>
</div>


@endsection
