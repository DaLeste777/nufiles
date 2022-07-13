<?php


if ($_POST) {

    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];

    if ($senha1 == $senha2) {

        $conn = new PDO('mysql:host=localhost;dbname=exemplo', 'root');
        $sql = "SELECT * FROM clientes WHERE email='$_POST[email]' and senha='$_POST[senha]'";
        // var_dump($sql);
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll();

        if ($rs == null) {
            echo 'Usuário ou senha inválido!';
        } else {
            $sql = "UPDATE clientes SET senha = '$_POST[senha1]' WHERE email = '$_POST[email]' and senha = '$_POST[senha]'";
            var_dump($sql);
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
    } else {
        echo "Senha não confere!";
    }
};

?>
<html>

<head>
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
            <center>
                <font size="6">Alterar Senha</font>
            </center>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control" required>
            <label for="senha">Senha</label>
            <input id="senha" type="password" name="senha" class="form-control" required>
            <label for="senha1">Nova Senha</label>
            <input id="senha1" type="password" name="senha1" class="form-control" required>
            <label for="senha2">Confirmar senha</label>
            <input id="senha2" type="password" name="senha2" class="form-control" required>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-dark my-1 btn-block">Alterar</button>
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