<!DOCTYPE html>
<html lang="en">

<body>
  <?php include 'Navbar.html'; ?>

  <div class="container">
    <h2>LOGIN</h2>
    <form action="Produtos.html" onsubmit="return entrarLogin();">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Informe o email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Senha:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Informe o senha" name="pwd">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Lembrar senha</label>
      </div>
      <div>
        <button type="submit" class="btn btn-default">Entrar</button>
        <a class="margin-10" href="Cadastro.html">Cadastre-se</a>
      </div>
    </form>
  </div>

  <?php include 'Footer.html'; ?>

</body>

</html>