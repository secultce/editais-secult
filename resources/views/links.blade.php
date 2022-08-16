<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Links</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Governo Do Estado Do Ceará" name="keywords">
    <meta content="Governo Do Estado Do Ceará" name="description">

    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="icon">

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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">

    <link rel="shortcut icon" type="imagex/png" href="../../img/logo/iconCe.ico">
    <script>
        var controleCampo = 1;

        function adicionarCampo() {
            controleCampo++;
            //console.log(controleCampo);
            //aqui a unica modificação para funcionar foi deixar os names dos inputs de link e texto como arrays(link[], texto[])
            document.getElementById('formulario').insertAdjacentHTML('beforeend', '<div class="col-lg-12 form-group" id="campo' + controleCampo + '"><label>Digite um texto para associar ao link: * </label><input type="text" name="texto[]" placeholder="Ex: Link de inscrições" class="border-1 bg-light px-4" required</br><label>Link *: </label><input type="url" name="link[]" placeholder="Ex: www.culturaCE/inscricoes" class=" border-1 bg-light px-4" required> <button type="button" id="' + controleCampo + '" onclick="removerCampo(' + controleCampo + ')" <label style="background-color: rgb(246, 8, 8);"> Clique para remover campos</label></button></div>');
        }

        function removerCampo(idCampo) {
            //console.log("Campo remover: " + idCampo);
            document.getElementById('campo' + idCampo).remove();
        }
    </script>

</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner">
        </div>
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
                    <a href="/postagem" class="nav-item nav-link active"><b>Início</b></a>
                    <a href="/listagem"
                        class="nav-item nav-link active"><b>Editais</b></a>
                    <a href="/desativados"
                        class="nav-item nav-link active"><b>Encerrados</b></a>
                    <a href="{{route('login.destroy')}}"
                        class="nav-item nav-link active "><b>Sair</b></a>
                </div>
            </div>
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
    <!-- Topbar End -->
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
    <br>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class=" text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Área de controle de links </h5>
        </div>
        <div class="position-relative pb-3 mb-5 mx-auto" style="max-width: 900px;">
            <form method="POST" action="/inserir-links">
                @csrf
                <input type="hidden" name="id" value="{{$postagens->id}}">

                <label></label>
                <input type="text" name="texto[]" placeholder="Ex: Novo Link" class='border-1 bg-light px-4' required>
                <label></label>
                <input type="url" name="link[]" placeholder="www.culturaCE/Ficha" class=" border-1 bg-light px-4" required>
                
                <div id="formulario">
                    <!--Area de novos links clonados-->
                </div>
                <br>
                <label> Clique no botão abaixo para adicionar novos links</label><br>
                <br>
                <button class="col-lg-1" type="button" style="background-color: rgb(52, 173, 84);" onclick="adicionarCampo()">+</button>&nbsp;
                <br><br>
                <input type='submit' value='Adicionar novos links' class="col-lg-12" type="button" style="background-color: rgb(52, 173, 84); " />
            </form>
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Área para atualização de links</h5>
                </div>
                <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-5">
                        @foreach($anexos as $nexos)                   
                            <div class="col-lg-4" id="linkpostagem">
                                <div class="row g-5">                            
                                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">                                
                                        
                                        <h4> 
                                        <div style="overflow: hidden; width:250px; border:1px; white-space:nowrap;">
                                        <a href="{{$nexos->link}}" target="_blank">{{$nexos->texto}}</a>
                                        </div>
                                                                             
                                        </h4>                               
                                        <a href="/anexo/{{$nexos->id}}"> <input type="submit" value="Alterar link" class="btn btn-outline-success"> </a>

                                        <!-- <form action="/apagaAnexo/{{$nexos->id}}" method="POST">
                                        @csrf
                                        
                                         <Button class="btn btn-outline-danger">Apagar</Button> -->
                                        </form>   
                                                                        
                                    </div>                        
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
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
    <script src="../../lib/wow/wow.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/counterup/counterup.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>
</body>
</html>