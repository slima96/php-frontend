<!DOCTYPE html>
<html lang="en">

<body>

  <?php include 'Navbar.html'; ?>

  <div class="container mt-3">
    <h2>LISTA DE PEDIDOS</h2>
    <p>Produto de Limpeza Veja + Brilho</p>
    <div class="media border p-3 ">
      <img src="veja.jfif" alt="John Doe" class="mr-3 mt-3 rounded-circle margin-bottom" style="width:60px;">
      <div class="media-body d-flex">
        <input type="number" class="form-control margin-bottom" placeholder="quantidade" style="width: 180px;">
      </div>
    </div>
    <p>Água sanitária Qboa Super Alvejante </p>
    <div class="media border p-3">
      <img src="qboa.jfif" alt="John Doe" class="mr-3 mt-3 rounded-circle margin-bottom" style="width:60px;">
      <div class="media-body d-flex">
        <input type="number" class="form-control margin-bottom" placeholder="quantidade" style="width: 180px;">
      </div>
    </div>
  </div>
  <div class="container">
    <h2>DADOS DE PAGAMENTOS</h2>
    <form name="formCadastro" action="Principal.html" onsubmit="return verificaSenha();">

      <div class="form-group">
        <label for="cpf">Número do Cartão:</label>
        <input type="number" class="form-control" id="cpf" placeholder="Informe o número" name="cpf" required>
      </div>
      <div class="form-group">
        <label for="nome">Nome do Titular:</label>
        <input type="text" class="form-control" id="nome" placeholder="Informe o nom do titular" name="nome" required>
      </div>

      <div class="form-group">
        <label for="email">Validade do Cartão:</label>
        <input type="date" value="2020/12/20" class="form-control" id="email" placeholder="Informe o data de validade" name="email" required>
      </div>

      <div class="form-group">
        <label for="senha">Código de segurança:</label>
        <input type="number" class="form-control" id="senha" placeholder="Informe o código" name="senha" required>
      </div>
    </form>
  </div>

  <div class="container">
    <h2>ENDEREÇO DE ENTREGA</h2>
    <form name="formCadastro" action="Realizado.html" onsubmit="return verificaSenha();">

      <div class="form-group">
        <label for="cpf">Logradouro</label>
        <input type="text" class="form-control" id="cpf" placeholder="Informe Endereço" name="cpf" required>
      </div>
      <div class="form-group">
        <label for="nome">Bairro</label>
        <input type="text" class="form-control" id="nome" placeholder="Informe o Bairro" name="nome" required>
      </div>
      <div class="form-group">
        <label for="cpf">CEP</label>
        <input type="number" class="form-control" id="cpf" placeholder="Informe o CEP" name="cpf" required>
      </div>
      <div class="form-group">
        <label for="nome">Cidade</label>
        <input type="text" class="form-control" id="nome" placeholder="Informe a Cidade" name="nome" required>
      </div>
      <div class="form-group">
        <label for="nome">Estado</label>
        <input type="text" class="form-control" id="nome" placeholder="Informe o Estado" name="nome" required>
      </div>

      <button type="submit" class="btn btn-default">Finalizar Compra</button>
    </form>
  </div>

  <?php include 'Footer.html'; ?>

</body>

</html>