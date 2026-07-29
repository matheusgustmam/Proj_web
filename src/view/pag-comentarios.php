<?php
/**  @var model\Cliente $cliente ; */


?>

<!doctype html>
<html lang="pt-br">
<head>
    <?php require_once 'templates/template-head.php' ?>
    <title>agrinovajr </title>
</head>
<body class="container pt-5">

<?php require_once "templates/template-menu.php" ?>

<div class="mt-5"></div>
<form id="formCadastroCliente" action="<?= BASE_URL . '/clientes/cadastrar' ?>"
      method="POST"
      enctype="multipart/form-data"
>
    <input type="hidden" name="id" value="<?= htmlspecialchars($cliente->getId() ?? '') ?>">




<?php require_once "templates/template-rodape.php" ?>
</body>
</html>