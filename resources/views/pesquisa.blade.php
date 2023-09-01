<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Pesquisa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Governo Do Estado Do Ceará" name="keywords">
    <meta content="Governo Do Estado Do Ceará" name="description">

    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">

    <link rel="shortcut icon" type="imagex/png" href="../../img/logo/iconCe.ico">
</head>

<body>



   <!-- Spinner Start -->
   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-secondary px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"></i>Governo Do Estado Do Ceará</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">

                <img src="../../img/logo/secult-escura.png" width="180">
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/editais" class="nav-item nav-link">Editais</a>
                <a href="/equipamentos" class="nav-item nav-link" >Equipamentos</a>
                <a href="/servico" class="nav-item nav-link">Serviços</a>
                <a href="/cefic" class="nav-item nav-link ">Cefic</a>
            </div>
        </div>
        <butaton type="button" class="btn text-light bg-dark ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"> Pesquisar</i></butaton>

    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="../../img/logo/logoNova.png" alt="Image">
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

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
            @if($posts->isNotEmpty())
                    @foreach ($posts as $post)
                <div class="container py-6">
                    <!--Conteúdo central fim-->
                    <div class="container py-">
                        <div class="row g-5">
                            <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                                <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                                    <div class="blog-item bg-light rounded overflow-hidden">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <div class="blog-img position-relative overflow-hidden">
                                                <img id="dimensao" class="img-fluid" src="{{ asset('/storage/Editais/'.$post->arquivo)}}" alt="">
                                                <div class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">
                                                    Edital aberto</div>
                                            </div>
                                            <div class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                                Edital aberto</div>
                                        </div>
                                    </div>
                                </div><br>
                            </div>
                            <div class="col-lg-4">
                                <div class="row g-4">
                                    <div class="col-12 wow zoomIn" data-wow-delay="0.1s">
                                        <h4>{{ $post->nome }}</h4>

                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>Etapas: {{ $post->etapa }}
                                        </p>
                                    </div>
                                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>Nº: {{ $post->id }}
                                        </p>
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>Valor
                                        {{  'R$ '.number_format( $post->valor , 2, ',', '.') }}
                                        </p>
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>E-mail:{{ $post->email }}
                                        </p>
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>Telefone:{{ $post->telefone }}
                                        </p>
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>Categoria:{{ $post->categoria }}
                                        </p>
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-3"></i>status:{{ $post->flag }}
                                        </p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row g-5">
                                    <div class="col-12 wow zoomIn" data-wow-delay="0.1s">
                                        <h4>Publicações do Edital</h4>
                                        <p class="mb-0">
                                            @if( $post->flag  == 'Ativado')
                                            <li id="0" class="widget-list-item"><span><a href="/single/{{$post->id}}">Acompanhar edital</a></span><img src="img/logo/mouse.png" width="20">
                                            </li>
                                            @endif
                                            @if( $post->flag  == 'Desativado')
                                            <h6>Este edital já foi encerrado</h6>
                                            @endif
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>

        @else
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <img src="img/logo/logotipo.png" width="180">
                </div>
                <div class=" text-center position-relative pb-3 mb-5 mx-auto " style="max-width: 600px;">
                    <label>
                        <h2>Nenhum edital foi encontrado</h2>
                    </label>
                </div>

                <div class=" text-center position-relative pb-3 mb-5 mx-auto " style="max-width: 600px;">
                    <label>
                        <h5>
                            Não encontrou o que estava procurando?
                            <br>
                            <a href="https://mapacultural.secult.ce.gov.br/busca/##(global:(enabled:(opportunity:!t),filterEntity:opportunity,viewMode:list))" 
                                target="_blank"
                                class="btn btn-success"
                            >
                                Tente novamente clicando aqui
                            </a>
                        </h5>
                    </label>
                </div>
                
            </div>
        </div>

        @endif
    </div>
    </div>


    <!-- Rodapé   -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-10 ">
                <div class="col-lg-12 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-3 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h4 class="text-light mb-0">Sede da Secult</h4>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white  me-2"></i>
                                <p class="mb-0">
                                    Rua Major Facundo, 500 – Centro
                                    Fortaleza, CE
                                    CEP: 60.025-100</p>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h4 class="text-light mb-0">Nossos canais</h4>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <div class="d-flex mb-2">
                                    <i class="bi bi-envelope-open text-white me-2"></i>
                                    <p class="mb-0">SECULT.CE.GOV.BR</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h4 class="text-light mb-0">Horário de atendimento</h4>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <div class="d-flex mb-2">
                                    <i class="bi bi-telephone text-white  me-2"></i>
                                    <p class="mb-0">
                                        De segunda a sexta 08 ás 17 horas</p>
                                </div>
                            </div>
                        </div>
                           <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square me-2" href="https://www.facebook.com/secultceara/"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-secondary btn-square me-2" href="https://www.instagram.com/secultceara/" ><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-secondary btn-square" href="https://www.youtube.com/channel/UCVckZREupHqHkoS7MmxwH9w"><i class="fab fa-youtube fw-normal"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rodapé fim -->


    <!-- Botão topo -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScrips -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/wow/wow.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/counterup/counterup.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>
</body>

</html>
