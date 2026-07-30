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



<!-- <div style="height:100px;background:linear-gradient(90deg, #2d7845, #8ab89a 50%, #2d7845)"></div> -->


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

    <div class="container py-5">

        <div class="text-center mb-5">
            <div class="mb-2 fs-4" style="color:#1a5c32;">✦</div>

            <section id ="sobre">
                <h2 style="font-family:'Crimson Pro', Georgia, serif;color:#1e1e1e;">
                    Sobre Nós
                </h2>
            </section>
            <p class="text-secondary">
                Somos uma Empresa Júnior do Curso de Engenharia Agronômica
            </p>
        </div>

        <section id="sobre" class="py-5" style="background-color:#0f1a0d;">
            <div class="container">

                <!-- Título -->
                <div class="text-center mb-5">
                    <h2 class="display-4 fw-bold">
                        <span style="color:#d9ff2f;">Quem</span>
                        <span class="text-white">Somos?</span>
                    </h2>

                    <p class="text-light mx-auto mt-3" style="max-width:800px;">
                        A <strong style="color:#2d7845;">Agrinova Jr.</strong> é uma empresa júnior comprometida com o
                        desenvolvimento do agronegócio por meio da inovação, da excelência técnica e da responsabilidade social.
                        Atuamos oferecendo assessoria técnica, desenvolvendo projetos e prestando serviços que unem conhecimento
                        acadêmico e soluções práticas para produtores, empresas e comunidade.
                    </p>
                </div>

                <!-- História -->
                <div class="row align-items-center mb-5">

                    <div class="col-lg-6">
                        <h3 class="fw-bold mb-3" style="color:#d9ff2f;">
                            Nossa História
                        </h3>

                        <p class="text-light">
                            Nossa atuação busca promover benefícios diretos à sociedade,
                            incentivando práticas sustentáveis, fortalecendo o desenvolvimento regional
                            e contribuindo para a formação de profissionais preparados para os desafios
                            do setor agrícola.
                        </p>

                        <p class="text-light">
                            Construímos nossa trajetória baseada na ética, transparência e compromisso
                            com resultados, desenvolvendo projetos que aproximam a universidade da comunidade.
                        </p>
                    </div>

                    <div class="col-lg-6 text-center">
                        <img src="assets/img/logo.png"
                             class="img-fluid"
                             style="max-height:280px; opacity:.85;"
                             alt="Agrinova Jr">
                    </div>

                </div>

                <!-- Missão, Visão e Valores -->
                <div class="row g-4 mb-5">

                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow"
                             style="background:#25360f;">

                            <div class="card-body text-center">

                                <h4 class="fw-bold mb-3"
                                    style="color:#d9ff2f;">
                                    Missão
                                </h4>

                                <hr style="border-color:#d9ff2f;">

                                <p class="text-light">
                                    Promover soluções inovadoras e assessoria técnica em agronomia,
                                    conciliando formação acadêmica com vivência profissional por meio
                                    de parcerias, colaboração e ações voltadas à comunidade.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow"
                             style="background:#25360f;">

                            <div class="card-body text-center">

                                <h4 class="fw-bold mb-3"
                                    style="color:#d9ff2f;">
                                    Visão
                                </h4>

                                <hr style="border-color:#d9ff2f;">

                                <p class="text-light">
                                    Ser reconhecida como referência estudantil entre as empresas
                                    juniores da Agronomia, contribuindo com conhecimento técnico,
                                    inovação e oportunidades para seus integrantes.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow"
                             style="background:#25360f;">

                            <div class="card-body text-center">

                                <h4 class="fw-bold mb-3"
                                    style="color:#d9ff2f;">
                                    Valores
                                </h4>

                                <hr style="border-color:#d9ff2f;">

                                <ul class="list-unstyled text-light text-start">
                                    <li>✔ Ética e transparência</li>
                                    <li>✔ Comprometimento</li>
                                    <li>✔ Inovação</li>
                                    <li>✔ Espírito empreendedor</li>
                                    <li>✔ Trabalho em equipe</li>
                                    <li>✔ Sustentabilidade</li>
                                    <li>✔ Excelência técnica</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- Diferenciais -->
                <div class="row mb-5">

                    <div class="col-lg-6">

                        <h3 class="fw-bold mb-4"
                            style="color:#d9ff2f;">
                            Nossos Diferenciais
                        </h3>

                        <div class="row g-3">

                            <div class="col-6">
                                <div class="p-3 rounded h-100"
                                     style="background:#25360f;">

                                    <h5 style="color:#d9ff2f;">
                                        Qualidade
                                    </h5>

                                    <p class="text-light mb-0">
                                        Conhecimento técnico aplicado e soluções eficientes.
                                    </p>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="p-3 rounded h-100"
                                     style="background:#25360f;">

                                    <h5 style="color:#d9ff2f;">
                                        Inovação
                                    </h5>

                                    <p class="text-light mb-0">
                                        Desenvolvimento contínuo e melhoria constante.
                                    </p>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="p-3 rounded h-100"
                                     style="background:#25360f;">

                                    <h5 style="color:#d9ff2f;">
                                        Sustentabilidade
                                    </h5>

                                    <p class="text-light mb-0">
                                        Desenvolvimento aliado à responsabilidade ambiental.
                                    </p>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="p-3 rounded h-100"
                                     style="background:#25360f;">

                                    <h5 style="color:#d9ff2f;">
                                        Crescimento
                                    </h5>

                                    <p class="text-light mb-0">
                                        Aprendizado contínuo e fortalecimento da equipe.
                                    </p>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <h3 class="fw-bold mb-4"
                            style="color:#d9ff2f;">
                            Reconhecimentos
                        </h3>

                        <p class="text-light">
                            Nosso compromisso com a excelência é refletido nas conquistas alcançadas
                            pela Agrinova Jr., demonstrando o empenho da equipe e a qualidade dos
                            serviços prestados.
                        </p>

                        <div class="row text-center g-3">

                            <div class="col-6">
                                <div class="rounded p-3"
                                     style="background:#25360f;">
                                    <h4 style="color:#d9ff2f;">🏆</h4>
                                    <strong class="text-light">
                                        EJ Farol Verde
                                    </strong>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="rounded p-3"
                                     style="background:#25360f;">
                                    <h4 style="color:#d9ff2f;">🥇</h4>
                                    <strong class="text-light">
                                        #1 Faturamento
                                    </strong>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="rounded p-3"
                                     style="background:#25360f;">
                                    <h4 style="color:#d9ff2f;">⭐</h4>
                                    <strong class="text-light">
                                        EJ Despertada
                                    </strong>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="rounded p-3"
                                     style="background:#25360f;">
                                    <h4 style="color:#d9ff2f;">🌱</h4>
                                    <strong class="text-light">
                                        EJ Constância
                                    </strong>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>


