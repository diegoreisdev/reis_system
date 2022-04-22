<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- PÁGINA PARA EDIÇÃO DO CLIENTE -->

<h1 class="text-primary pt-3 text-center">Editar Cliente</h1>
<section class="col-md-6 offset-md-3 mt-3">
    <form method="POST" action="db_editar_cliente.php" class="form-group">
        <input hidden name="id" type="text" class="form-control form-control-sm nav-item mr-5">

        <label class="m-2 text-black">Nome do Cliente</label>
        <input name="nomeCliente" type="text" class="form-control form-control-sm nav-item mr-5 " required>

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