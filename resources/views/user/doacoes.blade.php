<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @vite('resources/css/app.css')
    <script src=" {{ asset('js/script.js') }} "></script>

</head>

<body class="bg-gray-100 overflow-x-hidden">
    <header class="bg-white  ">
        <div class="flex items-center justify-between ">
            <div id="logo" class="flex items-center bg-customGreen rounded-br-only">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class=" pl-5 pb-2 pr-7 pt-1">
            </div>

            <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                <a href="{{ url('/')}}#" class="text-customBlue  text-2xl font-itim hover:text-green-600 hover:underline hover:pb-3 ">Home</a>
                <a href="{{ url('/')}}#aboutus" class="text-customBlue text-2xl font-itim hover:text-green-600 hover:underline hover:pb-3">Sobre nós</a>
                <a href="{{ url('/')}}#sponsors" class="text-customBlue text-2xl font-itim hover:text-green-600 hover:underline hover:pb-3">Parcerias</a>
                <a href="#doacao" class="text-customBlue text-2xl font-itim hover:text-green-600 hover:underline hover:pb-3">Doações</a>
                <a href="#voluntario" class="text-customGreen text-2xl font-itim hover:text-green-600 hover:underline hover:pb-3">Voluntários</a>
            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-green-600 ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconGreen.png') }}" alt="">
                </a>
                <a id="button" href="{{ url('/signup')}}" class="bg-customGreen ml-3 font-itim text-xl text-white px-3 py-1 rounded-full hover:bg-green-900">Sign up</a>
            </div>

            <div id="mobile-nav" class="md:hidden mr-5 ">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskGreen.png') }}" alt="">
                </button>
            </div>

        </div>


        <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
            <a href="{{ url('/')}}" class="text-customBlue text-lg font-itim py-2  hover:text-green-600">Home</a>
            <a href="{{ url('/')}}#aboutus" class="block text-customBlue text-lg font-itim py-2  hover:text-green-600">Sobre nós</a>
            <a href="{{ url('/')}}#sponsors" class="block text-customBlue text-lg font-itim py-2 hover:text-green-600">Parcerias</a>
            <a href="#doacao" class="block text-green-500 text-lg font-itim py-2 hover:text-green-600">Doações</a>
            <a href="#voluntario" class="block text-customBlue text-lg font-itim py-2 hover:text-green-600">Voluntários</a>
            <a href="{{url('/signin')}}" class="block  text-customBlue text-lg font-itim py-2 hover:text-green-600">Entrar</a>
            <a href="{{ url('/signup')}}" class="block  text-customBlue text-lg font-itim py-2 hover:text-green-600">Registrar-se</a>
        </div>
    </header>

    <div id="voluntario" class="flex flex-col items-center w-auto justify-center mb-20">
        <h1 class="text-3xl font-bold text-customGreen font-itim mt-8 mb-8">Como apoiar</h1>
        <div class="grid grid-cols-1 w-auto mx-auto md:grid-cols-2 gap-8">
            <div class="relative group">
                <div class="bg-customGreen text-white rounded-lg p-8 shadow-xl transform transition-transform group-hover:-translate-y-3">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                            <!-- Ícone de conversa -->
                            <path d="M19 0H5C2.238 0 0 2.238 0 5v14c0 2.762 2.238 5 5 5h14c2.762 0 5-2.238 5-5V5c0-2.762-2.238-5-5-5zm0 18H5c-1.103 0-2-.897-2-2V5c0-1.103.897-2 2-2h14c1.103 0 2 .897 2 2v11c0 1.103-.897 2-2 2zm-7-7h-2V9h2v2zm4 0h-2V9h2v2zm-8 0H6V9h2v2z" />
                        </svg>
                    </div>
                    <h2 class="text-center text-xl font-itim">Doação Monetária</h2>
                </div>
            </div>
            <div class="relative group">
                <div class="bg-customGreen text-white rounded-lg p-8 shadow-xl transform transition-transform group-hover:-translate-y-3">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                            <!-- Ícone de conversa -->
                            <path d="M19 0H5C2.238 0 0 2.238 0 5v14c0 2.762 2.238 5 5 5h14c2.762 0 5-2.238 5-5V5c0-2.762-2.238-5-5-5zm0 18H5c-1.103 0-2-.897-2-2V5c0-1.103.897-2 2-2h14c1.103 0 2 .897 2 2v11c0 1.103-.897 2-2 2zm-7-7h-2V9h2v2zm4 0h-2V9h2v2zm-8 0H6V9h2v2z" />
                        </svg>
                    </div>
                    <h2 class="text-center text-xl font-itim">Deduza do I.R. da sua empresa</h2>
                </div>
            </div>
            <div class="relative group">
                <div class="bg-customGreen text-white rounded-lg p-8 shadow-xl transform transition-transform group-hover:-translate-y-3">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                            <!-- Ícone de conversa -->
                            <path d="M19 0H5C2.238 0 0 2.238 0 5v14c0 2.762 2.238 5 5 5h14c2.762 0 5-2.238 5-5V5c0-2.762-2.238-5-5-5zm0 18H5c-1.103 0-2-.897-2-2V5c0-1.103.897-2 2-2h14c1.103 0 2 .897 2 2v11c0 1.103-.897 2-2 2zm-7-7h-2V9h2v2zm4 0h-2V9h2v2zm-8 0H6V9h2v2z" />
                        </svg>
                    </div>
                    <h2 class="text-center text-xl font-itim">Doação em produtos</h2>
                </div>
            </div>
            <div class="relative group">
                <div class="bg-customGreen text-white rounded-lg p-8 shadow-xl transform transition-transform group-hover:-translate-y-3">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                            <!-- Ícone de conversa -->
                            <path d="M19 0H5C2.238 0 0 2.238 0 5v14c0 2.762 2.238 5 5 5h14c2.762 0 5-2.238 5-5V5c0-2.762-2.238-5-5-5zm0 18H5c-1.103 0-2-.897-2-2V5c0-1.103.897-2 2-2h14c1.103 0 2 .897 2 2v11c0 1.103-.897 2-2 2zm-7-7h-2V9h2v2zm4 0h-2V9h2v2zm-8 0H6V9h2v2z" />
                        </svg>
                    </div>
                    <h2 class="text-center text-xl font-itim">Ajude na divulgação de uma ONG</h2>
                </div>
            </div>
        </div>
    </div>


    <div id="doacao" class="flex items-center justify-center mx-5 my-10">
        <form id="donation-form">
            <div class="bg-white p-8 rounded-lg shadow-md mx-auto w-auto">
                <h2 class="text-2xl font-bold text-center text-customGreen font-itim mb-6">Doação Monetária</h2>
                <div class="flex mx-auto justify-between mb-4">
                    <button type="button" class="value-button bg-white border border-green-500 text-black font-itim px-4 py-2 rounded-md hover:bg-green-500 hover:text-white" data-value="15">R$ 15</button>
                    <button type="button" class="value-button bg-white border border-green-500 text-black font-itim px-4 py-2 rounded-md hover:bg-green-500 hover:text-white" data-value="30">R$ 30</button>
                    <button type="button" class="value-button bg-white border border-green-500 text-black font-itim px-4 py-2 rounded-md hover:bg-green-500 hover:text-white" data-value="50">R$ 50</button>
                    <button type="button" class="value-button bg-white border border-green-500 text-black font-itim px-4 py-2 rounded-md hover:bg-green-500 hover:text-white" data-value="100">R$ 100</button>
                    <button type="button" class="value-button bg-white border border-green-500 text-black font-itim px-4 py-2 rounded-md hover:bg-green-500 hover:text-white" data-value="200">R$ 200</button>
                    <button type="button" id="other-value-btn" class="bg-white border border-green-500 text-black font-itim px-4 py-2 rounded-md hover:bg-green-500 hover:text-white">Outro valor</button>
                </div>
                <div id="other-value-input-container" class="hidden mb-4">
                    <input type="number" id="other-value-input" placeholder="Digite o valor" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                    <button type="button" id="confirm-other-value-btn" class="bg-green-400 text-white font-itim px-4 py-2 rounded-md w-full">Confirmar</button>
                    <button type="button" id="cancel-other-value-btn" class="bg-red-600 mt-2 text-white font-itim px-4 py-2 rounded-md w-full">Cancelar</button>
                </div>
                <h3 class="text-lg font-semibold text-center text-gray-700 mb-4">Forma de pagamento</h3>
                <div id="pix" class="border border-green-400 p-4 text-center rounded-md mb-4">
                    <h4 class="text-black font-itim font-bold mb-2">Pix</h4>
                    <h3 class="mb-2">Chave Pix Email - Emailpadrao123@gmail.com</h3>
                    <h3 class="font-bold font-itim mb-2">Ou</h3>
                    <button class="bg-customGreen text-white w-full py-3 rounded-md font-bold font-itim text-lg">Gerar Pix</button>
                </div>
                <div id="debito" class="hidden border border-green-400 p-4 rounded-md mb-4">
                    <h4 class="text-black font-itim font-bold mb-2">Cartão de Débito</h4>
                    <input type="text" placeholder="Número do Cartão" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                    <input type="text" placeholder="Nome do Titular" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                    <input type="text" placeholder="Data de Validade (MM/AA)" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                    <input type="text" placeholder="Código de Segurança (CVV)" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                </div>
                <div id="credito" class="hidden border border-green-400 p-4 rounded-md mb-4">
                    <h4 class="text-black font-itim font-bold mb-2">Cartão de Crédito</h4>
                    <input type="text" placeholder="Número do Cartão" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                    <input type="text" placeholder="Nome do Titular" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                    <input type="text" placeholder="Data de Validade (MM/AA)" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                    <input type="text" placeholder="Código de Segurança (CVV)" class="border border-green-400 rounded-md w-full py-2 px-3 mb-2">
                </div>
                <div id="boleto" class="hidden border border-green-400 p-4 rounded-md mb-4">
                    <h4 class="text-black font-itim font-bold mb-2">Boleto</h4>
                    <button class="bg-customGreen text-white w-full py-3 rounded-md font-bold font-itim text-lg">Gerar Boleto</button>
                </div>
                <button id="debito-btn" type="button" class="bg-white border border-green-500 text-black font-itim w-full py-2 rounded-md mb-2 hover:bg-green-500 hover:text-white">Cartão de Debito</button>
                <button id="credito-btn" type="button" class="bg-white border border-green-500 text-black font-itim w-full py-2 rounded-md mb-2 hover:bg-green-500 hover:text-white">Cartão de Credito</button>
                <button id="boleto-btn" type="button" class="bg-white border border-green-500 text-black font-itim w-full py-2 rounded-md mb-2 hover:bg-green-500 hover:text-white">Boleto</button>
                <button id="pix-btn" type="button" class="hidden bg-white border border-green-500 text-black font-itim w-full py-2 rounded-md mb-2 hover:bg-green-500 hover:text-white">Pix</button>
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center text-gray-700">
                        <input type="checkbox" class="form-checkbox text-green-500 mr-2">
                        Cobrir custo da Transação
                    </label>
                    <span class="text-xl font-bold font-itim text-gray-700" id="donation-amount">R$ 100</span>
                </div>
                <button type="submit" class="hidden bg-customGreen text-white w-full py-3 rounded-md font-bold font-itim text-lg" id="submit-donation">Doar</button>
            </div>
        </form>
    </div>



    <div class="flex flex-col justify-center items-center mb-5 ">

        <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:gap-20  rounded-lg h-5/6 w-9/12 ">

            <div class="flex flex-col space-y-6 flex-grow">
                <form action="">
                    <label class="block">
                        <span class="block text-lg font-bold text-gray-700">Nome</span>
                        <input type="text" class="mt-1 block w-full border-4 border-customGreen rounded-xl px-6 py-3">
                    </label>
                    <label class="block">
                        <span class="mt-2 block text-lg font-bold text-gray-700">Email</span>
                        <input type="email" class="mt-1 block w-full border-4 border-customGreen rounded-xl px-6 py-3">
                    </label>
                    <label class="block">
                        <span class=" mt-2  block text-lg font-bold text-gray-700">Assunto</span>
                        <input type="text" class="mt-1 block w-full border-4 border-customGreen rounded-xl px-6 p-3">
                    </label>
                    <label class="block">
                        <span class="mt-2  block text-lg font-bold text-gray-700">Sua mensagem</span>
                        <textarea class="mt-1 block w-full border-4 border-customGreen  rounded-xl px-6 py-3"></textarea>
                    </label>
                    <button class="bg-customGreen text-white font-itim rounded-xl px-6 py-3 mt-4 self-start hover:bg-purple-900">Enviar</button>
            </div>


            <div class="flex flex-col flex-grow md:ml-10 md:w-52">
                <h2 class="text-2xl  text-customGreen">Entre em contato</h2>
                <p class="text-xl mt-5"> Se você tiver dúvidas, sugestões ou reclamações sobre o site, entre em contato conosco pelo e-mail xxxxx@gmail.com. Para dúvidas relacionadas a uma das organizações, consulte as informações de contato disponíveis na página de perfil de cada ONG.</p>
            </div>
            </form>
        </div>
    </div>
    </div>




    <footer class="w-full mt-auto">
        <img class="w-full h-auto" src="{{ asset('images/footerGreen.png') }}" alt="">
    </footer>









</body>

</html>