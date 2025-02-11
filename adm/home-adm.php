<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">

    <link rel="stylesheet" type="text/css"  href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css"  href="../assets/css/grafico.css">



    <title>Dashborard - ADM</title>


    <?php
        include ('sentinela.php');
        include ('globalAdm.php');
        include ('../classes/Secretaria.php');
        include ('../classes/Turma.php');
        include ('../classes/Escola.php');
        include ('../classes/Aluno.php');
        include ('../classes/Responsavel.php');
        include ('../classes/Administrador.php');

        $secretaria = new Secretaria();
        $turma = new Turma();
        $escola = new Escola();
        $aluno = new Aluno();
        $responsavel = new Responsavel();
        $observacao = new Observacao();
        $administrador = new Administrador();

        $listaQtdeEscolas = $administrador->contarEscolas();
        $listaQtdeAlunos = $administrador->contarAlunos();
        $listaQtdeResponsaveis = $administrador->contarResponsaveis();
        $listaQtdeProfessores = $administrador->contarProfessores();
        $listaMediaAlunosEscola = $administrador->mediaAlunoEscola();
        $listaMediaTurmaEscola = $administrador->mediaTurmaEscola();
        $listaAlunosEscolaGrafico = $administrador->listarAlunosEscola();
        $listaQtdePontos0 = $administrador->contarObservacoesPorValor(0);
        $listaQtdePontos1 = $administrador->contarObservacoesPorValor(1);
        $listaQtdePontos2 = $administrador->contarObservacoesPorValor(2);
        $listaQtdePontos3 = $administrador->contarObservacoesPorValor(3);
        $listaQtdePontos4 = $administrador->contarObservacoesPorValor(4);
        $listaQtdePontos5 = $administrador->contarObservacoesPorValor(5);

        foreach($listaQtdeEscolas as $linha){
            $qtdeEscolas = $linha['qtdeEscolas'];
        }

        foreach($listaQtdeAlunos as $linha){
            $qtdeAlunos = $linha['qtdeAlunos'];
        }

        foreach($listaQtdeResponsaveis as $linha){
            $qtdeResponsaveis = $linha['qtdeResponsaveis'];
        }

        foreach($listaQtdeProfessores as $linha){
            $qtdeProfessores = $linha['qtdeProfessores'];
        }

        foreach($listaMediaAlunosEscola as $linha){
            $qtdeMediaAlunoEscola = $linha['mediaAlunoEscola'];
        }

        foreach($listaMediaTurmaEscola as $linha){
            $qtdeMediaTurmaEscola = $linha['mediaTurmaEscola'];
        }

        foreach($listaQtdePontos0 as $linha){
            $qtdePontos0 = $linha['qtdeObservacao'];
        }

        foreach($listaQtdePontos1 as $linha){
            $qtdePontos1 = $linha['qtdeObservacao'];
        }

        foreach($listaQtdePontos2 as $linha){
            $qtdePontos2 = $linha['qtdeObservacao'];
        }

        foreach($listaQtdePontos3 as $linha){
            $qtdePontos3 = $linha['qtdeObservacao'];
        }

        foreach($listaQtdePontos4 as $linha){
            $qtdePontos4 = $linha['qtdeObservacao'];
        }

        foreach($listaQtdePontos5 as $linha){
            $qtdePontos5 = $linha['qtdeObservacao'];
        }
        
        $qtdeMediaAlunoEscola = number_format($qtdeMediaAlunoEscola, 2, '.', '');
        $qtdeMediaTurmaEscola = number_format($qtdeMediaTurmaEscola, 2, '.', '');

        $qtdeCor = 0;

        /*
        $listaQtdeAlunos = $secretaria->contarAlunos($_SESSION['idEscola']);
        $listaQtdeProfessores = $secretaria->contarProfessores($_SESSION['idEscola']);
        $listaQtdeTurmas = $secretaria->contarTurmas($_SESSION['idEscola']);
        $listaQtdeResponsaveis = $secretaria->contarResponsaveis($_SESSION['idEscola']);
        $listaMediaObservacoes = $secretaria->mediaObservacoes($_SESSION['idEscola']);
        $listaMediaAlunoTurma = $secretaria->mediaAlunosTurma($_SESSION['idEscola']);
        $listaAlunosTurmas = $turma->contarAlunosTurma($_SESSION['idEscola']);
        $listaQtdePontos0 = $observacao->contarObservacoesPorValor(0, $_SESSION['idEscola']);
        $listaQtdePontos1 = $observacao->contarObservacoesPorValor(1, $_SESSION['idEscola']);
        $listaQtdePontos2 = $observacao->contarObservacoesPorValor(2, $_SESSION['idEscola']);
        $listaQtdePontos3 = $observacao->contarObservacoesPorValor(3, $_SESSION['idEscola']);
        $listaQtdePontos4 = $observacao->contarObservacoesPorValor(4, $_SESSION['idEscola']);
        $listaQtdePontos5 = $observacao->contarObservacoesPorValor(5, $_SESSION['idEscola']);

        foreach($listaQtdeAlunos as $linha){
            $qtdeAlunos = $linha['qtdeAlunos'];
        }

        foreach($listaQtdeProfessores as $linha){
            $qtdeProfessores = $linha['qtdeProfessores'];
        }

        foreach($listaQtdeTurmas as $linha){
            $qtdeTurmas = $linha['qtdeTurmas'];
        }

        foreach($listaQtdeResponsaveis as $linha){
            $qtdeResponsaveis = $linha['qtdeResponsaveis'];
        }

        foreach($listaMediaObservacoes as $linha){
            $mediaObservacoes = $linha['mediaObservacoes'];
        }

        foreach($listaMediaAlunoTurma as $linha){
            $mediaAlunoTurma = $linha['mediaTurma'];
        }

        foreach($listaAlunosTurmas as $linha){
            $qtdeCor += 1;
        }

        foreach($listaQtdePontos0 as $linha){
            $qtdePontos0 = $linha['qtdeObservacao'];
        }

        foreach($listaQtdePontos1 as $linha){
            $qtdePontos1 = $linha['qtdeObservacao'];
        }

        foreach($listaQtdePontos2 as $linha){
            $qtdePontos2 = $linha['qtdeObservacao'];
        }

        foreach($listaQtdePontos3 as $linha){
            $qtdePontos3 = $linha['qtdeObservacao'];
        }

        foreach($listaQtdePontos4 as $linha){
            $qtdePontos4 = $linha['qtdeObservacao'];
        }

        foreach($listaQtdePontos5 as $linha){
            $qtdePontos5 = $linha['qtdeObservacao'];
        }

        $mediaAlunoTurma = number_format($mediaAlunoTurma, 1, '.', '');
        $mediaObservacoes = number_format($mediaObservacoes, 1, '.', '');
        */
    ?>
