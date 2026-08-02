document.addEventListener("DOMContentLoaded", function () {

    const servicos = document.querySelector(".dropdown-servicos");

    if (servicos) {
        servicos.addEventListener("mouseenter", function () {
            this.querySelector(".dropdown-menu")
                .classList.add("show");
        });

        servicos.addEventListener("mouseleave", function () {
            this.querySelector(".dropdown-menu")
                .classList.remove("show");
        });
    }
});