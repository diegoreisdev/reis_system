<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h1 class="text-primary pt-3 text-center "><?= $title ?></h1>
<table class="table table-striped text-center" ml-3>
    <!-- ALERTA DE NOVO USUÁRIO -->
    <?php if ($this->session->flashdata("novo")) : ?>
        <p class="alert alert-success text-center container" role="alert"> <?= $this->session->flashdata("novo") ?></p>
    <?php endif; ?>

    <!-- ALERTA DE USUÁRIO EDITADO -->
    <?php if ($this->session->flashdata("editado")) : ?>
        <p class="alert alert-success text-center container" role="alert"> <?= $this->session->flashdata("editado") ?></p>
    <?php endif; ?>

    <!-- ALERTA DE USUÁRIO EXCLUIDO -->
    <?php if ($this->session->flashdata("excluido")) : ?>
        <p class="alert alert-danger text-center container" role="alert"> <?= $this->session->flashdata("excluido") ?></p>
    <?php endif; ?>

    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Login</th>
            <?php if ($_SESSION['usuario_logado']['perfil'] != 'Usuário') : ?>
                <th>Perfil</th>
                <th>Senha</th>
                <th>Ações</th>
            <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($usuario as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nome'] ?></td>
                <td><?= $item['login'] ?></td>
                <?php if ($_SESSION['usuario_logado']['perfil'] != 'Usuário') : ?>
                    <td><?= $item['perfil'] ?></td>
                    <td><?= $item['senha'] ?></td>
                    <td>
                        <a class="btn btn-sm btn-success" href="<?= site_url('usuario/editar_usuario/' . $item['id']) ?>">Editar</a>
                        <a onclick="return confirm('Tem certeza que deseja excluir o item selecionado?')" class="btn btn-sm btn-danger" href="<?= site_url('usuario/deletar/' . $item['id']) ?>">Excluir</a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>