<?php

session_start();

include 'conexao.php';

$email_digitado = $_POST['email'];
$senha_digitada = $_POST['senha'];

$sql = "SELECT * FROM administradores WHERE email = '$email_digitado' LIMIT 1";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    
    $admin = $resultado->fetch_assoc();
    
    if (password_verify($senha_digitada, $admin['senha'])) {
        
        $_SESSION['logado'] = true;
        $_SESSION['email_usuario'] = $admin['email'];
        
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Senha incorreta!'); window.location.href='login.php';</script>";
    }
} else {
    echo "<script>alert('E-mail não encontrado!'); window.location.href='login.php';</script>";
}
?>