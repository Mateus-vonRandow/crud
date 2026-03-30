<?php

session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="mt-4">Lista de Usuários</h1>
      <a href="sair.php" class="btn btn-outline-danger mb-2 mt-4 float-end">Sair do Sistema</a>

      <a href="cadastrar.php" class="btn btn-success mt-4 mb-2">Cadastrar Usuário</a>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>

        <?php

        include 'conexao.php';

        $sql = "SELECT * FROM usuarios";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            
            while($linha = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha['id'] . "</td>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['sobrenome'] . "</td>";
                echo "<td>" . $linha['data_nascimento'] . "</td>";
                
                echo "<td>
                        <a href='editar.php?id=" . $linha['id'] . "' class='btn btn-warning btn-sm'>Editar</a>
                        <a href='deletar.php?id=" . $linha['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Tem certeza que deseja apagar este usuário?');\">Deletar</a>
                      </td>";
                echo "</tr>";
            }
        } else {  
            echo "<tr><td colspan='5' class='text-center'>Nenhum usuário encontrado.</td></tr>";
        }
        ?>

    </tbody>

      </table>

    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>