<!-- <div style="height:100px;background:linear-gradient(90deg, #2d7845, #8ab89a 50%, #2d7845)"></div> -->

<!--

<section id="contato" class="py-8 md:py-12 px-6" style="background-color:#f8f9f7">
    <div class="max-w-5xl mx-auto">
        <div class="mb-12 text-center">
            <div class="ornament justify-center">
                <span>✦</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold" style="font-family:'Crimson Pro', Georgia, serif;color:#1e1e1e">Contato</h2>
            <p class="mt-3 max-w-xl mx-auto text-base" style="color:#767676">Estamos aqui para recebê-lo</p>
        </div>
        <div class="grid md:grid-cols-2 gap-14">
            <div>
                <div class="grid grid-cols-2 gap-4 mb-4"><div class="p-4 bg-white" style="border:1px solid #e8e8e8">
                        <div class="flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin" aria-hidden="true" style="color:#1a5c32">
                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">

                                </path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span class="text-xs font-bold tracking-widest uppercase" style="color:#1a5c32">Endereço</span>
                        </div>
                        <p class="text-sm" style="color:#444444">Av. Bento Munhoz da Rocha Neto, s/nº</p>
                        <p class="text-sm" style="color:#444444">Bairro Universitário, Palmas — PR</p>
                    </div><a href="https://wa.me/5546999233742" target="_blank" rel="noopener noreferrer" class="p-4 bg-white transition-opacity hover:opacity-80" style="border:1px solid #e8e8e8;display:block">
                        <div class="flex items-center gap-2 mb-2">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="#1a5c32" aria-hidden="true">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z">

                                </path>
                            </svg>
                            <span class="text-xs font-bold tracking-widest uppercase" style="color:#1a5c32">WhatsApp</span>
                        </div>
                        <p class="text-sm" style="color:#444444">(46) 99923-3742</p>
                    </a>
                </div>
                <a href="https://www.youtube.com/@ipbpalmaspr" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-4 bg-white mb-4 transition-opacity hover:opacity-80" style="border:1px solid #e8e8e8">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#FF0000" aria-hidden="true">
                        <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1C24 15.9 24 12 24 12s0-3.9-.5-5.8zM9.7 15.5V8.5l6.3 3.5-6.3 3.5z">

                        </path>
                    </svg>
                    <div>
                        <p class="text-xs font-bold tracking-widest uppercase mb-0.5" style="color:#1a5c32">Canal no YouTube</p>
                        <p class="text-sm" style="color:#444444">youtube.com/@ipbpalmaspr</p>
                    </div>
                </a>
                <a href="https://www.instagram.com/agrinovajr/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-4 bg-white mb-4 transition-opacity hover:opacity-80" style="border:1px solid #e8e8e8">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#E1306C" aria-hidden="true">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"></path>
                    </svg>
                    <div>
                        <p class="text-xs font-bold tracking-widest uppercase mb-0.5" style="color:#1a5c32">Instagram</p>
                        <p class="text-sm" style="color:#444444">@agrinovajr</p>
                    </div>
                </a>
                <div style="border:1px solid #c8c8c8;height:240px">
                    <iframe src="https://maps.google.com/maps?q=Instituto+Federal+do+Paran%C3%A1+Campus+Palmas&amp;ll=-26.511755,-51.985182&amp;z=18&amp;output=embed" width="100%" height="240" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Localização AgrinovaJr Palmas"></iframe>
                </div>
                <div class="text-right mt-2"><a href="https://maps.app.goo.gl/koqMeq5aPyJz1YFc7" target="_blank" rel="noopener noreferrer" class="text-xs font-semibold tracking-widest uppercase transition-opacity hover:opacity-70" style="color:#1a5c32">Abrir no Google Maps ↗</a></div>
            </div>
            <form class="flex flex-col gap-5">
                <div>
                    <label for="nome" class="block text-xs font-bold mb-1.5 tracking-widest uppercase" style="color:#444444">Nome</label>
                    <input id="nome" type="text" required="" placeholder="Seu nome completo" class="w-full px-4 py-3 text-sm outline-none bg-white" style="border:1px solid #c8c8c8;color:#1e1e1e" value="">
                </div>
                <div>
                    <label for="assunto" class="block text-xs font-bold mb-1.5 tracking-widest uppercase" style="color:#444444">Assunto</label>
                    <select id="assunto" class="w-full px-4 py-3 text-sm outline-none bg-white" style="border:1px solid #c8c8c8;color:#1e1e1e">
                        <option value="" selected="">Selecione um assunto</option>
                        <option>Primeira visita</option>
                        <option>Aconselhamento pastoral</option>
                        <option>Informações sobre batismo</option>
                        <option>Ministérios e serviço</option>
                        <option>Outros</option>
                    </select>
                </div>
                <div>
                    <label for="mensagem" class="block text-xs font-bold mb-1.5 tracking-widest uppercase" style="color:#444444">Mensagem</label>
                    <textarea id="mensagem" required="" rows="5" placeholder="Escreva sua mensagem aqui..." class="w-full px-4 py-3 text-sm outline-none resize-none bg-white" style="border:1px solid #c8c8c8;color:#1e1e1e"></textarea>
                </div>
                <button type="submit" class="py-4 font-semibold tracking-widest uppercase text-sm transition-opacity hover:opacity-85 flex items-center justify-center gap-2" style="background-color:#1a5c32;color:#ffffff">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square" aria-hidden="true">
                        <path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z">
                        </path>
                    </svg>Enviar pelo WhatsApp</button>
            </form>
        </div>
    </div>
</section>

-->



<!-- <div style="height:100px;background:linear-gradient(90deg, #2d7845, #8ab89a 50%, #2d7845)"></div> -->

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
                                📍 Endereço
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

            <!-- Youtube -->
            <a href="https://www.youtube.com/@ipbpalmaspr"
               class="card border-0 shadow-sm mt-3 text-decoration-none">

                <div class="card-body d-flex align-items-center">

                    <i class="bi bi-youtube fs-2 text-danger me-3"></i>

                    <div>

                        <h6 class="mb-1 text-uppercase fw-bold"
                            style="color:#1a5c32;font-size:.75rem;letter-spacing:2px;">

                            Canal no YouTube

                        </h6>

                        <span class="text-dark">
                            youtube.com/@ipbpalmaspr
                        </span>

                    </div>

                </div>

            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/agrinovajr/"
               class="card border-0 shadow-sm mt-3 text-decoration-none">

                <div class="card-body d-flex align-items-center">

                    <i class="bi bi-instagram fs-2 me-3"
                       style="color:#E1306C;"></i>

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
                                        Aconselhamento pastoral
                                    </option>

                                    <option>
                                        Informações sobre batismo
                                    </option>

                                    <option>
                                        Ministérios e serviço
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