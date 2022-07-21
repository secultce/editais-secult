<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Editais culturais</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Governo Do Estado Do Ceará" name="keywords">
    <meta content="Governo Do Estado Do Ceará" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="shortcut icon" type="imagex/png" href="img/logo/iconCe.ico">
</head>

<body>



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
                    <img src="img/logo/secult-escura.png" width="180"> &nbsp;
                    <a href="{{ route('login.index')}}" class="nav-item nav-link text-light bg-dark" >Login</a>
                    <a href="{{ route('registro.index')}}" class="nav-item nav-link text-light bg-dark" >Registro</a>
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
                    <a href="/editais" class="nav-item nav-link active">Editais</a>
                    <a href="/equipamentos" class="nav-item nav-link ">Equipamentos</a>
                    <a href="/servico" class="nav-item nav-link">Servicos</a>
                    <a href="/cefic" class="nav-item nav-link ">Cefic</a>
                </div>
            </div>
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


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Inscrições Abertas</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">@valor</h1>
                        </div>


                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-black mb-0">Conhecimento Público</h5>
                          
                            <h1 class="text-black mb-0" data-toggle="counter-up">@valor</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-black mb-0">Processo de Seleção</h5>
                           
                            <h1 class="text-black mb-0" data-toggle="counter-up">@valor</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Inscrições encerradas</h5>
                         
                            <h1 class="text-white mb-0" data-toggle="counter-up">@valor</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Se não existir editais publicados -->
<!--     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Ops! parece que não temos novos editais publicados. </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    </div> -->



    <!-- se existir editais de conhecimento público -->
    <!-- Mostre isso -->
   
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Editais em Conhecimento público </h1>
    </div>

    
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
        @foreach ($postagem as $post)
            <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <div class="nova">
                                <img id="dimensao" src="{{ url('/storage/Editais/'.$post->arquivo)}}"> 
                            </div>
                            <div
                                class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                {{ $post->nome }}</div>
                        </div>
                        <div class="p-4">
                            <a class="text-width-g "
                                href="/single/{{$post->id}}">Inscreva-se<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><br>
            </div>

           @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center wow fadeInUp" data-wow-delay="0.1s">
        {!! $postagem->links() !!}
        </div>

   <br>

    <!-- se existir editais abertos -->
    <!-- Mostre isso -->
   
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Editais com inscrições abertas </h1>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
           
            <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <div class="nova">
                                <img id="dimensao" src="img/imagensEditais/">
                            </div>
                            <div
                                class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                Edital aberto</div>
                        </div>
                        <div class="p-4">
                            <a class="text-width-g "
                                href="#">Inscreva-se<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><br>
            </div>

           
        </div>
    </div>

  
    <!--Se existir algum edital em processo de seleção -->
  
    <br>
    <!--Mostre isso -->
   
    <!-- Editais em Processo de Seleção  -->
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-dark text-uppercase">Em breve</h5>
        <h1 class="mb-0">Editais em Processo de Seleção </h1>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
           
            <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <div class="nova">
                                <img id="dimensao" src="img/imagensEditais/">
                            </div>
                            <div
                                class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                Edital aberto</div>
                        </div>
                        <div class="p-4">
                            <a class="text-width-g "
                                href="#">Inscreva-se<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><br>
            </div>

            
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
                                <a class="btn btn-secondary btn-square me-2"
                                    href="https://www.facebook.com/secultceara/"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-secondary btn-square me-2"
                                    href="https://www.instagram.com/secultceara/"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-secondary btn-square"
                                    href="https://www.youtube.com/channel/UCVckZREupHqHkoS7MmxwH9w"><i
                                        class="fab fa-youtube fw-normal"></i></a>
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
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>