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
                <a href="#" class="text-customRed text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Meus Dados</a>
                <a href="/prof/mural" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Mural</a>
                <a href="/prof/chat" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Chat</a>
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
            <a href="3" class="block text-customRed text-lg font-itim py-1 hover:text-customRed">Meus Dados</a>
            <a href="/prof/mural" class="text-customBlue text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/prof/chat" class="block text-customBlue text-lg font-itim py-1 hover:text-customRed">Chat</a>
        </div>
    </header>

    <!-- End Header -->

    <!-- Search -->
    <div class="bg-red-400 p-4">
        <div class="flex  sm:flex-row items-center justify-between gap-4">
            <!-- Header Section -->
            <div class="flex items-center">
                <h1 class="text-black font-bold text-lg sm:text-xl">CHAT</h1>
                <img src="{{ asset('images/icons/ChatIcon.png') }}" alt="Chat Icon" class="w-5 h-5 sm:w-8 sm:h-8 ml-2">
            </div>
            <!-- Search Input -->
            <input type="text" placeholder="Pesquisar"
                class="border border-black rounded-full px-4 py-2 focus:outline-none focus:ring-2 w-52 sm:w-96">
            <!-- Edit Icon Link -->
            <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900">
                <img src="{{ asset('images/icons/EditIcon.png') }}" alt="Edit Icon" class="w-7 h-7 sm:w-8 sm:h-8">
            </a>
        </div>
    </div>
    <!-- END Search -->



    <div class="container">
        <div class="flex flex-col md:flex-row h-auto w-screen ">
            <!-- Sidebar -->
            <div id="1-contact-list" class=" bg-purple-100 p-4 w-full sm:w-2/4 flex flex-col items-start">
                <p class="font-itim text-4xl text center my-10">Lista de Contatos</p>

                <a href="/prof/chat" class="block mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="border-2 rounded-full border-black w-9 h-9 flex items-center justify-center">
                                <img src="{{ asset('images/mulher.png') }}" alt="Logo"
                                    class="rounded-full w-8 h-8 object-cover">
                            </div>
                        </div>
                        <span class="text-gray-700 font-medium">Marina</span>
                    </div>
                </a>


            </div>
            <div id="2-click" class="bg-red-200 w-screen h-screen sm:flex sm:justify-center sm:items-center hidden ">
                <p class="font-itim text-4xl text-gray-100 text-center">Clique em qualquer contato para conversar
            </div>
        </div>




    </div>
</body>

</html>