<header>
            <nav class="nav-bar">
                <div class="content-logo-btn">
                    <ul class="ul-area-btn">
                        <li class="nav-li"><a class="btn-nav-pc-open"><i class="material-icons-round">menu</i></a></li>
                    </ul>
                    <a href="home-adm.php"><img class="logo-img" src="../img/pai_coruja_branca.png"></a>
                </div>
                <button class="profile">
                    <div class="profile-details" id="openProfile">
                        <img src="../img/paiADM.png" alt="">
                    </div>
                </button>

                <div class="dropdown-menu-profile">
                    <div class="profile-details">
                        <img src="../img/paiADM.png" alt="">
                        <div class="name-job">
                            <div class="name-menu">Administrador</div>
                            <small class="job-menu">Olá Administrador(a)</small>
                        </div>
                    </div>
                    <ul class="opcoes-drop-profile">
                        <li class="drop-profile-li">
                            <a href="logout.php">
                                <i id="logout-user" class="material-icons-round">logout</i>
                                <small>Sair</small>
                            </a>
                        </li>
                    </ul>
                </div>

            


            </nav>

            <div class="sidebar">
                <div class="logo-content">
                    <div class="logo">
                        <div class="logo-name">
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
                        <li class="links-name">
                            <a href="home-adm.php" class="active-nav">
                            <i class="material-icons-round">space_dashboard</i>
                                <span class="links-name tooltip">Dashboard</span>
                            </a>
                        </li>
                        <li class="links-name">
                            <a href="cadastrar-escola.php">
                                <i class="material-icons-round">school</i>
                                <span class="links-name tooltip">Cadastrar Escola</span>
                            </a>
                        </li>
                        <li class="links-name">
                        <a href="visualizar-dados.php">
                                <i class="material-icons-round">view_list</i>
                                <span class="links-name tooltip">Visualizar Dados</span>
                            </a>
                        </li>
                    </div>
                </ul>
                
            </div>
        </header>


        <main class="container-main">
        
        
        <div class="container-dash">
            <div class="ola-nav-dash">
                <h1>Dashboard</h1>
            </div>

            <div class="container-dados-dash">
                <div class="acesso-rapido-dash">
                    <h4>Acesso Rápido</h4>
                    <div class="acesso-dash-btns">
                        <a href="cadastrar-escola.php"><button>Cadastrar Escola</button></a>
                        <a href="visualizar-dados.php"><button>Visualizar Dados</button></a>
                    </div>
                </div>
                <div class="dados-escolares-dash">
                    <!-- <h4>Dados do Sistema Geral </h4> -->
                    <div class="dados-escolares-container">
                        <div class="dados-escolares-linha">
                            <div class="dado-escolar">
                                <i class="material-icons-round">school</i>
                                <div>
                                    <h3><?php echo $qtdeEscolas ?></h3>
                                    <h5>Escolas Cadastradas</h5>
                                </div> 
                            </div>
                            <div class="dado-escolar">
                                <i class="material-icons-round">person</i>
                                <div>
                                    <h3><?php echo $qtdeAlunos ?></h3>
                                    <h5>Alunos Cadastrados</h5>
                                </div> 
                            </div> 
                        </div>
                        <div class="dados-escolares-linha">
                            <div class="dado-escolar">
                                <i class="material-icons-round">people</i>
                                <div>
                                    <h3><?php echo $qtdeResponsaveis ?></h3>
                                    <h5>Responsáveis Cadastrados</h5>
                                </div> 
                            </div>
                            <div class="dado-escolar">
                                <i class="material-icons-round">person</i>
                                <div>
                                    <h3><?php echo $qtdeProfessores ?></h3>
                                    <h5>Professores Cadastrados</h5>
                                </div> 
                            </div> 
                        </div>
                        <div class="dados-escolares-linha">
                            <div class="dado-escolar">
                                <i class="material-icons-round">leaderboard</i>
                                <div>
                                    <h3><?php echo $qtdeMediaTurmaEscola ?></h3>
                                    <h5>Média de Turmas por escola</h5>
                                </div> 
                            </div>
                            <div class="dado-escolar">
                                <i class="material-icons-round">leaderboard</i>
                                <div>
                                    <h3><?php echo $qtdeMediaAlunoEscola ?></h3>
                                    <h5>Média de alunos por escola</h5>
                                </div> 
                            </div> 
                        </div>
                        
                    </div>
                </div>
                <div class="msg-chat-dash">
                    <h4>Bem-Vindo de Volta Administrador!</h4>
                    <!--<img src="../img/macacopc.gif">-->
                </div>
            </div>
            
            <div class="grafico-container-dash">
                <div>
                    <div class="acesso-dash-btns">
                        <a id="botao-grafico1" onclick="gerarGraficoGravidadeObservacao()"><button>Gravidade das Observações</button></a>
                        <a id="botao-grafico2" onclick="gerarGraficoAlunoEscola()"><button>Alunos por Escola</button></a>
                    </div>
                    <div class="grafico">
                        <canvas id="grafico" height="500" responsive></canvas>
                    </div>
                </div>
            </div>
        </div>

        


    </main>


    <script src="../assets/js/nav.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script src="../assets/js/carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>

        <?php
            
            function randomColorR(){
                $r = mt_rand(0, 200);
                return $r;
            }

            function randomColorG(){
                $g = mt_rand(0, 200);
                return $g;
            }

            function randomColorB(){
                $b = mt_rand(0, 200);
                return $b;
            }

        ?>

        const ctx = document.getElementById('grafico').getContext("2d");
        
        let grafico = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [
                        '0',
                        '1',
                        '2',
                        '3',
                        '4',
                        '5'
                    ],
                    datasets: [{
                        label: 'Quantidade de observações por gravidade',
                        data: [
                            <?php echo $qtdePontos0.", ".$qtdePontos1.", ".$qtdePontos2.", ".$qtdePontos3.", ".$qtdePontos4.", ".$qtdePontos5.", " ?>
                        ],
                        backgroundColor: [
                            '#b7d5e5',
                            '#bdecb6',
                            '#fdfd96',
                            '#f7a156',
                            '#ff6961',
                            '#7d5b8c',
                        ],
                        hoverOffset: 4
                    }],
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'Gravidade das Observações na Escola'
                            }
                        },
                        responsive: true,
                        maintainAspectRatio: false
                    },
                },
            });


        function gerarGraficoGravidadeObservacao(){
            grafico.destroy();
            grafico = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [
                        '0',
                        '1',
                        '2',
                        '3',
                        '4',
                        '5'
                    ],
                    datasets: [{
                        label: 'Quantidade de observações por gravidade',
                        data: [
                            <?php echo $qtdePontos0.", ".$qtdePontos1.", ".$qtdePontos2.", ".$qtdePontos3.", ".$qtdePontos4.", ".$qtdePontos5.", " ?>
                        ],
                        backgroundColor: [
                            '#b7d5e5',
                            '#bdecb6',
                            '#fdfd96',
                            '#f7a156',
                            '#ff6961',
                            '#7d5b8c',
                        ],
                        hoverOffset: 4
                    }],
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'Gravidade das Observações na Escola'
                            }
                        },
                        responsive: true,
                        maintainAspectRatio: false
                    },
                },
            });
        }
        
        function gerarGraficoAlunoEscola(){
            grafico.destroy();
            grafico = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        <?php
                            $i = 1; 
                            foreach($listaAlunosEscolaGrafico as $linha){
                        ?>
                        
                        <?php
                                echo "'" . $linha['nomeEscola'] . "'" . ",";
                                $i += 1;
                            }
                        ?>
                    ],
                    datasets: [{
                        label: 'Quantidade de alunos na escola',
                        data: [
                            <?php
                                $i = 1; 
                                foreach($listaAlunosEscolaGrafico as $linha){
                            ?>
                            
                            <?php
                                    echo $linha['qtdeAluno'] . ",";
                                    $i += 1;
                                }
                            ?>
                        ],
                        backgroundColor: [
                            <?php
                                $i = 1; 
                                foreach($listaAlunosEscolaGrafico as $linha){
                            ?>
                            
                            <?php
                                /*
                                    echo "'rgba(".randomColorR().",".randomColorG().",".randomColorB().",1)',";
                                    $i += 1;
                                }
                                */
                                echo "'rgba(13, 37, 145)',";
                                }
                            ?>
                        ]
                    }]
                },
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Quantidade de alunos por escola'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false
                },
            });
        }
        
    </script>
</body>



</html>
