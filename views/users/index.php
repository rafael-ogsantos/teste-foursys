<div class="container">
  <h2 class="title">Lista de usuários</h2>
  <div class="panel">
    <div style="display: flex; justify-content: space-between; align-items: baseline">
      <h3 class="panel-title"></h3>
      <a href="/" class="users-list">
        <?php if(count($users) > 0):?>
          Voltar
        <?php else: ?>
          Cadastrar novo usuário
        <?php endif ?>
      </a>
    </div>

    <?php if(count($users) > 0): ?>
      <table style="width:100%" class="table-users">
        <tr>
          <th>Nome</th>
          <th style="width: 120px;">CPF</th>
          <th style="width: 200px;">Data de nascimento</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>Endereço</th>
          <th>Cidade</th>
          <th>Estado</th>
        </tr>
        <?php foreach($users as $user) :?>
          <tr>
            <td><?= $user->nome ?></td>
            <td><?= $user->cpf ?></td>
            <td><?= $user->nascimento ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->telefone ?></td>
            <td><?= $user->endereco ?></td>
            <td><?= $user->cidade ?></td>
            <td><?= $user->estado ?></td>
            <td style="background-color: rgb(111, 201, 111) !important; padding: 2px !important">
              <a href="/user/<?= $user->id ?>"><i class="fas fa-eye"></i></a>
            </td>
            <td style="background-color: rgb(202, 224, 100); padding: 2px !important">
              <a href="/user/<?= $user->id ?>/edit"><i class="far fa-edit"></i></a>
            </td>
            <td style="background-color: rgb(228, 85, 85) !important; padding: 2px !important">
              <a href="/user/<?= $user->id?>/delete"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
      <?php else: ?>
        <h2 class="alert-empty-user">Não há usuários para mostrar</h2>      
      <?php endif; ?>
  </div>
</div>