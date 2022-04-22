<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<section class="col-md-6 offset-md-3 mt-3">
    <form method="POST" action="<?= site_url('cliente/salvar_cliente') ?>" class="form-group">

        <label class="m-2 text-black">Nome do Cliente</label>
        <input name="nomeCliente" type="text" class="form-control form-control-sm nav-item mr-5 ">

        <label class="m-2">Categoria</label>
        <select name="categoria" class="form-control">
            <option>Selecione</option>
            <option value="Grátis">Grátis</option>
            <option value="Normal">Normal</option>
            <option value="Prêmio">Prêmio</option>
        </select>
        <button class="btn btn-success mt-4 btn-md">Salvar Registro</button>
    </form>

</section>