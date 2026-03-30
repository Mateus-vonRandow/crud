<?php

include 'conexao.php';

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit(); 
    } else {
        echo "Erro ao deletar: " . $conn->error;
    }
} else {
    header("Location: index.php");
    exit();
}
?>