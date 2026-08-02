<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="<?= BASE_URL ?>/">
            <img src="<?= BASE_URL ?>/assets/img/logo_pagina.png"
                 alt="AgrinovaJr"
                 width="45"
                 height="45"
                 class="rounded-circle me-2">

            <span class="fw-bold">AgrinovaJr</span>
        </a>
        <!-- Botão do menu mobile -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active"
                       href="<?= BASE_URL ?>/">
                        Início
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="<?= BASE_URL ?>/#sobre">
                        Sobre Nós
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="<?= BASE_URL ?>/clientes">
                        Clientes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="<?= BASE_URL ?>/#contato">
                        Contato
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="<?= BASE_URL ?>/clientes">
                        Comentarios
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Serviços
                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                               href="<?= BASE_URL ?>/mini-jardins">
                                Mini Jardins
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="<?= BASE_URL ?>/colheita">
                                Colheita
                            </a>
                        </li>

                    </ul>

                </li>

                <?php if (
                        isset($_SESSION['admin']) &&
                        in_array($_SESSION['admin']['nivel'], ['ADMIN', 'MODERADOR'])
                ): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/admin/comentarios">
                            Aprovar Comentários
                        </a>
                    </li>

                <?php endif; ?>

                <?php if (!isset($_SESSION['admin'])): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>/login">
                            Entrar
                        </a>
                    </li>

                <?php endif; ?>

                <?php if (isset($_SESSION['admin'])): ?>

                    <li class="nav-item">
                        <a class="nav-link text-danger"
                           href="<?= BASE_URL ?>/logout">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout
                        </a>
                    </li>

                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
