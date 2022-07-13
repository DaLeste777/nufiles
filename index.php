<?php
session_start();
$erro = false;

if ($_POST) {
    $conn = new PDO('mysql:host=localhost;dbname=exemplo', 'root', '');
    $sql = "SELECT * FROM clientes WHERE email='$_POST[email]' and senha='$_POST[senha]'";
    // var_dump($sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $rs = $stmt->fetchAll();

    if ($rs != null) {

        $_SESSION = $rs[0];
        header('Location: home');
        exit;
    } else {
        $erro = true;
    }
} else {
    session_destroy();
};

?>
<!doctype html>
<html>

<head>
    <title>Pagina Principal</title>
    <link rel="shortcut icon" href="/projeto/icone_Site.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-to-r from-green-400 to-blue-500 ...">
    <!-- <img src="principal.png" style="position:absolute; margin-top:10%;"> -->
    <style>
        body {
            /*background-color: #c2f0f0;*/
            background-image: url("images1.jpg");
            /*background-repeat: no-repeat;*/
        }

        .rodape {
            position: fixed;
            bottom: 0;
            /*width: 100%;*/
            height: 90px;
            background: #000000;
            right: 0;
            padding-left: 30px;
            border-radius: 10px 0px 0px 0px;

        }


        .rodape #rds {
            float: right;
        }

        .rede-social {
            display: inline;
        }
    </style>
    <!-- <div style="padding-top:200px;">
        <form method="POST" class="form-group col-md-4 col-sm-12 ml-4 mr-4" style="background-color: #f0f5f5; float:right; ">
            <div class="form-group">

                <div class="card-body">
                    <font size="5">Cliente</font>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Senha:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="senha" id="inputPassword3">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Entrar</button>
                    <a href="cadastrar" type="button" class="btn btn-dark">Cadastre-se</a>
                    <a href="alterar/alterar.php" type="button" class="btn btn-dark">Alterar minha senha</a>
                </div>
            </div>
        </form>
    </div> -->
    <div>
        <div class="container-fluid">
            <div class="row" style="margin-top: 10%;">
                <div class="col-sm-6 row p-0">
                    <!-- <div class="col-sm-2"></div> -->
                    <div class="align-items-center">
                        <img src="principal.png" alt="Logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="row">

                        <div class="card p-0 shadow  mx-auto">
                            <div class="card-header">
                                <h3>
                                    Login
                                </h3>
                            </div>
                            <div class="card-body">

                                <?php if ($erro == true) {
                                ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Senha ou Login incorreto!</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php
                                }
                                ?>
                                <form method="POST">
                                    <div class="form-group">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="">Email:</label>
                                                <div class="col-sm-12">
                                                    <input type="email" name="email" class="form-control" id="inputEmail3">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="">Senha:</label>
                                                <div class="col-sm-12">
                                                    <input type="password" class="form-control" name="senha" id="inputPassword3">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-dark">Entrar</button>
                                            <a href="cadastrar" type="button" class="btn btn-dark">Cadastre-se</a>
                                            <a href="esqueci/esqueci.php" type="button" class="btn btn-dark">Esqueci minha senha</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="rodape">
            <br>
            <ul id="rds">
                <img src="twitter.png" width="50" height="50" class="rede-social mb-3 mr-2">
                <img src="facebook.png" width="50" height="50" class="rede-social mb-3 mr-2">
                <img src="linkedin.png" width="50" height="50" class="rede-social mb-3 mr-2">
            </ul>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>