<div class="container">
  <h2 class="title">Detalhes do usuário</h2>
  <div class="panel">
    <table class="table-user">
    <tr>
      <th>Nome:</th>
      <td><?= $user->nome ?></td>
    </tr>
    <tr>
      <th>CPF:</th>
      <td><?= $user->cpf ?></td>
    </tr>
    <tr>
      <th>Data de nascimento:</th>
      <td><?= $user->nascimento ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?= $user->email ?></td>
    </tr>
    <tr>
      <th>Telefone:</th>
      <td><?= $user->telefone ?></td>
    </tr>
    <tr>
      <th>Endereço:</th>
      <td><?= $user->endereco ?></td>
    </tr>
    <tr>
      <th>Cidade:</th>
      <td><?= $user->cidade ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?= $user->estado ?></td>
    </tr>
  </table>
  </div>
</div>
