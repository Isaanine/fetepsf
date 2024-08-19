<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 overflow-x-hidden margin-auto">
    <!-- Header  -->
    <header class="bg-white shadow-lg">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>
            <nav id="navbar" class="hidden md:flex items-center space-x-12 gap-14">
                <a href="/aluno/account" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Meus Dados</a>
                <a href="/aluno/mural" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Mural</a>
                <a href="/aluno/chat" class="text-customRed text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Chat</a>
            </nav>
            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3">
                <a href="#" class="text-gray-600 hover:text-customRed">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                </a>
            </div>
            <div id="mobile-nav" class="md:hidden mr-5">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden bg-white py-2 px-4">
            <a href="/aluno/account" class="block text-customBlue text-lg font-itim py-1 hover:text-customRed">Meus Dados</a>
            <a href="/aluno/mural" class="text-customBlue text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/aluno/chat" class="block text-customRed text-lg font-itim py-1 hover:text-customRed">Chat</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- Search -->
    <div class="bg-red-400">
        <div class="flex items-center justify-between p-4">
            <div class="flex flex-row">
                <h1 class="text-black font-bold text-lg md:text-xl">CHAT </h1>
                <img src="{{ asset('images/icons/ChatIcon.png') }}" alt="Logo" class=" w-5 h-5 md:h-8 md:w-8 ml-2">
            </div>
            <input type="text" placeholder="Pesquisar"
                class="border border-black rounded-full px-10 py-2  focus:outline-none focus:ring-2  w-52 md:w-96">
            <a href="" class="text-gray-600 hover:text-purple-900 ">
                <img src="{{ asset('images/icons/EditIcon.png') }}" alt="Logo" class="w-7 h-7 md:h-8 md:w-8">
            </a>
        </div>
    </div>
    <!-- END Search -->

    <!-- Modal content -->
    <div class="relative bg-gray-100 w-full h-full flex flex-col">
        <!-- Header do chat -->
        <div class="flex items-center bg-white h-12 flex-shrink-0">
            <a href="/aluno/list" type="button" class="text-gray-400 bg-transparent ml-5 hover:bg-blue-300 rounded-lg text-sm w-8 h-8">
                <img src="{{ asset('images/icons/left-arrow.png') }}" alt="Logo" class="w-7 h-7">
            </a>
            <div class="flex items-center ml-4">
                <div class="border-2 rounded-full border-black w-10 h-10 flex justify-center items-center">
                    <img src="{{ asset('images/homem.png') }}" alt="Logo"
                        class="rounded-full w-8 h-8 object-cover">
                </div>
                <h2 class="text-xl font-bold ml-2">Carlos</h2>
            </div>
        </div>

        <!-- Conteúdo do chat, com mensagens -->
        <div class="flex-1 overflow-y-auto p-4">
            <!-- Exemplo de mensagens no chat -->
            <div class="flex justify-start mb-4 mt-4">
                <div class="border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                    <img src="{{ asset('images/homem.png') }}" alt="Logo"
                        class="rounded-full w-8 h-8 object-cover">
                </div>
                <div class="bg-purple-200 rounded-lg shadow p-3 ml-2">
                    <p class="text-gray-700 text-sm">Oi, tudo bem?</p>
                </div>
            </div>
            <div class="flex justify-end mb-4">
                <div class="bg-white rounded-lg shadow p-3 mr-3 text-white">
                    <p class="text-gray-700 text-sm">Oi, tudo sim, e contigo?</p>
                </div>
                <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                    <img src="{{ asset('images/mulher.png') }}" alt="Logo"
                        class="rounded-full w-8 h-8 object-cover">
                </div>
            </div>
            <div class="flex justify-start mb-4 mt-4">
                <div class="border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                    <img src="{{ asset('images/homem.png') }}" alt="Logo"
                        class="rounded-full w-8 h-8 object-cover">
                </div>
                <div class="bg-purple-200 rounded-lg shadow p-3 ml-2">
                    <p class="text-gray-700 text-sm">Tudo certo. Gostaria de avisar que faltarei na aula de amanhã</p>
                </div>
            </div>
            <div class="flex justify-end mb-4">
                <div class="bg-white rounded-lg shadow p-3 mr-3 text-white">
                    <p class="text-gray-700 text-sm">Obrigada pelo aviso, professor!</p>
                </div>
                <div class=" border-2 rounded-full border-black w-9 h-9 flex justify-center items-center">
                    <img src="{{ asset('images/mulher.png') }}" alt="Logo"
                        class="rounded-full w-8 h-8 object-cover">
                </div>
            </div>
            <!-- Mais mensagens... -->
        </div>

        <!-- Input de mensagem e botões -->
        <footer class="bg-white p-4 flex items-center justify-end fixed bottom-0 left-0 w-full">
            <button class="p-2 rounded-full bg-gray-200 mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
            <div class="flex-1 relative">
                <input type="text" placeholder="Uma mensagem..."
                    class="block w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 space-x-2">
                    <button class="p-2 rounded-full bg-transparent">
                        <img src="{{ asset('images/icons/emojiIcon.png') }}" alt="Logo" class="w-5 h-5">
                    </button>
                    <button class="p-2 rounded-full bg-transparent">
                        <img src="{{ asset('images/icons/letterAIcon.png') }}" alt="Logo" class="w-5 h-5">
                    </button>
                    <button class="p-2 rounded-full bg-transparent index">
                        <img src="{{ asset('images/icons/uploadIcon.png') }}" alt="Logo" class="w-5 h-5">
                    </button>
                </div>
            </div>
            <button
                class="ml-2 p-2 text-white bg-blue-500 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full">
                <img src="{{ asset('images/icons/right-arrow.png') }}" alt="Logo" class="w-5 h-5">
            </button>
        </footer>
    </div>



</body>

</html>