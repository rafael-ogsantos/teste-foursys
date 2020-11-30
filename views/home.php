<div class="container">
  <h2 class="title">Página inicial</h2>
  <div class="panel">

    <div style="display: flex; justify-content: space-between; align-items: baseline">
      <h3 class="panel-title">Cadastro de usuário</h3>
      <a href="/users" class="users-list">Lista de usuarios</a>
    </div>
    <form action="/users/store" method="post" autocomplete="off">
      <div class="row">
        <div class="col-md-6">
          <input type="text" name="nome" id="nome" placeholder="Nome">
        </div>
        <div class="col-md-6">
          <input type="text" name="cpf" id="cpf" placeholder="CPF">
        </div>
        <div class="col-md-6">
          <input type="date" name="nascimento" id="nascimento" placeholder="Data de nascimento">
        </div>
        <div class="col-md-6">
          <input type="text" name="email" id="email" placeholder="Email">
        </div>
        <div class="col-md-6">
          <input type="text" name="telefone" id="telefone" placeholder="Telefone">
        </div>
        <div class="col-md-6">
          <input type="text" name="endereco" id="endereco" placeholder="Endereço">
        </div>
        <div class="col-md-6">
          <select id="state" name="estado" placeholder="Estado"></select>
        </div>
        <div class="col-md-6">
          <select id="city" name="cidade" placeholder="Cidade"></select>
        </div>
      </div>
      <button type="submit" class="btn-submit">Cadastrar</button>
    </form>
  </div>
</div>

