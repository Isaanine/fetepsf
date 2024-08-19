// Donates
document.addEventListener("DOMContentLoaded", function () {
    const inputOtherValue = document.querySelectorAll(
        "#other-value-input-container"
    );

    // Impedir que o formulário seja enviado quando os botões de valor forem clicados
    document.querySelectorAll(".value-button").forEach((button) => {
        button.addEventListener("click", function (event) {
            event.preventDefault(); // Impede o comportamento padrão (envio do formulário)

            const value = this.getAttribute("data-value");
            document.getElementById(
                "donation-amount"
            ).innerText = `R$ ${value}`;
        });
    });

    document
        .getElementById("other-value-btn")
        .addEventListener("click", function () {
            inputOtherValue.forEach((props) => {
                props.classList.remove("hidden");
            });
        });

    document
        .getElementById("cancel-other-value-btn")
        .addEventListener("click", function () {
            document
                .getElementById("other-value-input-container")
                .classList.add("hidden");
        });

    document
        .getElementById("confirm-other-value-btn")
        .addEventListener("click", function () {
            const otherValue =
                document.getElementById("other-value-input").value;
            if (otherValue) {
                document.getElementById(
                    "donation-amount"
                ).innerText = `R$ ${otherValue}`;
                document
                    .getElementById("other-value-input-container")
                    .classList.add("hidden");
            }
        });

    function handlePaymentMethodSelection(paymentMethod) {
        document.getElementById("pix").classList.add("hidden");
        document.getElementById("boleto").classList.add("hidden");
        document.getElementById("credito").classList.add("hidden");
        document.getElementById("debito").classList.add("hidden");
        document.getElementById("submit-donation").classList.add("hidden");
        document.getElementById("pix-btn").classList.remove("hidden");
        document.getElementById("debito-btn").classList.remove("hidden");
        document.getElementById("boleto-btn").classList.remove("hidden");
        document.getElementById("credito-btn").classList.remove("hidden");

        // Mostrar os campos de pagamento específicos
        if (paymentMethod === "Cartão de Débito") {
            document.getElementById("debito").classList.remove("hidden");
            document.getElementById("debito-btn").classList.add("hidden");
            document
                .getElementById("submit-donation")
                .classList.remove("hidden");
        } else if (paymentMethod === "Cartão de Crédito") {
            document.getElementById("credito").classList.remove("hidden");
            document.getElementById("credito-btn").classList.add("hidden");
            document
                .getElementById("submit-donation")
                .classList.remove("hidden");
        } else if (paymentMethod === "Boleto") {
            document.getElementById("boleto").classList.remove("hidden");
            document.getElementById("boleto-btn").classList.add("hidden");
        } else if (paymentMethod === "Pix") {
            document.getElementById("pix").classList.remove("hidden");
            document.getElementById("pix-btn").classList.add("hidden");
        }
    }

    document
        .getElementById("debito-btn")
        .addEventListener("click", function () {
            handlePaymentMethodSelection("Cartão de Débito");
        });

    document
        .getElementById("credito-btn")
        .addEventListener("click", function () {
            handlePaymentMethodSelection("Cartão de Crédito");
        });

    document
        .getElementById("boleto-btn")
        .addEventListener("click", function () {
            handlePaymentMethodSelection("Boleto");
        });

    document.getElementById("pix-btn").addEventListener("click", function () {
        handlePaymentMethodSelection("Pix");
    });
    // Enviar o formulário apenas quando o botão de doação for clicado
});

