<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h1 class="text-primary pt-3 text-center"><?= $title ?></h1>
<section class="col-md-6 offset-md-3 mt-3">
    <form method="POST" action="<?= site_url('usuario/salvar_usuario') ?>" class="form-group">
        <?php if (!empty($erro)) : ?>
            <p class="text-danger py-1"><?= $erro ?></p>
        <?php endif; ?>
        <label class="m-2 text-black">Nome Completo</label>
        <input name="nome" type="text" class="form-control form-control-sm nav-item mr-5" required autofocus>

        <label class="m-2 text-black">Login</label>
        <input name="login" type="email" class="form-control form-control-sm nav-item mr-5" required>

        <label class="m-2 text-black">Senha</label>
        <input name="senha" type="password" class="form-control form-control-sm nav-item mr-5" required>

        <div class="form-group">
            <label>Perfil</label>
            <select name="perfil" class="form-control" required>
                <option></option>
                <option value="Administrador">Administrador</option>
                <option value="Usuário">Usuário</option>
            </select>
        </div>

        <button class="btn btn-success mt-4 btn-md">Salvar Registro</button>

    </form>
</section>