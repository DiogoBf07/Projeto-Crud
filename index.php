<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de alunos</title>
  
<link rel="stylesheet" href="styles/style.css">

</head>
<body>
  
<div class="container">
    <h1>Cadastro de Aluno</h1>

    <form action="processa.php" method="POST" class="form">
        
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite o nome do aluno" required>
        </div>

        <div class="form-group">
            <label>Nota 1</label>
            <input type="number" step="0.1" name="nota1" placeholder="Ex: 8.5">
        </div>

        <div class="form-group">
            <label>Nota 2</label>
            <input type="number" step="0.1" name="nota2" placeholder="Ex: 9.0">
        </div>

        <button type="submit">Cadastrar</button>
    </form>

    <a href="lista.php" class="link">Ver alunos cadastrados</a>

</div>
</body>
</html>