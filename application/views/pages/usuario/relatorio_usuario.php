<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h1 class="text-primary pt-3 text-center ">Relatório de Usuários</h1>
<table class="table table-striped text-center" ml-3>
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Perfil</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($usuario as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nome'] ?></td>
                <td><?= $item['login'] ?></td>
                <td><?= $item['perfil'] ?></td>
                <td><?= $item['senha'] ?></td>

                <td>
                    <a class="btn btn-sm btn-success" href="<?= site_url('usuario/editar_usuario/' . $item['id']) ?>">Editar</a>
                    <a onclick="return confirm('Tem certeza que deseja excluir o item selecionado?')" class="btn btn-sm btn-danger" href="<?= site_url('usuario/deletar/' . $item['id']) ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>