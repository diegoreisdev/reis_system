<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h1 class="text-primary pt-3 text-center ">Relatório de Clientes</h1>
<table class="table table-striped text-center" ml-3>

    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($cliente as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nomeCliente'] ?></td>
                <td><?= $item['categoria'] ?></td>
                <td>
                    <a class="btn btn-sm btn-success" href="<?= site_url('cliente/editar_cliente/'.$item['id']) ?>">Editar</a>
                    <a onclick="return confirm('Tem certeza que deseja excluir o item selecionado?')" class="btn btn-sm btn-danger" href="<?= site_url('cliente/deletar/'.$item['id']) ?>">Excluir</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>