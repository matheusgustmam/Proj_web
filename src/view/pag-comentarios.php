<?php

/** @var \model\Cliente[] $clientes */
/** @var \model\Cliente $cliente */

$rota_clientes = BASE_URL . "/clientes";


$usuarioAdmin = isset($_SESSION['admin']);

$nivelAdmin = $_SESSION['admin']['nivel'] ?? null;


$podeEditar = $usuarioAdmin &&
        in_array($nivelAdmin, ['ADMIN','MODERADOR']);

?>

<!doctype html>
<html lang="pt-br">
<head>
    <?php require_once 'templates/template-head.php' ?>
    <title>Comentarios</title>
</head>
<body class="container pt-5">

<?php require_once "templates/template-menu.php" ?>

<div class="mt-3">

    <div class="row align-items-center">
        <div class="col-lg-9 col-md-6 col-sm-12">
            <h1>Lista de Comentarios</h1>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-end">
            <a class="btn btn-primary" href="<?= BASE_URL . '/clientes/novo' ?>">Comentar</a>
        </div>
    </div>

<table id="tabela_clientes" class="table table-striped mt-3">
    <thead>
    <tr class="table-dark">
        <th>Nome</th>
        <th>Email</th>
        <th>Comentario</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($clientes as $cliente) : ?>
        <tr>
            <td><?= htmlspecialchars($cliente->getNome()) ?></td>
            <td><?= htmlspecialchars($cliente->getEmail()) ?></td>
            <td><?= htmlspecialchars($cliente->getTextinho()) ?></td>
            <td>
                <?php if($podeEditar): ?>
                    <a class="btn btn-outline-primary"
                       href="<?= $rota_clientes . '/' . $cliente->getId() . '/editar' ?>">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                    <a class="btn btn-outline-secondary"
                       href="<?= $rota_clientes . '/' . $cliente->getId() ?>">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                    <form class="d-inline"
                          action="<?= $rota_clientes . '/' . $cliente->getId() . '/remover' ?>"
                          method="POST"
                          onsubmit="return confirmarRemocao('Deseja remover o comentário de <?= htmlspecialchars($cliente->getNome()) ?>?');">

                        <input type="hidden"
                               name="csrf"
                               value="<?= htmlspecialchars($_SESSION['csrf']) ?>">

                        <button class="btn btn-outline-danger" type="submit">
                            <i class="bi bi-trash2-fill"></i>
                        </button>
                    </form>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</div>

<?php require_once "templates/template-rodape.php" ?>
</body>
</html>