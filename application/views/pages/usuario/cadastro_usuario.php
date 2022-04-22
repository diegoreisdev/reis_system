<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<section class="col-md-6 offset-md-3 mt-3">
    <form method="POST" action="db_adicionar_usuario.php" class="form-group">

        <label class="m-2 text-black">Nome Completo</label>
        <input name="nome" type="text" class="form-control form-control-sm nav-item mr-5" required autofocus>

        <label class="m-2 text-black">Login</label>
        <input name="login" type="text" class="form-control form-control-sm nav-item mr-5" required>

        <label class="m-2 text-black">Senha</label>
        <input name="senha" type="password" class="form-control form-control-sm nav-item mr-5" required>

        <div class="form-group">
            <label>Perfil</label>
            <select name="perfil" class="form-control" required>
                <option>Selecione</option>
                <option value="Administrador">Administrador</option>
                <option value="Usuário">Usuário</option>
            </select>
        </div>

        <button class="btn btn-success mt-4 btn-md">Salvar Registro</button>

    </form>
</section>