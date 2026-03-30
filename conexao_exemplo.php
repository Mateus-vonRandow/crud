<?php
// Renomeie este arquivo para conexao.php e coloque seus dados
$servidor = "localhost";
$usuario = "seu_usuario_aqui";
$senha = "sua_senha_aqui";
$banco = "meu_crud";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
?>