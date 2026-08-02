<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
    document.querySelectorAll('.navbar-nav .nav-link, .dropdown-item')
        .forEach(function(link){

            link.addEventListener('click', function(){

                let menu = document.querySelector('.navbar-collapse');

                if(menu.classList.contains('show')){
                    let bsCollapse = bootstrap.Collapse.getInstance(menu);

                    if(bsCollapse){
                        bsCollapse.hide();
                    }
                }

            });

        });
</script>



<!--
<footer style="background-color:#0f3d22;color:#d4d4d4">
    <div class="max-w-6xl mx-auto px-6 py-14 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <div>
            <h4 class="text-xs font-semibold tracking-widest uppercase mb-5" style="color:#ffffff">Contato</h4>
            <ul class="space-y-3 text-sm" style="color:#8ab89a">
                <li class="flex items-start gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin mt-1 shrink-0" aria-hidden="true" style="color:#2d7845">
                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                        </path>
                        <circle cx="12" cy="10" r="3">
                        </circle>
                    </svg> Av. Bento Munhoz da Rocha Neto, s/nº  — Bairro Universitário, Palmas — PR , 85690-740
                </li>
                <li class="flex items-center gap-2">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="#2d7845" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z">
                        </path>
                    </svg>
                    <a href="https://wa.me/5546999233742" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">
                        (46) 99923-3742</a>
                </li>
                <li class="flex items-center gap-2">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="#2d7845" aria-hidden="true">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"></path>
                    </svg>
                    <a href="https://www.instagram.com/agrinovajr/" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">@agrinovajr</a>
                </li>
                <li class="flex items-center gap-2">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="#2d7845" aria-hidden="true">
                        <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 2-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/>
                    </svg>

                    <a href="mailto:agrinovajr.ifpr@gmail.com"
                       class="hover:text-white transition-colors">
                        agrinovajr.ifpr@gmail.com
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex justify-center md:justify-end">
            <img
                    src="<?= BASE_URL ?>/assets/img/logo_agrinovajr_grande.png"
                    alt="AgrinovaJr"
                    class="object-contain"
                    style="max-width:220px; width:100%; height:auto;">
        </div>
    </div>
    <div style="max-width:1152px;margin:auto;padding:20px 24px;border-top:1px solid #1a5c32;color:#4d7a5c;display:flex;justify-content:space-between;align-items:center;">
        <p style="margin:0;">
            © 2026 AgrinovaJr — Palmas. Todos os direitos reservados.
        </p>
        <p style="margin:0;font-style:italic;">
            Empresa Júnior do IFPR – Campus Palmas
        </p>
    </div>
</footer>
-->

<!--

<div class="container py-5">
    <div class="row align-items-center">

        <div class="col-md-6">

            <div>
                <h4 class="text-xs font-semibold tracking-widest uppercase mb-5" style="color:#ffffff">Contato</h4>
                <ul class="space-y-3 text-sm" style="color:#8ab89a">
                    <li class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin mt-1 shrink-0" aria-hidden="true" style="color:#2d7845">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3">
                            </circle>
                        </svg> Av. Bento Munhoz da Rocha Neto, s/nº  — Bairro Universitário, Palmas — PR , 85690-740
                    </li>
                    <li class="flex items-center gap-2">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#2d7845" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z">
                            </path>
                        </svg>
                        <a href="https://wa.me/5546999233742" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">
                            (46) 99923-3742</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#2d7845" aria-hidden="true">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"></path>
                        </svg>
                        <a href="https://www.instagram.com/agrinovajr/" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">@agrinovajr</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="#2d7845" aria-hidden="true">
                            <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 2-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/>
                        </svg>

                        <a href="mailto:agrinovajr.ifpr@gmail.com"
                           class="hover:text-white transition-colors">
                            agrinovajr.ifpr@gmail.com
                        </a>
                    </li>
                </ul>
            </div>


        </div>

        <div class="col-md-6 text-md-end text-center mt-4 mt-md-0">
            <img
                    src="<?= BASE_URL ?>/assets/img/logo_agrinovajr_grande.png"
                    alt="AgrinovaJr"
                    class="img-fluid"
                    style="max-width:220px;">
        </div>

    </div>
