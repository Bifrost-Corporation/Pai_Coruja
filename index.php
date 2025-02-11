<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#042243">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="manifest" href="manifest.json">
    
    <title>Login - Pai Coruja</title>
</head>

<body>
    <main class="bg-login">
        <section class="card-login" >
        <div class="content-logoPaiCoruja">
                <img src="img/pai_coruja_3.png" class="logo-login">
            </div>
            <div class="container-title-hr-login">
                <p class="label-login">Login</p>
                
            </div>
            <form name="form-login" method="POST" action="DAO/consulta-login.php">
                <div class="div-titulo3">
                    <label class="label-erro" id="label-email"></label>
                    <div class="input-box">
                    <input type="email" class="input-email" name="txtEmail" id="txtEmail" placeholder="Digite seu email"><i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                 </div>
                <div class="div-titulo3">
                    <label class="label-erro" id="label-senha"></label>
                    <div class="input-box"><input type="password" class="input-senha" name="txtSenha" id="txtSenha" placeholder="Digite sua senha"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                    
                </div>
                <div class="div-login">
                    </div>
                <div class="div-login">
                    <button class="btn-esqueci"><a href="forgetPassword.php">Esqueci</a></button>
                    <button class="btn-login" name="btn-login" id="btn-login" type="submit">Entrar ></button>
                </div>
            </form>
            <div class="div-login">
                <p class="nota-copy">Pai Coruja - BIFROST © Copyright 2021</p>
            </div>

        </section>
    </main>
    <!-- <footer class="div-footer"> -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/pwacompat@2.0.8/pwacompat.min.js"
            integrity="sha384-uONtBTCBzHKF84F6XvyC8S0gL8HTkAPeCyBNvfLfsqHh+Kd6s/kaS4BdmNQ5ktp1"
            crossorigin="anonymous"></script>
    <script>
        jQuery('form').on('submit',function(e){
            var email = $('.input-email').val();
            var senha = $('.input-senha').val();
            var emailSemEspaco = email.trim();
            var senhaSemEspaco = senha.trim();
            if (email.length == 0 || email == '') {
                $('#label-email').html('Informe um email!');
                $('#txtEmail').addClass('erro-form');
                $('#label-email').show();
                setTimeout(function () {
                    $('#label-email').fadeOut(1);
                    $('#txtEmail').removeClass('erro-form');
                }, 5000);
                e.preventDefault();
            } else {
                var verificararroba = false;
                var verificaponto = false;
                for (var i = 0; i < email.length; i++) {
                    if (email.charAt(i) == '@' && i + 1 < email.length) {
                        verificararroba = true;
                    }
                    if (email.charAt(i) == '.' && i + 1 < email.length) {
                        verificaponto = true;
                    }
                }
                if (verificaponto == false || verificararroba == false) {
                    $('#label-email').html('Email inválido!');
                    $('#txtEmail').addClass('erro-form');
                    $('#label-email').show();
                    setTimeout(function () {
                        $('#label-email').fadeOut(1);
                        $('#txtEmail').removeClass('erro-form');
                    }, 5000);
                    e.preventDefault();
                }
            }
            if (senha.length == 0 || senhaSemEspaco == '') {
                $('#label-senha').html('Informe uma senha!');
                $('#txtSenha').addClass('erro-form');
                $('#label-senha').show();
                setTimeout(function () {
                    $('#label-senha').fadeOut(1);
                    $('#txtSenha').removeClass('erro-form');
                }, 5000);
                e.preventDefault();
            }
        });
    </script>

    <script>
               if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js')
            // ('/service-worker.js')
            .then(function (registration) {
                console.log("success load");
                console.log(registration);
            })
            .catch(function (err) {
                console.log(err);
            });
    }


    
        </script>
</body>

</html>