// Styles
function adjustStyles() {
    const logo = document.querySelectorAll("#logo");
    const plogo = document.querySelectorAll("#plogo");
    const mobileid = document.querySelectorAll("#mobile-menu");
    const logoimg = document.querySelectorAll("#logo img");
    const nav = document.querySelectorAll("#navbar");
    const navLinks = document.querySelectorAll("#navbar a");
    const userActions = document.querySelectorAll("#userImg");
    const button = document.querySelectorAll("#button");
    const gridIcons = document.querySelectorAll("#gridIcons");
    const gridCourses = document.querySelectorAll("#gridCourses");
    const dadosContainer = document.querySelectorAll("#dadosContainer");
    const childImage = document.querySelectorAll("#childrenImage");
    const quebraCabecaImage = document.querySelectorAll("#quebraCabecaImage");
    const abcImage = document.querySelectorAll("#abcImage");
    const overlay = document.querySelectorAll("#overlay");
    const divContent = document.querySelectorAll("#divContent");
    const home = document.querySelectorAll("#home");
    const screenWidth = window.innerWidth;

    // Headers
    if (screenWidth <= 900 && screenWidth > 767) {
        plogo.forEach((props) => {
            props.classList.remove("text-5xl");
            props.classList.add("text-3xl");
            logo.forEach((props) => {
                props.classList.remove("p-5");
                props.classList.add("p-4");
            });
        });
    } else {
        plogo.forEach((props) => {
            props.classList.remove("text-3xl");
            props.classList.add("text-5xl");
            logo.forEach((props) => {
                props.classList.remove("p-4");
                props.classList.add("p-5");
            });
        });
    }

    if (screenWidth >= 767 && screenWidth <= 870) {
        button.forEach((props) => {
            props.classList.add("hidden");
        });
    } else {
        button.forEach((props) => {
            props.classList.remove("hidden");
        });
    }

    if (screenWidth > 767 && screenWidth <= 1470) {
        logo.forEach((props) => {
            props.classList.remove("rounded-br-only");
            props.classList.add("borderr-right-sm", "py-2", "px-2");
        });
        logoimg.forEach((props) => {
            props.classList.remove("pl-5", "pr-7", "pb-2", "pt-1");
            props.classList.add("h-12");
        });
        nav.forEach((props) => {
            props.classList.remove("gap-14");
        });
        navLinks.forEach((props) => {
            props.classList.remove("text-2xl");
            props.classList.add("text-lg");
        });
        userActions.forEach((link) => {
            link.classList.remove("h-12");
            link.classList.add("h-10");
        });
        button.forEach((props) => {
            props.classList.remove("text-xl", "px-4", "py-2");
            props.classList.add("text-base", "p-h");
        });
    } else {
        logo.forEach((props) => {
            props.classList.remove("borderr-right-sm");
            props.classList.add("borderr-right-sm", "py-2", "px-2");
        });
        logoimg.forEach((props) => {
            props.classList.remove("h-12");
            props.classList.add("pl-5", "pr-7", "pb-2", "pt-1");
        });
        nav.forEach((props) => {
            props.classList.add("gap-14");
        });
        navLinks.forEach((props) => {
            props.classList.remove("text-lg");
            props.classList.add("text-2xl");
        });
        userActions.forEach((link) => {
            link.classList.remove("h-10");
            link.classList.add("h-12");
        });
        button.forEach((props) => {
            props.classList.remove("text-base", "p-h");
            props.classList.add("text-xl", "px-4", "py-2");
        });
    }
    if (screenWidth > 767) {
        mobileid.forEach((props) => {
            props.classList.add("hidden");
        });
    }

    // Courses - Purple
    if (screenWidth > 767 && screenWidth <= 1070) {
        gridCourses.forEach((props) => {
            props.classList.remove("md:grid-cols-3");
            props.classList.add("md:grid-cols-2");
        });
    } else {
        gridCourses.forEach((props) => {
            props.classList.remove("md:grid-cols-2");
            props.classList.add("md:grid-cols-3");
        });
    }

    if (screenWidth <= 1100) {
        quebraCabecaImage.forEach((props) => {
            props.classList.remove("md:block");
        });
        abcImage.forEach((props) => {
            props.classList.remove("md:block");
        });
    } else {
        quebraCabecaImage.forEach((props) => {
            props.classList.add("md:block");
        });
        abcImage.forEach((props) => {
            props.classList.add("md:block");
        });
    }

    if (screenWidth < 1260) {
        childImage.forEach((props) => {
            props.classList.remove("md:flex");
            props.classList.add("hidden");
        });
    } else {
        childImage.forEach((props) => {
            props.classList.remove("hidden");
            props.classList.add("md:flex");
        });
    }

    if (screenWidth < 1260) {
        overlay.forEach((props) => {
            props.classList.remove("md:left-36", "md:top-32", "absolute");
            props.classList.add(
                "transform",
                "flex",
                "items-center",
                "justify-center"
            );
        });
        divContent.forEach((props) => {
            props.classList.remove("md:mt-0");
            props.classList.add("mt-16");
        });
        home.forEach((props) => {
            props.classList.remove("h-100");
            props.classList.add("h-101");
        });
    } else {
        overlay.forEach((props) => {
            props.classList.remove(
                "transform",
                "flex",
                "items-center",
                "justify-center"
            );
            props.classList.add("md:left-36", "md:top-32", "absolute");
        });
        divContent.forEach((props) => {
            props.classList.remove("mt-16");
            props.classList.remove("md:mt-0");
        });
        home.forEach((props) => {
            props.classList.remove("h-101");
            props.classList.add("h-100");
        });
    }
}

document.addEventListener("DOMContentLoaded", adjustStyles);
window.addEventListener("resize", adjustStyles);

// Toggles

function toggleText(id) {
    const element = document.getElementById(id);
    element.classList.toggle("hidden");
}
function openModal( nome, email, telefone, endereco) {
    // Atualiza o conteúdo do modal com os dados da ONG
    document.getElementById("modal-nome").textContent = nome;
    document.getElementById("modal-email").textContent = email;
    document.getElementById("modal-telefone").textContent = telefone;
    document.getElementById("modal-endereco").textContent = endereco;

    // Mostra o modal
    toggleModal("modal-dados");
}

function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.toggle("hidden");
}

document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("mobile-menu-toggle")
        .addEventListener("click", function () {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
});
/*---------------------------------------Modal-----------------------------------------------*/
// Toggles

function toggleText(id) {
    const element = document.getElementById(id);
    element.classList.toggle("hidden");
}
function openModal( nome, email, telefone, endereco) {
    // Atualiza o conteúdo do modal com os dados da ONG
    document.getElementById("modal-nome").textContent = nome;
    document.getElementById("modal-email").textContent = email;
    document.getElementById("modal-telefone").textContent = telefone;
    document.getElementById("modal-endereco").textContent = endereco;

    // Mostra o modal
    toggleModal("modal-dados");
}

function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.toggle("hidden");
}

document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("mobile-menu-toggle")
        .addEventListener("click", function () {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
});


/*-----------------------------VER MAIS MURAL------------------------------------------*/
document.addEventListener('DOMContentLoaded', function () {
    const loadMoreButton = document.getElementById('load-more');
    const moreItems = document.getElementById('more-items');

    if (loadMoreButton) {
        loadMoreButton.addEventListener('click', function () {
            moreItems.style.display = 'block';
            loadMoreButton.style.display = 'none';
        });
    }
});
