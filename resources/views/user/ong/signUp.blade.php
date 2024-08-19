<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')
</head>

<body class="overflow-auto">

    <div id="fade" class="hide">
      <div id="loader" class="spinner-border text-info hide" role="status">
      </div>
    </div>

    <div class="relative min-h-screen flex items-center justify-center  bg-center">
        <div class="bg-white w-[500px] my-5 mx-5 px-8 py-10 rounded-3xl shadow-md border border-gray-300 relative z-10">
            <a href="/signup">
                <button class="w-20 -translate-y-4 -translate-x-3 flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200 hover:rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-log-out" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 5l-7 7l7 7" />
                        <path d="M19 12h-14" />
                    </svg>
                </button>
            </a>
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Crescer Sabendo" class="h-16">
            </div>
            <h2 class="text-center text-3xl font-bold mb-6">Seja bem-vindo!!</h2>
            <form action="/createong" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700">Nome da ONG</label>
                    <input type="text" required name="nome_ong" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">CNPJ </label>
                    <input type="text" required maxlength="18" placeholder= "__.___.___/____-__" name="cnpj_ong" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Quem responde pela ONG</label>
                    <input type="text" name="resp_ong" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">CEP</label>
                    <input type="text" required id="cep" name="cep" maxlength="10"  minlength="8"  class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="grid grid-cols-2 gap-5 mb-4 ">
                    <div >
                        <label for="address" class="block text-gray-700">Rua</label>
                        <input type="text" required data-input id="address" name="endereco" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-gray-700">Número da residência</label>
                        <input type="text" required  id="number" name="number" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                    </div>
                </div>  
                <div class="mb-4">
                    <label class="block text-gray-700">Bairro</label>
                    <input type="text" required data-input id="neighborhood" name="neighborhood" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="grid grid-cols-2 gap-5 mb-4 ">
                    <div>
                        <label class="block text-gray-700">Estado</label>
                        <input type="text" required data-input id="region" name="estado" maxlength="2" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-gray-700">Cidade</label>
                        <input type="text" required data-input id="city" name="cidade" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Zona</label>
                    <input type="text" required name="zona" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Complemento</label>
                    <input type="text" required name="complemento" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
               
                <div class="mb-4">
                    <label class="block text-gray-700">Comprovante de endereço</label>
                    <input type="file" required name="compro_endereco" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Telefone</label>
                    <input type="text" maxlength="15" required placeholder='(00) 00000-0000' name="telefone" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Link para doação</label>
                    <input type="text" name="link_doacao" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Descreva as atividades, os projetos realizados e o publico alvo da ONG</label>
                    <textarea name="ativ_ong" class="w-full p-2 rounded-xl border-2 border-purple-900 h-24 focus:outline-none"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="text" required name="email" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Senha</label>
                    <input type="text" required name="senha" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Confirmar Senha</label>
                    <input type="text" required name="c_senha" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
                </div>
                <button type="submit" class="w-full bg-purple-900 text-white p-2 rounded-xl text-lg font-semibold hover:bg-purple-700">Cadastrar-se</button>
            </form>

            <script>


                $(document).ready(function() {
                    // Máscaras para os campos
                    $('input[name="cnpj_ong"]').mask('00.000.000/0000-00');
                    $('input[name="telefone"]').mask('(00) 00000-0000');

                    
                });


                const addressForm = document.querySelector("#address-form");
                const cepInput = document.querySelector("#cep");
                const addressInput = document.querySelector("#address");
                const cityInput = document.querySelector("#city");
                const neighborhoodInput = document.querySelector("#neighborhood");
                const regionInput = document.querySelector("#region");
                const formInputs = document.querySelectorAll("[data-input]");

                const closeButton = document.querySelector("#close-message");


                // Validar CEP Input
                cepInput.addEventListener("keypress", (e) => {
                const onlyNumbers = /[0-9]|\./;
                const key = String.fromCharCode(e.keyCode);
                if (!onlyNumbers.test(key)) {
                    e.preventDefault();
                    return;
                }
                });

                // Evento para obter endereço
                cepInput.addEventListener("keyup", (e) => {
                const inputValue = e.target.value;
                if (inputValue.length === 8) {
                    getAddress(inputValue);
                }
                });

                // Obter endereço da API
                const getAddress = async (cep) => {
                toggleLoader();
                cepInput.blur();
                const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;
                const response = await fetch(apiUrl);
                const data = await response.json();

                if (data.erro === "true") {
                    if (!addressInput.hasAttribute("disabled")) {
                        toggleDisabled();
                    }
                    addressForm.reset();
                    toggleLoader();
                    toggleMessage("CEP Inválido, tente novamente.");
                    return;
                }

                if (addressInput.value === "") {
                    toggleDisabled();
                }

                addressInput.value = data.logradouro;
                cityInput.value = data.localidade;
                neighborhoodInput.value = data.bairro;
                regionInput.value = data.uf;

                toggleLoader();
                };

                const toggleDisabled = () => {
                if (regionInput.hasAttribute("disabled")) {
                    formInputs.forEach((input) => {
                        input.removeAttribute("disabled");
                    });
                } else {
                    formInputs.forEach((input) => {
                        input.setAttribute("disabled", "disabled");
                    });
                }
                };

                const toggleLoader = () => {
                const fadeElement = document.querySelector("#fade");
                const loaderElement = document.querySelector("#loader");
                fadeElement.classList.toggle("hide");
                loaderElement.classList.toggle("hide");
                };

                const toggleMessage = (msg) => {
                const fadeElement = document.querySelector("#fade");
                const messageElement = document.querySelector("#message");
                const messageTextElement = document.querySelector("#message p");

                messageTextElement.innerText = msg;

                fadeElement.classList.toggle("hide");
                messageElement.classList.toggle("hide");
                };

                closeButton.addEventListener("click", () => toggleMessage());

                addressForm.addEventListener("submit", (e) => {
                e.preventDefault();
                toggleLoader();
                setTimeout(() => {
                    toggleLoader();
                    toggleMessage("Em breve você receberá um email ou ligação da nossa equipe...");
                    addressForm.reset();
                    toggleDisabled();
                }, 1000);
                });

                const countElement = document.getElementById("count");
                const finalCount = 20000;
                const duration = 10000;
                const interval = 50;
                const step = finalCount / (duration / interval);
                let currentCount = 0;

                const updateCount = () => {
                currentCount += step;
                if (currentCount >= finalCount) {
                    currentCount = finalCount;
                    clearInterval(counterInterval);
                    countElement.classList.add("blink");
                }
                countElement.textContent = Math.round(currentCount);
                };

                const counterInterval = setInterval(updateCount, interval);
            </script>
            @if ($errors->any())
            <div class="mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <img src="{{ asset('images/signInBack.png') }}" alt="Background" class="absolute inset-0 w-full h-full  z-0">
    </div>
</body>

</html>