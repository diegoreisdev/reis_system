<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h1 class="text-primary pt-3 text-center"><?= $title ?></h1>
<section class="col-md-6 offset-md-3 mt-3">
    <!-- ALERTA DE CLIENTE NÃO CADASTRADO -->
    <?php if ($this->session->flashdata("erro")) : ?>
        <p class="alert alert-danger text-center"><?= $this->session->flashdata("erro") ?></p>
    <?php endif; ?>

    <form method="POST" action="<?= site_url('cliente/salvar_cliente') ?>" class="form-group">
        <label class="m-2 text-black">Nome do Cliente</label>
        <input name="nomeCliente" type="text" class="form-control form-control-sm nav-item mr-5" autofocus required>

        <label class="m-2">Categoria</label>
        <select name="categoria" class="form-control" required>
            <option></option>
            <option value="Grátis">Grátis</option>
            <option value="Normal">Normal</option>
            <option value="Prêmio">Prêmio</option>
        </select>
        <button class="btn btn-success mt-4 btn-md">Salvar Registro</button>
    </form>
</section>