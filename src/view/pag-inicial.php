<?php

$rota_clientes = BASE_URL. "/clientes";
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

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= BASE_URL ?>/assets/img/logo_agrinovajr_grande.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- ================= SOBRE NÓS ================= -->
<section id="sobre" class="py-5">
    <div class="text-center mb-5">
        <div class="mb-2 fs-4" style="color:#1a5c32;">
            ✦
        </div>
        <h2 class="fw-bold"
            style="font-family:'Crimson Pro', Georgia, serif;">
            Sobre Nós
        </h2>
        <p class="text-secondary">
            Somos uma Empresa Júnior do Curso de Engenharia Agronômica
        </p>
    </div>
    <div class="row align-items-center mb-5">
        <div class="col-lg-7">
            <h2 class="fw-bold mb-3"
                style="color:#1a5c32;">
                Quem Somos?
            </h2>
            <p class="text-secondary">
                A <strong>Agrinova Jr.</strong> é uma empresa júnior
                comprometida com o desenvolvimento do agronegócio,
                unindo conhecimento acadêmico, inovação e soluções
                práticas para produtores, empresas e comunidade.
            </p>
            <p class="text-secondary">
                Nossa atuação busca desenvolver projetos e serviços
                técnicos com responsabilidade, qualidade e foco no
                crescimento sustentável do setor agrícola.
            </p>
            <p class="text-secondary">
                Trabalhamos para aproximar universidade e mercado,
                proporcionando aos estudantes experiências profissionais
                e contribuindo para o desenvolvimento regional.
            </p>
        </div>
        <div class="col-lg-5 text-center">
            <img src="<?= BASE_URL ?>/assets/img/agrinovaJn.png"
                 class="img-fluid"
                 style="max-height:250px;"
                 alt="Agrinova Jr">
        </div>
    </div>

    <!-- MISSÃO VISÃO VALORES -->
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-bullseye fs-1"
                       style="color:#1a5c32;">
                    </i>
                    <h4 class="fw-bold mt-3"
                        style="color:#1a5c32;">
                        Missão
                    </h4>
                    <p class="text-secondary">
                        Promover soluções inovadoras e assessoria
                        técnica em agronomia, conciliando formação
                        acadêmica com experiência profissional.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-eye fs-1"
                       style="color:#1a5c32;">
                    </i>
                    <h4 class="fw-bold mt-3"
                        style="color:#1a5c32;">
                        Visão
                    </h4>
                    <p class="text-secondary">
                        Ser referência entre empresas juniores da
                        Agronomia, reconhecida pela qualidade,
                        inovação e conhecimento técnico.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-people fs-1"
                       style="color:#1a5c32;">
                    </i>
                    <h4 class="fw-bold mt-3"
                        style="color:#1a5c32;">
                        Valores
                    </h4>
                    <p class="text-secondary">
                        Ética, comprometimento, inovação,
                        sustentabilidade, colaboração e excelência
                        técnica.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- DIFERENCIAIS -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="p-4 rounded shadow-sm text-center"
                 style="background:#f5f7f2;">
                <h5 style="color:#1a5c32;">
                    Qualidade
                </h5>
                <p class="small text-secondary mb-0">
                    Conhecimento técnico aplicado.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 rounded shadow-sm text-center"
                 style="background:#f5f7f2;">
                <h5 style="color:#1a5c32;">
                    Inovação
                </h5>
                <p class="small text-secondary mb-0">
                    Soluções modernas para o agro.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 rounded shadow-sm text-center"
                 style="background:#f5f7f2;">
                <h5 style="color:#1a5c32;">
                    Sustentabilidade
                </h5>
                <p class="small text-secondary mb-0">
                    Desenvolvimento responsável.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 rounded shadow-sm text-center"
                 style="background:#f5f7f2;">
                <h5 style="color:#1a5c32;">
                    Crescimento
                </h5>
                <p class="small text-secondary mb-0">
                    Evolução constante da equipe.
                </p>
            </div>
        </div>
    </div>
