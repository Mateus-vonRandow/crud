<?php

include 'conexao.php';


$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data_nascimento = $_POST['data_nascimento'];


$sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', data_nascimento = '$data_nascimento' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Erro ao atualizar: " . $conn->error;
}
?>