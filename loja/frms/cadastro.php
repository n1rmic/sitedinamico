
<?php

include('../include/cabecalho.php');
include('../include/menu.php');
include('../conexao/conexao.php');
?>
<div class="container">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Sou maior de idade</label>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>