<?php
include "C:/xampp/htdocs/loginsite/classe/conexao.php";

if (!isset($_SESSION)) { 
    session_start();
}

$erro = [];

if (isset($_POST['email']) && strlen($_POST['email']) > 0) {

    // Protege contra SQL Injection
    $email = $mysqli->escape_string($_POST['email']);

    // Criptografa a senha digitada usando md5 duas vezes
    // (deve ser igual ao padrão salvo no banco)
    $senha = md5(md5($_POST['senha']));

    // Realizando a conexão com o BANCO
    $sql_code = "SELECT senha, codigo FROM tbl_usuario WHERE email = '$email'";

    // Executando Código
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $total = $sql_query->num_rows;

    if ($total == 1) {

        $dado = $sql_query->fetch_assoc();

        if ($dado['senha'] == $senha) {
            $_SESSION['usuario'] = $dado['codigo'];
            $_SESSION['email'] = $email;
        } else {
            $erro[] = "Senha incorreta";
        }

    } else {
        $erro[] = "Este email não pertence a nenhum usuário";
    }

    // Pagina de redirecionamento
    if (count($erro) == 0) {
        echo "<script>alert('Login efetuado com sucesso'); location.href='home/index.php';</script>";
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
                <input value="<?= $_SESSION['email'] ?? '' ?>" name="email" placeholder="e-mail" type="text" required>
                <input name="senha" placeholder="senha" type="password" required>
                
                <p>Não registrado? <a href="esqueceusenha.php">mudar senha</a></p>
                
                <button value="Entrar" type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>