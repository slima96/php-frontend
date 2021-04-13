<!DOCTYPE html>
<html lang="en">

<head>
  <title>COMPRA CERTA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
  <script>
    function verificaSenha() {
      var x = document.forms["formCadastro"]["senha"].value;
      var y = document.forms["formCadastro"]["confirme"].value;
      if (x != y) {
        alert("Atenção, sua senha não confere ");
        return false;
      }
      return true;
    }
  </script>
</head>

<body>
  <?php include 'Navbar.html'; ?>

  <div class="container">
    <h2>FICHA DE CADASTRO</h2>
    <form name="formCadastro" action="Principal.html" onsubmit="return verificaSenha();">

      <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="number" class="form-control" id="cpf" placeholder="Informe o cpf" name="cpf" required>
      </div>
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Informe o nome" name="nome" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Informe o email" name="email" required>
      </div>

      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" placeholder="Informe a senha" name="senha" required>
      </div>

      <div class="form-group">
        <label for="Confirme">Confirmação da Senha:</label>
        <input type="password" class="form-control" id="confirme" placeholder="Confirme sua senha" name="confirme" required>
      </div>

      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Deseja receber informações sobre promoções?</label>
      </div>

      <button type="submit" class="btn btn-default">Cadastrar</button>
    </form>
  </div>

  <?php include 'Footer.html'; ?>

</body>

</html>