<?php
/** @var string|null $erro */
?>

<!doctype html>
<html lang="pt-br">

<head>

    <?php require_once 'templates/template-head.php' ?>

    <title>Login Administrador</title>

</head>


<body class="container pt-5">


<div class="row justify-content-center">

    <div class="col-md-5">


        <div class="card shadow">

            <div class="card-header bg-success text-white">

                <h4 class="mb-0">
                    Login Administrador
                </h4>

            </div>


            <div class="card-body">


                <?php if(isset($_SESSION['erro_login'])): ?>

                    <div class="alert alert-danger">

                        <?= htmlspecialchars($_SESSION['erro_login']) ?>

                    </div>


                    <?php unset($_SESSION['erro_login']); ?>

                <?php endif; ?>



                <form method="POST"
                      action="<?= BASE_URL ?>/login">


                    <!-- Proteção CSRF -->
                    <input type="hidden"
                           name="csrf"
                           value="<?= $_SESSION['csrf'] ?? '' ?>">



                    <div class="mb-3">

                        <label class="form-label">
                            Usuário
                        </label>


                        <input
                                class="form-control"
                                name="usuario"
                                required
                                autocomplete="username">

                    </div>




                    <div class="mb-3">

                        <label class="form-label">
                            Senha
                        </label>


                        <input
                                class="form-control"
                                type="password"
                                name="senha"
                                required
                                autocomplete="current-password">

                    </div>
                    <div class="d-grid gap-2">

                        <button class="btn btn-success">

                            <i class="bi bi-box-arrow-in-right"></i>
                            Entrar

                        </button>

                        <a href="<?= BASE_URL ?>/" class="btn btn-outline-secondary">

                            <i class="bi bi-house-door-fill"></i>
                            Voltar para página inicial

                        </a>

                    </div>


                </form>


            </div>


        </div>


    </div>


</div>


</body>

</html>