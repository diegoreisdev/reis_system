<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- FORMULÁRIO DE LOGIN -->
<div class="wrapper fadeInDown">
    <div id="formContent">
        <form method="POST" action="<?= site_url('login/validar/') ?>" id="login">
            <input type="text" id="login" class="fadeIn second mt-4" name="login" placeholder="Login">
            <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha">
            <input type="submit" class="fadeIn fourth" value="Entrar">
        </form>
    </div>
</div>