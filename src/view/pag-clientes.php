<?php
/** @var model\Cliente $cliente */
?>

<!doctype html>
<html lang="pt-br">
<head>
    <?php require_once 'templates/template-head.php' ?>
    <title>Cadastro de Comentário</title>
</head>
<body class="container pt-5">

<?php require_once "templates/template-menu.php" ?>

<div class="mt-5">

    <form id="formCadastroCliente"
          action="<?= BASE_URL . '/clientes/comentario' ?>"
          method="POST">

        <input type="hidden" name="id" value="<?= htmlspecialchars($cliente->getId() ?? '') ?>">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input
                    id="nome"
                    name="nome"
                    type="text"
                    class="form-control"
                    placeholder="Insira seu Nome"
                    value="<?= htmlspecialchars($cliente->getNome() ?? '') ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control"
                    placeholder="Insira seu E-mail"
                    value="<?= htmlspecialchars($cliente->getEmail() ?? '') ?>">
        </div>

        <div class="mb-3">
            <label for="textinho" class="form-label">Comentário</label>
            <textarea
                    id="textinho"
                    name="textinho"
                    class="form-control"
                    rows="4"
                    placeholder="Insira seu comentário"><?= htmlspecialchars($cliente->getTextinho() ?? '') ?></textarea>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">
                Comentar
            </button>

            <a href="<?= BASE_URL . '/clientes' ?>" class="btn btn-primary">
                Voltar
            </a>
        </div>

    </form>

</div>

<?php require_once "templates/template-rodape.php" ?>

</body>
</html>