<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">

    <link rel="stylesheet" type="text/css"  href="../assets/css/style.css">



    <title>Home - Secretária</title>


</head>

<body>
<?php
        include("sentinela.php");
    
    ?>
    
    <header>

        <nav class="nav-bar">
            <a href=""><img class="logo-img" src="../img/pai_coruja_branca.png"></a>
            <ul class="ul-area-btn">
                <li class="nav-li"><a class="btn-nav-open"><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>

        <div class="sidebar">
            <div class="logo-content">
                <div class="logo">
                    <div class="logo-name"><a class="btn-nav-pc-open"><img src="../img/pai_coruja_branca.png"></a>
                    <i class="fas fa-arrow-left"></i>
                </div>
                    <div class="close-mobile-navbar">
                        <span>Menu Pai Coruja</span>
                        <a class="btn-nav-close"><i class="far fa-window-close"></i></a>
                    </div>
                </div>
            </div>
            <ul class="nav-list">
                <div class="menu-container">
                    <!-- <span>fernfjk</span> -->
                    <li class="links-name">
                        <a href="home-adm.php" class="active-nav">
                            <i class="fas fa-calendar"></i>
                            <span class="links-name">Mural</span>
                        </a>
                    </li>
                    <li class="links-name">
                        <a href="#">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span class="links-name">Avaliação dos Professores</span>
                        </a>
                    </li>
                    <li class="links-name">
                        <a href="#">
                            <i class="fas fa-calendar-day"></i>
                            <span class="links-name">Eventos Programados</span>
                        </a>
                    </li>
                </div>
                <hr>
                <div class="menu-container">
                    <li class="links-name">
                        <a href="cadastrar-escola.php">
                            <i class="fas fa-school"></i>
                            <span class="links-name">Cadastrar Escola</span>
                        </a>
                    </li>
                    <li class="links-name">
                        <a href="cadastrar-secretaria.php">
                            <i class="fas fa-school"></i>
                            <span class="links-name">Cadastrar Secretária</span>
                        </a>
                    </li>
                </div>
            </ul>
            <div class="profile-content">
                <div class="profile-menu">
                    <a href="logout.php">
                        <i class="fas fa-sign-out-alt" id="logout-user"></i>
                        <span>Logout</span>
                    </a>
                    <a href="#">
                        <i class="fas fa-user-cog"></i>
                        <span>Configurações</span>
                    </a>
                </div>
                <div class="profile">
                    <div class="profile-details">
                        <img src="../img/usuario-de-perfil.png" alt="">
                        <div class="name-job">
                            <div class="name-menu">Admin</div>
                            <div class="job-menu">Olá Administrador(a)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        


    <main class="container-main">
        <div class="dashboard">
            <div class="ola-nav-dash">
                <div>
                    <h1>Olá Secretário</h1>
                    <small>Etec De Guaianazes</small>
                </div>
            </div>
            <div class="container-dash">
                <div class="left-dash">
                    <h3>Acesso Rápido</h3>
                    <div class="acesso-rapido-btns">
                        <a href="#">AAAAAA</a>
                        <a href="#">AAAAAA</a>
                    </div>
                    <div class="dash-eventos-destaque">
                        <h3>Eventos em destaque</h3>
                        <div class="evento-card">
                            <div>
                                <h1>Evento</h1>
                                <small>Data: 06/06/2006</small>
                            </div>
                            <div>
                                <a href="#"><button>Saiba Mais</button></a>
                            </div>
                        </div>
                        <div class="evento-card">
                            <div>
                                <h1>Evento</h1>
                                <small>Data: 06/06/2006</small>
                            </div>
                            <div>
                                <a href="#"><button>Saiba Mais</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-dash">
                    fgdsgdfsgdfgdsg
                </div>
            </div>
        </div>
    </main>

    <div class="nav-footer">
        <ul>
            <li class="active">
                <a href="home-responsavel.php">
                    <i class="fas fa-calendar"></i>
                    <span class="links-name">Mural</span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span class="links-name">Avaliação</span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class="fas fa-calendar-day"></i>
                    <span class="links-name">Eventos</span>
                </a>
            </li>
        </ul>
    </div>

    <script src="../assets/js/nav.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script src="../assets/js/carousel.js"></script>
</body>



</html>