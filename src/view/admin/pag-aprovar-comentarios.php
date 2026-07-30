<?php
/** @var \model\Cliente[] $clientes */

$rota_clientes = BASE_URL . "/clientes";
?>

<!doctype html>
<html lang="pt-br">
<head>
    <?php require_once __DIR__ . '/../templates/template-head.php'; ?>
    <title>Aprovar Comentários</title>
</head>

<body class="container pt-5">

<?php require_once __DIR__ . '/../templates/template-menu.php'; ?>

<div class="mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Comentários Pendentes</h2>

        <a href="<?= BASE_URL ?>/clientes" class="btn btn-primary">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
    </div>

    <?php if (empty($clientes)) : ?>

        <div class="alert alert-success">
            Não existem comentários pendentes.
        </div>

    <?php else : ?>

        <table class="table table-bordered table-striped table-hover align-middle">

            <thead class="table-dark">

            <tr>

                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Comentário</th>
                <th width="220">Ações</th>

            </tr>

            </thead>

            <tbody>

            <?php foreach ($clientes as $cliente): ?>

                <tr>

                    <td><?= $cliente->getId() ?></td>

                    <td><?= htmlspecialchars($cliente->getNome()) ?></td>

                    <td><?= htmlspecialchars($cliente->getEmail()) ?></td>

                    <td><?= nl2br(htmlspecialchars($cliente->getTextinho())) ?></td>

                    <td>

                        <div class="d-flex gap-2">

                            <form action="<?= BASE_URL ?>/clientes/<?= $cliente->getId() ?>/aprovar"
                                  method="POST">

                                <button class="btn btn-success">

                                    <i class="bi bi-check-circle-fill"></i>

                                    Aprovar

                                </button>

                            </form>

                            <form action="<?= BASE_URL ?>/clientes/<?= $cliente->getId() ?>/rejeitar"
                                  method="POST"
                                  onsubmit="return confirm('Deseja realmente rejeitar este comentário?')">

                                <button class="btn btn-danger">

                                    <i class="bi bi-x-circle-fill"></i>

                                    Rejeitar

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    <?php endif; ?>

</div>

<?php require_once __DIR__ . '/../templates/template-rodape.php'; ?>

</body>
</html>