<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- PÁGINA PARA EDIÇÃO DO USUÁRIO -->

<h1 class="text-primary text-center pt-3">Editar Usuário</h1>
<section class="col-md-6 offset-md-3 mt-3">
    <form method="POST" action="db_editar_usuario.php" class="form-group">

        <input hidden name="id" type="text" class="form-control form-control-sm nav-item mr-5">

        <label class="m-2 text-black">Nome Completo</label>
        <input name="nome" type="text" class="form-control form-control-sm nav-item mr-5">

        <label class="m-2 text-black">Login</label>
        <input name="login" type="text" class=" form-control form-control-sm nav-item mr-5">

        <label class="m-2 text-black">Senha</label>
        <input name="senha" type="password" class=" form-control form-control-sm nav-item mr-5">

        <div class="form-group">
            <label>Perfil</label>
            <select name="perfil" class="form-control" required>
                <option></option>
                <option value="Administrador">Administrador</option>
                <option value="Usuário">Usuário</option>
            </select>
        </div>

        <button class="btn btn-success mt-4 btn-md">Salvar</button>

    </form>
</section>