<!doctype html>
<html lang="pt-br">

<head>
    <?php require_once __DIR__ . '/../templates/template-head.php'; ?>
    <title>Mini Jardins</title>
</head>

<body class="container pt-5">
<?php require_once __DIR__ . '/../templates/template-menu.php'; ?>
<div class="mt-5">

    <h1 class="text-success">
        <i class="bi bi-flower1"></i>
        Mini Jardins
    </h1>

    <div class="card shadow mt-4">

        <img src="<?= BASE_URL ?>/assets/img/mini-jardins.jpg"
             class="card-img-top"
             alt="Mini Jardins">
        <div class="card-body">
            <h3>
                Criação de Mini Jardins
            </h3>
            <p>
                Desenvolvemos mini jardins personalizados,
                trazendo beleza, natureza e harmonia para
                ambientes internos e externos.
            </p>
            <p>
                Utilizamos plantas adequadas para cada espaço,
                criando soluções sustentáveis e decorativas.
            </p>
            <a href="<?= BASE_URL ?>/clientes"
               class="btn btn-success">
                Solicitar orçamento
            </a>

        </div>
    </div>
</div>
<?php require_once __DIR__ . '/../templates/template-rodape.php'; ?>
</body>

</html>