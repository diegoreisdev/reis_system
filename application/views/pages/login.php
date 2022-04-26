<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- FORMULÁRIO DE LOGIN -->
<div class="wrapper fadeInDown">
    <div id="formContent">
        <form method="POST" action="<?= site_url('login/validar/') ?>" id="login">
            <input type="email" id="login" class="fadeIn second mt-4" name="login" placeholder="Login" required>
            <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha" required>
            <?php if (isset($erro)) : ?>
                <p class="text-danger py-1"><?= $erro ?></p>
            <?php endif; ?>
            
            <input type="submit" class="fadeIn fourth" value="Entrar">
        </form>
    </div>
</div>