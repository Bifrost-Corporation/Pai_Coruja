<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>Cadastrar Escola</title>


</head>

<body>
    <?php
        include("sentinela.php");
    ?>
    <header>

        <nav class="nav-bar">
            <a href=""><img class="logo" src="../images/pai_coruja_3.png"></a>
            <ul class="ul-area-btn">
                <li class="nav-li"><a class="btn-nav-exit" href="logout.php">Sair</a></li>
            </ul>
        </nav>

        <nav class="sidebar">
            <div class="perfil">
                <div class="img-perfil">
                    <img src="../images/usuario-de-perfil.png">
                </div>
                <div class="text-perfil">
                    <p>Olá, Administrador</p>
                </div>
            </div>
            <ul class="ul-sidebar-menu">
                <li>
                    <a href="#" onclick="openMenu()" id="sub-menu-button" class="visao-geral-btn">Visão Geral
                        <span class="fas fa-caret-down first"></span>
                    </a>

                    <ul id="sub-menu">
                        <li><a href="#">Mural</a></li>
                        <li><a href="#">Avaliação dos Professores</a></li>
                        <li><a href="#">Eventos Programados</a></li>

                    </ul>
                </li>

                <li>
                    <a href="#" onclick="openMenu2()" id="sub-menu-button-2" class="outro-btn">Administrador
                        <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul id="sub-menu-2">
                        <li><a href="cadastrar-escola.php">Cadastrar Escola</a></li>
                        <li><a href="cadastrar-secretaria.php">Cadastrar Secretária</a></li>

                    </ul>
                </li>

            </ul>
        </nav>
    </header>


    <main class="container-main">


        <section class="top-section">
            <div class="voltar">
                <a href="home-adm.php">
                    <span class="fas fa-arrow-left"></span>Voltar
                </a>
            </div>
            <div class="titulo-cadastrar">
                <h2>Cadastrar Escola:</h2>
            </div>
        </section>


        <section class="main-section">
            <form name="nomeEscola" class="formulario" method="POST" action="../DAO/inserir-escola.php">
                <div class="user-details">
                    <div class="input-box-width100">
                        <h2>Nome da Escola: </h2>
                        <input name="txtNomeEscola" id="txtNomeEscola" type="text" placeholder="Insira o nome da escola">
                    </div>
                    <div class="button">
                        <input type="submit" class="btn-nav-exit" value="Cadastrar">
                    </div>
                </div>
            </form>
        </section>
    </main>

    <script src="../js/nav.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        jQuery('form').on('submit',function (e){
            var nomeEscola = $('.txtNomeEscola').val();
            if(nomeEscola.length == 0){
                e.preventDefault();
            }
        });
    </script>

</body>



</html>