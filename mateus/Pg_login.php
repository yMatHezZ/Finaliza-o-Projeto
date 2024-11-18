<?php
include_once('config.php');

// Verifica se houve um envio de formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recebe os dados do formulário
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  // Validação básica (adicione mais validações conforme necessário)
  if (empty($email) || empty($senha)) {
    echo "Por favor, preencha todos os campos.";
  } else {
    // Consulta ao banco de dados (ajuste a consulta para sua estrutura)
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
      // Login válido, redireciona para a página adm.php
      header("Location: PG_PRINCIPAL.php");
    } else {
      echo "Email ou senha inválidos.";
    }
  }
}

// Formulário HTML
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
    <link rel="stylesheet" type="text/css" href="pg_login.css" media="screen" />
</head>
<body>
    <div class="logo"></div>
  <div1 class="div2">Login</div1>
    <form action="Pg_login.php" method="post">
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>



        <button type="submit" >Entrar </button>
    </form>

</body>
</html>
