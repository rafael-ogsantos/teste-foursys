<div class="container">
  <h2 class="title">Detalhes</h2>
  <div class="panel">
    <div style="display: flex; justify-content: space-between; align-items: baseline">
      <h3 class="panel-title"></h3>
      <a href="/users" class="users-list">Editar usuário</a>
    </div>
    <form action="/users/update/<?= $user->id ?>" method="post" autocomplete="off">
      <div class="row">
        <div class="col-md-6">
          <input type="text" name="nome" id="nome" value="<?=$user->nome?>" placeholder="Nome">
        </div>
        <div class="col-md-6">
          <input type="text" name="cpf" id="cpf" value="<?=$user->cpf?>" placeholder="CPF">
        </div>
        <div class="col-md-6">
          <input type="date" name="nascimento" value="<?=$user->nascimento?>" id="nascimento" placeholder="Data de nascimento">
        </div>
        <div class="col-md-6">
          <input type="text" name="email" value="<?=$user->email?>" id="email" placeholder="Email">
        </div>
        <div class="col-md-6">
          <input type="text" name="telefone" value="<?=$user->telefone?>" id="telefone" placeholder="Telefone">
        </div>
        <div class="col-md-6">
          <input type="text" name="endereco" value="<?=$user->endereco?>" id="endereco" placeholder="Endereço">
        </div>
        <div class="col-md-6">
          <input type="text" name="cidade" value="<?=$user->cidade?>" id="cidade" placeholder="Cidade">
        </div>
        <div class="col-md-6">
          <input type="text" name="estado" value="<?=$user->estado?>" id="estado" placeholder="Estado">
        </div>
      </div>

      <button type="submit" class="btn-submit">Atualizar</button>
    </form>
  </div>
</div>