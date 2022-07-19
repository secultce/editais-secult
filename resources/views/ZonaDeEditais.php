<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Editais culturais</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Governo Do Estado Do Ceará" name="keywords">
    <meta content="Governo Do Estado Do Ceará" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link href="css/style.css" rel="stylesheet">

    <link rel="shortcut icon" type="imagex/png" href="img/logo/iconCe.ico">
</head>

<body>


    <!-- Topo -->
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
    <!-- Topo fim -->


      <!-- Área de login -->
    <div class="container">
        <aside id="aside-signin">
            <img id="identidade-govbr" src="img/logo/logoNova.png" />
        </aside>
        <main id="main-signin">
            <form method="POST" action="route{{('auth.user)}}">
                
                <div class="card" id="login-cpf">
                    <div class="item-login-signup-ways" onclick="accordion('accordion-panel-id')">
                        <img src="img/logo/logoNova.png"><br>

                    </div>
                    <div class="accordion-panel" id="accordion-panel-id">
                        <p>Digite seu <strong>login</strong> e <strong>senha</strong> para acessar sua conta do editais culturais</p>
                        
                        <label for="cpf">Usuário</label>
                        <input id="user" name="usuario" autocomplete="ON" tabindex="1" type="text" value="" placeholder="Digite seu login" aria-invalid="false">

                        <label for="cpf">Senha</label>
                        <input id="password" name="senha" autocomplete="OFF" tabindex="1" type="password" value="" placeholder="Digite sua senha" aria-invalid="false">
                        
                        <div class="button-panel" id="login-button-panel">
                            <button name="action" value="enterAccountId" class="button-continuar" type="submit" tabindex="2">Acessar</button>
                        </div>
                    </div>

                    <div class="accordion-panel" id="accordion-panel-id">
                       <!--  {% if error != '' %} -->
				             <span class="msg_error"><i class="fa fa-key fa-fw" style="font-size: 16px; color: #FF6D6D; padding-right: 5px;"></i> <p>Usuário ou senha inválidos</p></span>
			          <!--   {% endif %} -->
                    </div>

                   
                    <hr id="hr-outras-op" style="margin: 0 0 0">

                    <div class="item-login-signup-ways">
                        <img src="img/logo/acesso.png" onclick="showModal('modal-bancos-credenciados')" width="42em" />
                        <!-- Para voltar a cor normal, basta apagar o style do link e remover o 'green' do nome da imagem acima. -->
                        <a tabindex="5" href="#" onclick="showModal('modal-bancos-credenciados')" style="color:#008C32">O login e senha devem ser fornecidos pelo admin
                            <span style="font-size: 7px; background-color: #008C32; color: white; padding: 3px; top: -3px; position: relative; margin-left: 8px;">SOMENTE USUÁRIOS SAS</span>
                        </a>
                    </div>
                </div>
            </form>
          
        </main>
    </div>
   <!-- Áred de login Fim -->
    <br> <br><br>  <br><br>   
    <!-- Rodapé -->
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
                                    Rua Major Facundo, 500 – Centro Fortaleza, CE CEP: 60.025-100</p>
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
                                <a class="btn btn-secondary btn-square me-2" href="https://www.instagram.com/secultceara/"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-secondary btn-square" href="https://www.youtube.com/channel/UCVckZREupHqHkoS7MmxwH9w"><i class="fab fa-youtube fw-normal"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rodapé Fim -->

    <!-- Botão topo -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScripts -->
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