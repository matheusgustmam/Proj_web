<?php
/** @var \model\Cliente[] $clientes */
/** @var \model\Cliente $cliente */
$rota_clientes = BASE_URL . "/clientes";
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
        <th>#</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Comentario</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($clientes as $cliente) : ?>
        <tr>
            <td><?= $cliente->getId() ?></td>
            <td><?= htmlspecialchars($cliente->getNome()) ?></td>
            <td><?= htmlspecialchars($cliente->getEmail()) ?></td>
            <td><?= htmlspecialchars($cliente->getTextinho()) ?></td>
            <td>
                <a class="btn btn-outline-primary"
                   href="<?= $rota_clientes . '/' . $cliente->getId() . '/editar' ?>">
                    <i class="bi bi-pencil-fill"></i>
               </a>
                <a class="btn btn-outline-secondary" href='<?= $rota_clientes . '/' . $cliente->getId() ?>'>
                    <i class="bi bi-eye-fill"></i>
                 </a>
                <form onsubmit="confirmarRemocao('Deseja remover o Cliente <?= htmlspecialchars($cliente->getNome()) ?>?', event)"
                      action='<?= $rota_clientes . '/' . $cliente->getId() . '/remover' ?>' method='POST'>
                    <button class="btn btn-outline-danger" type='submit'>
                        <i class="bi bi-trash2-fill"></i>
                    </button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>



</div>




<?php require_once "templates/template-rodape.php" ?>
</body>
</html>