</section>
            <div class="container py-5">
                <!-- Título -->
                <div class="text-center mb-5">
                    <div class="mb-2 fs-4" style="color:#1a5c32;">✦</div>
        <section id ="contato">
            <h2 style="font-family:'Crimson Pro', Georgia, serif;color:#1e1e1e;">
            Contato
            </h2>
        </section>
        <p class="text-secondary">
            Estamos aqui para recebê-lo
        </p>
    </div>
    <div class="row g-4">

        <!-- Informações -->
        <div class="col-lg-6">
            <div class="row g-3">
                <!-- Endereço -->
                <div class="col-12 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h6 class="text-uppercase fw-bold mb-3"
                                style="color:#1a5c32;font-size:.75rem;letter-spacing:2px;">
                                <i class="bi bi-geo-alt-fill me-2"></i>
                                Endereço
                            </h6>
                            <p class="mb-1">
                                Av. Bento Munhoz da Rocha Neto, s/nº
                            </p>
                            <p class="mb-0">
                                Bairro Universitário, Palmas - PR
                            </p>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="col-12 col-md-6">
                    <a href="https://wa.me/5546999785872"
                       class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h6 class="text-uppercase fw-bold mb-3"
                                    style="color:#1a5c32;font-size:.75rem;letter-spacing:2px;">
                                    <i class="bi bi-whatsapp"></i>
                                    WhatsApp
                                </h6>
                                <p class="mb-0 text-dark">
                                    (46) 99978-5872
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- E-mail -->
            <a href="mailto:agrinovajr@ifpr.edu.br"
               class="card border-0 shadow-sm mt-3 text-decoration-none">
                <div class="card-body d-flex align-items-center">
                    <i class="bi bi-envelope-fill fs-2 me-3"
                       style="color:#1a5c32;"></i>
                    <div>
                        <h6 class="mb-1 text-uppercase fw-bold"
                            style="color:#1a5c32;font-size:.75rem;letter-spacing:2px;">
                            E-mail
                        </h6>
                        <span class="text-dark">
                agrinovajr@ifpr.edu.br
            </span>
                    </div>
                </div>
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/agrinovajr/"
               class="card border-0 shadow-sm mt-3 text-decoration-none">
                <div class="card-body d-flex align-items-center">
                    <i class="bi bi-instagram fs-2 me-3"
                       style="color:#1a5c32;"></i>
                    <div>
                        <h6 class="mb-1 text-uppercase fw-bold"
                            style="color:#1a5c32;font-size:.75rem;letter-spacing:2px;">
                            Instagram
                        </h6>
                        <span class="text-dark">
                            @agrinovajr
                        </span>
                    </div>
                </div>
            </a>

            <!-- Google Maps -->
            <div class="card border-0 shadow-sm mt-3">
                <iframe
                        src="https://maps.google.com/maps?q=Instituto+Federal+do+Paran%C3%A1+Campus+Palmas&ll=-26.511755,-51.985182&z=18&output=embed"
                        height="260"
                        style="border:0;width:100%;"
                        loading="lazy">
                </iframe>
            </div>

            <div class="text-end mt-2">
                <a href="https://maps.app.goo.gl/koqMeq5aPyJz1YFc7"
                   target="_blank"
                   class="text-decoration-none fw-semibold"
                   style="color:#1a5c32;">
                    Abrir no Google Maps
                    <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>
        </div>

        <!-- AQUI FICARÁ O FORMULÁRIO -->
        <div class="col-lg-6">
            <!-- Parte 2 -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form id="formContato">
                            <!-- Nome -->
                            <div class="mb-3">
                                <label for="nome" class="form-label fw-semibold">
                                    Nome
                                </label>
                                <input
                                        type="text"
                                        class="form-control"
                                        id="nome"
                                        placeholder="Seu nome completo"
                                        required>
                            </div>
                            <!-- Assunto -->
                            <div class="mb-3">
                                <label for="assunto" class="form-label fw-semibold">
                                    Assunto
                                </label>
                                <select
                                        class="form-select"
                                        id="assunto">
                                    <option selected>
                                        Selecione um assunto
                                    </option>
                                    <option>
                                        Primeira visita
                                    </option>
                                    <option>
                                        Aconselhamento sobre Colheitas
                                    </option>
                                    <option>
                                        Informações sobre Mini jardins
                                    </option>
                                    <option>
                                        Serviço da AgrinovaJr
                                    </option>
                                    <option>
                                        Outros
                                    </option>
                                </select>
                            </div>

                            <!-- Mensagem -->
                            <div class="mb-4">
                                <label
                                        for="mensagem"
                                        class="form-label fw-semibold">
                                    Mensagem
                                </label>
                                <textarea
                                        class="form-control"
                                        id="mensagem"
                                        rows="6"
                                        placeholder="Escreva sua mensagem..."
                                        required></textarea>
                            </div>
                            <button
                                    type="submit"
                                    class="btn w-100 text-white fw-semibold py-3"
                                    style="background:#1a5c32;">
                                <i class="bi bi-whatsapp me-2"></i>
                                Enviar pelo WhatsApp
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("formContato").addEventListener("submit", function(e){
        e.preventDefault();
        const nome = document.getElementById("nome").value;
        const assunto = document.getElementById("assunto").value;
        const mensagem = document.getElementById("mensagem").value;
        const texto =
            `Olá!
Meu nome é ${nome}
Assunto: ${assunto}
Mensagem:
${mensagem}`;
        window.open(
            "https://wa.me/5546999785872?text=" +
            encodeURIComponent(texto),
            "_blank"
        );
    });
</script>
<?php require_once "templates/template-rodape.php" ?>
</body>
</html>


