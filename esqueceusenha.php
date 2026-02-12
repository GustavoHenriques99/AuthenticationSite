<?php
include "C:/xampp/htdocs/loginsite/classe/conexao.php";

$erro = [];

if(isset($_POST['Entrar'])){

    $email = $mysqli->real_escape_string($_POST['email']);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erro[] = "E-mail inválido";
    }

    $sql_code = "SELECT senha, codigo 
                 FROM tbl_usuario 
                 WHERE email = '$email'";

    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $total = $sql_query->num_rows;

    if($total == 0){
        $erro[] = "O e-mail informado não existe na base de dados.";
    }

    if(count($erro) == 0){

        $novasenha = substr(md5(time()),0,6);
        $nscriptografada = md5(md5($novasenha));

        $sql_code = "UPDATE tbl_usuario 
                     SET senha = '$nscriptografada' 
                     WHERE email = '$email'";

        if($mysqli->query($sql_code)){
            $erro[] = "Senha alterada com sucesso! Nova senha: $novasenha";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-page">

        <div class="form">
            <?php if (!empty($erro)): ?>
                <?php foreach ($erro as $msg): ?>
                    <p style="color: red"><?= $msg ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <form class="login-form" method="POST" action="">
                <input value="<?= $_POST['email'] ?? '' ?>" placeholder="seu e-mail" type="text" name="email">
                <button value="Entrar" name="Entrar" type="submit">Enviar</button>

                </button>
            </form>
        </div>
    </div>
</body>
</html>