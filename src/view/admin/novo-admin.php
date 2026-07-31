<!doctype html>
<html lang="pt-br">

<head>
    <?php require_once __DIR__ . '/../templates/template-head.php'; ?>
    <title>Novo Administrador</title>
</head>

<body class="container pt-5">

<?php require_once __DIR__ . '/../templates/template-menu.php'; ?>

<div class="mt-5">
<h2>
    Cadastrar usuário administrativo
</h2>

<form method="POST"
      action="<?= BASE_URL ?>/admin/cadastrar">

    <div class="mb-3">

        <label class="form-label">
            Usuário
        </label>

        <input class="form-control"
               name="usuario"
               required>

    </div>
    <div class="mb-3">
        <label class="form-label">
            Senha
        </label>
        <input class="form-control"
               type="password"
               name="senha"
               required>
    </div>
    <div class="mb-3">

        <label class="form-label">
            Nível
        </label>

        <select class="form-select"
                name="nivel">

            <option value="MODERADOR">
                Moderador
            </option>

            <option value="ADMIN">
                Administrador
            </option>

        </select>

    </div>

    <button class="btn btn-success">
        Cadastrar
    </button>

    <input type="hidden" name="csrf" value="<?= $_SESSION['csrf'] ?>">
</form>


</body>

</html>