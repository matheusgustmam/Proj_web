<?php
/** @var model\Cliente $cliente */
?>

<!doctype html>
<html lang="pt-br">

<head>
    <?php require_once 'templates/template-head.php'; ?>
    <title>Visualizar Comentário</title>
</head>

<body class="container pt-5">
<?php require_once "templates/template-menu.php"; ?>
<div class="card shadow mt-4">

    <div class="card-header bg-primary text-white">
        <h3>
            <i class="bi bi-eye-fill"></i>
            Comentário
        </h3>
    </div>
    <div class="card-body">
        <p>
            <strong>Nome:</strong>
            <?= htmlspecialchars($cliente->getNome()) ?>
        </p>
        <p>
            <strong>Email:</strong>
            <?= htmlspecialchars($cliente->getEmail()) ?>
        </p>
        <p>
            <strong>Comentário:</strong>
        </p>
        <div class="border rounded p-3 bg-light">
            <?= nl2br(htmlspecialchars($cliente->getTextinho())) ?>
        </div>
        <hr>
        <p>
            <strong>Criado em:</strong>
            <?= $cliente->getCreatedAt()
                ? $cliente->getCreatedAt()->format('d/m/Y H:i')
                : '-' ?>
        </p>
        <p>
            <strong>Alterado em:</strong>
            <?= $cliente->getUpdatedAt()
                ? $cliente->getUpdatedAt()->format('d/m/Y H:i')
                : '-' ?>
        </p>
    </div>
    <div class="card-footer">
        <a href="<?= BASE_URL ?>/clientes"
           class="btn btn-primary">
            Voltar
        </a>
    </div>

</div>
<?php require_once "templates/template-rodape.php"; ?>
</body>

</html>