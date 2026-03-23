<?php
require __DIR__ . "/inc/funcoes.php";

$id = trim((string)($_GET["id"] ?? ""));
if ($id === "") {
    die("ID inválido.");
}

$alunos = lerAlunos();

$alunoEncontrado = null;
foreach ($alunos as $aluno) {
    if ((string)($aluno["id"] ?? "") === $id) {
        $alunoEncontrado = $aluno;
        break;
    }
}

if (!$alunoEncontrado) {
    die("Aluno não encontrado.");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Aluno</title>

  <style>
    * {
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      margin: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
        background: 
    url("png.jpg") no-repeat center center;
    background-size: cover;
    }

    .container {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      width: 100%;
      max-width: 420px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    label {
      font-weight: bold;
      color: #555;
      display: block;
      margin-top: 10px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 8px;
      border: 1px solid #ccc;
      transition: 0.3s;
    }

    input:focus {
      border-color: #4facfe;
      outline: none;
      box-shadow: 0 0 6px rgba(79,172,254,0.4);
    }

    button {
      width: 100%;
      margin-top: 20px;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #4facfe;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #007bff;
    }

    .voltar {
      display: block;
      text-align: center;
      margin-top: 15px;
      text-decoration: none;
      color: #4facfe;
      font-weight: bold;
    }

    .voltar:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Editar Aluno</h1>

  <form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars((string)$alunoEncontrado["id"]) ?>">

    <label>Nome:</label>
    <input
      type="text"
      name="nome"
      required
      minlength="3"
      value="<?= htmlspecialchars((string)$alunoEncontrado["nome"]) ?>"
    >

    <label>Nota 1:</label>
    <input
      type="number"
      name="nota1"
      step="0.1"
      min="0"
      max="10"
      required
      value="<?= htmlspecialchars((string)$alunoEncontrado["nota1"]) ?>"
    >

    <label>Nota 2:</label>
    <input
      type="number"
      name="nota2"
      step="0.1"
      min="0"
      max="10"
      required
      value="<?= htmlspecialchars((string)$alunoEncontrado["nota2"]) ?>"
    >

    <button type="submit">Salvar alterações</button>
  </form>

  <a class="voltar" href="lista.php">← Voltar para a lista</a>
</div>

</body>
</html>