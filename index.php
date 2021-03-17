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
            <h1>Cadastro de Usuários</h1>
            <hr><br><br>
            <form method="post" action="processa.php">

                Nome<br>
                <input type="text" name="nome" class="campo" placeholder="Nome completo" maxlength="40" required autofocus> <br>
                E-mail<br>
                <input type="email" name="email" class="campo" placeholder="Digite seu e-mail" maxlength="50" required> <br>
                Curso<br>
                <input type="text" name="curso" class="campo" placeholder="Ex:Engenharia" maxlength="40" required> <br>
                <br><br>

                <input type="submit" value="Salvar"class="btn">
                <input type="reset" value="Limpar" class="btn">
            </form>
            <img src="assets/img.jpg" alt="Usúario" class="imgbody">
        </section>
    </div>
</body>
</html>