</div>
<div style="max-width:1152px;margin:auto;padding:20px 24px;border-top:1px solid #1a5c32;color:#4d7a5c;display:flex;justify-content:space-between;align-items:center;">
    <p style="margin:0;">
        © 2026 AgrinovaJr — Palmas. Todos os direitos reservados.
    </p>
    <p style="margin:0;font-style:italic;">
        Empresa Júnior do IFPR – Campus Palmas
    </p>
</div>

-->


<footer style="background-color:#0f3d22;color:#d4d4d4;">
    <div class="container py-2">

        <div class="row align-items-center gy-2">

            <!-- Contato -->
            <div class="col-12 col-lg-6">

                <h4 class="text-uppercase fw-semibold mb-4 text-white"
                    style="font-size:.85rem;letter-spacing:.15rem;">
                    Contato
                </h4>

                <ul class="list-unstyled mb-0" style="color:#8ab89a;">

                    <!-- Endereço -->
                    <li class="d-flex align-items-start mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="16"
                             height="16"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="#2d7845"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             class="me-2 mt-1 flex-shrink-0">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>

                        <span>
                            Av. Bento Munhoz da Rocha Neto, s/nº —
                            Bairro Universitário, Palmas - PR,
                            CEP 85690-740
                        </span>
                    </li>

                    <!-- WhatsApp -->
                    <li class="d-flex align-items-center mb-2">
                        <svg width="16"
                             height="16"
                             viewBox="0 0 24 24"
                             fill="#2d7845"
                             class="me-2 flex-shrink-0">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z">
                        </svg>

                        <a href="https://wa.me/5546999785872"
                           target="_blank"
                           class="text-decoration-none"
                           style="color:#8ab89a;">
                            (46) 99978-5872
                        </a>
                    </li>

                    <!-- Instagram -->
                    <li class="d-flex align-items-center mb-2">
                        <svg width="16"
                             height="16"
                             viewBox="0 0 24 24"
                             fill="#2d7845"
                             class="me-2 flex-shrink-0">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"></path>
                        </svg>

                        <a href="https://www.instagram.com/agrinovajr/"
                           target="_blank"
                           class="text-decoration-none"
                           style="color:#8ab89a;">
                            @agrinovajr
                        </a>
                    </li>

                    <!-- E-mail -->
                    <li class="d-flex align-items-center">
                        <svg width="16"
                             height="16"
                             viewBox="0 0 24 24"
                             fill="#2d7845"
                             class="me-2 flex-shrink-0">
                            <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 2-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/>
                        </svg>

                        <a href="mailto:agrinovajr.ifpr@gmail.com"
                           class="text-decoration-none"
                           style="color:#8ab89a;">
                            agrinovajr.ifpr@gmail.com
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Logo -->
            <div class="col-12 col-lg-6 text-center text-lg-end">

                <img src="<?= BASE_URL ?>/assets/img/logo_agrinovajr_grande.png"
                     alt="AgrinovaJr"
                     class="img-fluid"
                     style="max-width:250px;">

            </div>

        </div>

        <hr class="my-10" style="border-color:#1a5c32;">

        <!-- Rodapé inferior -->
        <div class="row align-items-center">

            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <small style="color:#4d7a5c;">
                    © 2026 <strong>AgrinovaJr</strong>. Todos os direitos reservados.
                </small>
            </div>

            <div class="col-md-6 text-center text-md-end">
                <small class="fst-italic" style="color:#4d7a5c;">
                    Empresa Júnior do IFPR – Campus Palmas
                </small>
            </div>

        </div>

    </div>
</footer>

<style>
    footer a{
        transition:.3s;
    }

    footer a:hover{
        color:#fff !important;
    }

    footer svg{
        min-width:16px;
    }
</style>

<script>
    document.querySelectorAll('.navbar-nav .nav-link').forEach(function(link){

        link.addEventListener('click', function(){

            let menu = document.querySelector('#navbarNav');

            let bsCollapse = bootstrap.Collapse.getInstance(menu);

            if(bsCollapse){
                bsCollapse.hide();
            }

        });

    });
</script>

