@extends('layouts.usuario')
@section('title', 'Editais')
@section('content')

<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/editais" class="nav-item nav-link active">Editais</a>
                <a href="/equipamentos" class="nav-item nav-link ">Equipamentos</a>
                <a href="/servico" class="nav-item nav-link">Servicos</a>
                <a href="/cefic" class="nav-item nav-link ">Cefic</a>
            </div>
        </div>
        <button type="button" class="btn text-light bg-dark ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"> Pesquisar</i></button>

    </nav>
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/logo/logoNova.png" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pesquisa -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(13, 13, 13, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <form method="GET" action="/listagemTodos" >
                    @csrf
                        <div class="input-group" style="max-width: 400px;">
                            <input type="text" name="name" class="form-control bg-white border-primary p-3" placeholder="Nome do edital">
                            <button type="submit" value="Buscar" class="btn btn-secondary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Facts Start -->
 <div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                       
                        <h5 class="text-white mb-0">Inscrições Abertas</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">6</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-dark d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">

                       
                        <h5 class="text-black mb-0">Conhecimento Público</h5>
                        <h1 class="text-black mb-0" data-toggle="counter-up">6</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-dark d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-black mb-0">Processo de Seleção</h5>
                        
                        <h1 class="text-black mb-0" data-toggle="counter-up">9</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                       
                        <h5 class="text-white mb-0">Inscrições encerradas</h5>

                        <h1 class="text-white mb-0" data-toggle="counter-up">100</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
    <h1 class="mb-0">Editais em Conhecimento público </h1>
</div>    

<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
    <h1 class="mb-0">Editais com inscrições abertas </h1>
</div>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">       
        <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
            <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img id="dimensao" src="https://editais.cultura.ce.gov.br/storage/Editais/blob.-8eedc4202dfd250d60557cb4411f338a_1693229465.png">
                        <div class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                            Edital aberto
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="text-width-g " href="https://editais.cultura.ce.gov.br/single/218">Inscreva-se<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection