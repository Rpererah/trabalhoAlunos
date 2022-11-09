<?php
$usuario=$_POST["usuario"];
$senha=$_POST["senha"];
echo $usuario;
echo $senha;


require_once('conexao.php');

$query=$conexao->prepare("INSERT INTO teste(usuario, senha) VALUES(?,?)");
//prepare = investiga antes para saber se tem sql ijection

$query->bindParam(1,$usuario);
$query->bindParam(2,$senha);
$query->execute();

?>