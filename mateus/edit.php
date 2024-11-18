<?php
include_once('config.php');

// Verifica se o parâmetro 'email' foi enviado via GET
if (isset($_GET['email'])) {
    // Sanitiza o email para evitar injeção de SQL
    $email = mysqli_real_escape_string($conexao, $_GET['email']);

    // Prepara a consulta SQL utilizando prepared statements
    $sql = "SELECT * FROM usuarios WHERE email=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);

    // Executa a consulta
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Obtém os dados do usuário
            $user_data = $result->fetch_assoc();

            // Atribui os valores aos campos do formulário
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            // ... outros campos ...
        } else {
            echo "Usuário não encontrado.";
            exit;
        }
    } else {
        echo "Erro ao executar a consulta: " . $stmt->error;
        exit;
    }

    // Fecha o statement
    $stmt->close();
} else {
    header('Location: listadecliente.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="pg_cadast.css"> 
  <title>Cadastro de Usuários</title>
</head>
<body>
  <div class="logo"></div>
  <h1>Cadastro de Usuário</h1>
  <form action="listadecliente.php" method="post" onsubmit="limparFormulario()">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_nascimento" name="data_nascimento" required>

    <select id="tipo" name="tipo" required>
            <option value="" disabled selected>Selecione o tipo</option>
            <option value="0">0</option>
            <option value="1">1</option>
           
        </select>

    <button type="submit">Atualizar</button>
    <button type="button" onclick="window.location.href='Pg_login.php'"> Login</button>
  </form>
</body>
</html>

