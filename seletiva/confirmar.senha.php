<?php

include_once("action.php");
#fazendo a ligação do banco de dados com o php
$login = $_POST["login"];
$senha = $_POST["senha"];
$re_senha = $_POST["re_senha"];
#cria a variavel para a tabela login do mysql ter o valores determinados.
$sql = "insert into login (login, senha, re_senha) values ('$login', '$senha', '$re_senha')";
if($senha == $re_senha){
	echo "salvo com sucesso"; 
}
else {
echo "senha incorreta";
}
#vai gravar no banco dados.
$salvar = mysqli_query($conexao, $sql);
#fecha a conexão
mysqli_close($conexao);


?>
