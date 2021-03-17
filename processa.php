<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$curso = $_POST['curso'];

$sql = "INSERT INTO usuarios (nome, email, curso) values('$nome','$email','$curso')";
$salvar = mysqli_query ($conexao, $sql);

mysqli_close($conexao);

?>