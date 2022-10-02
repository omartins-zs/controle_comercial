<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="login-form">
    <h3>Tela de Login</h3>

    <?php get_msg('msgerro') ?>

    <form action="" method="post" name="form-login" id="form-login">
        <input type="email" name="login" id="login" value="" class="form-control" autocomplete="off" placeholder="Digite seu email" required>

        <input type="password" name="senha" id="senha" class="form-control" value="" autocomplete="off" placeholder="Digite sua senha" required>

        <button form="form-login" type="submit" class="btn btn-success btn-lg btn-block">Entrar</button>
    </form>

</div>