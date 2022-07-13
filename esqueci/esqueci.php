<?php

$rs = null;
if ($_POST) {

    $conn = new PDO('mysql:host=localhost;dbname=exemplo', 'root');
    $sql = "SELECT * FROM clientes WHERE email='$_POST[email]' and data_nasc='$_POST[data]'";
    //var_dump($sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $rs = $stmt->fetchAll();
};

?>
<html>

<head>
    <link rel="shortcut icon" href="/projeto/icone_Site.ico" type="image/x-icon">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">



</head>

<body class="bg-gradient-to-r from-green-400 to-blue-500 ...">
    <style>
        body {
            background-color: #99bbff;
        }

        .caixa {
            padding-left: 30%;
            padding-top: 5%;
        }
    </style>
    <div class="caixa">
        <form method="POST" class="card col-md-6">
            <?php
            if ($_POST) {
                if ($rs  != null) { ?>
                    <div class="alert alert-success" role="alert">
                        Dica: <?= $rs[0]["dica_senha"] ?>
                    </div>

                <?php } else { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= "Não corresponde!"; ?>
                    </div>
            <?php }
            } ?>

            <center>
                <font size="6">Dica de Senha</font>
            </center>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control" required>
            <label for="senha">Data de Nascimento</label>
            <input id="data" type="date" name="data" class="form-control" required>




            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-dark my-1 btn-block">Prosseguir</button>
                </div>
                <div class="col-6">
                    <a href="../" class="btn btn-dark my-1 btn-block">Voltar</a>
                </div>
            </div>
        </form>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</html>