<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/assets/css/global.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/loginAndRegister.css') ?>">

    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <form action="">
        <h1>Register</h1>

        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" name="name">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email">
        </div>

        <div class="form-group">
          <label for="password">Senha</label>
          <input type="password" name="password">
        </div>

        <button type="submit">
          Registrar-se
        </button>

        <div class="register">
          Já é registrado? Faça login <a href="login">aqui</a>
        </div>
      </form>
    </div>
  </body>
</html>