<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$curso = $_POST['curso'];

$sql = "INSERT INTO usuarios (nome, email, curso) values('$nome','$email','$curso')";
$salvar = mysqli_query ($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Cadastro</title>
</head>
<body>
    <div class="container" >
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>
        </nav>
        <section>
            <h1>Confirmação de Cadastro</h1>
            <hr><br><br>

            <?php

            if($linhas == 1) {
                print "Cadastro efetuado com sucesso!";
            }else{
                print "Cadastro não efetuado. <br>Já existe um usuário com este e-mail!";
            }

            ?>

        </section>
    </div>
</body>
</html>