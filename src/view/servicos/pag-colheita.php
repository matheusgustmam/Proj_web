<!doctype html>
<html lang="pt-br">

<head>
    <?php require_once __DIR__ . '/../templates/template-head.php'; ?>
    <title>Colheita</title>
</head>

<body class="container pt-5">
<?php require_once __DIR__ . '/../templates/template-menu.php'; ?>
<div class="mt-5">

    <h1 class="text-success">
        <i class="bi bi-basket"></i>
        Colheita
    </h1>

    <div class="card shadow mt-4">

        <img src="<?= BASE_URL ?>/assets/img/colheita.jpg"
             class="card-img-top"
             alt="Colheita">
        <div class="card-body">

            <h3>
                Serviços de Colheita
            </h3>
            <p>
                Oferecemos soluções para auxiliar produtores
                no planejamento e execução da colheita.
            </p>
            <p>
                Buscamos melhorar produtividade,
                organização e aproveitamento da produção.
            </p>
            <a href="<?= BASE_URL ?>/clientes"
               class="btn btn-success">
                Entrar em contato
            </a>

        </div>
    </div>
</div>
<?php require_once __DIR__ . '/../templates/template-rodape.php'; ?>
</body>

</html>