<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Governo Do Estado Do Ceará" name="keywords">
    <meta content="Governo Do Estado Do Ceará" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="img/logo/iconCe.ico">
</head>
<body>
<div>
   
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
    <div  id="app">
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
                    <img src="img/logo/secult-escura.png" width="180">
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->    
    @yield('content')
    <footer>
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light mt-0 wow fadeInUp" data-wow-delay="0.1s">
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
    </div>
         <!-- JavaScript Libraries -->
         <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
         <script src="lib/easing/easing.min.js"></script>
         <script src="lib/waypoints/waypoints.min.js"></script>
         <script src="lib/counterup/counterup.min.js"></script>
         <script src="lib/owlcarousel/owl.carousel.min.js"></script>
          <!-- Template Javascript -->
         <script src="{{ mix('js/app.js') }}"></script>
    </footer>
</div>
</body>
</html>