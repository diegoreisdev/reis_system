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
                    <div style="display: flex; justify-content: center;">
                        <form class="form-group p-1" method="POST" action="<?= site_url('usuario/editar_usuario') ?>">
                            <input name="id" type="text" value="" hidden>
                            <button class="btn btn-sm btn-success">Editar</button>

                        </form>
                        <form class="form-group p-1" method="POST" action="<?= site_url('usuario/deletar/'.$item['id']) ?>">
                            <input name="id" type="text" value="" hidden>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir o item selecionado?')">Excluir</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>