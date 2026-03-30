<?php

include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data_nascimento = $_POST['data_nascimento'];


$sql = "INSERT INTO usuarios (nome, sobrenome, data_nascimento) VALUES ('$nome', '$sobrenome', '$data_nascimento')";

if ($conn->query($sql) === TRUE) {
    
    echo "<h2>Usuário cadastrado com sucesso!</h2>";
    echo "<a href='cadastrar.php'>Voltar e cadastrar outro</a>";
} else {
   
    echo "Erro ao cadastrar: " . $conn->error;
}
?>