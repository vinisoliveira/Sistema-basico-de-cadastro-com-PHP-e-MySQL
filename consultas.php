<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * FROM usuarios WHERE curso like '%$filtro%' ";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);


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
            <h1>Consultas</h1>
            <hr><br><br>
            <form method="get" action="">
                Filtrar por profissão: <input type="text" name="filtro" class="campo" required>
                <input type="submit" value="Pesquisar" class="btn">
            </form>

            <?php

            print "Resultado da Pesquisa com a palavra <strong>$filtro</strong>.<br><br>";

            print "$registros registros encontrados.";
            print "<br><br>";

            while($exibirRegistros = mysqli_fetch_array($consulta)){
                
                $codigo = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                $email = $exibirRegistros[2];
                $curso = $exibirRegistros[3];

                print "<article>";

                print "$codigo<br>";
                print "$nome<br>";
                print "$email<br>";
                print "$curso";

                print "</article>";
            }
            mysqli_close($conexao);

            ?>

        </section>
    </div>
</body>
</html>