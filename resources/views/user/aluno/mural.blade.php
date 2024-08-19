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
                <a href="/aluno/mural" class="text-customRed text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Mural</a>
                <a href="/aluno/chat" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Chat</a>
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
            <a href="#" class="block text-customBlue text-lg font-itim py-1 hover:text-customRed">Meus Dados</a>
            <a href="/aluno/mural" class="text-customRed text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/aluno/chat" class="block text-customBlue text-lg font-itim py-1 hover:text-customRed">Chat</a>
        </div>
    </header>


    <!-- End Header -->
    @if (isset($mural))
        
        @endif
        @php
            $totalItems = count($mural);
        @endphp

        @if ($totalItems > 0)
            <div id="mural-container">
                @foreach ($mural->take(7) as $fil)
                    <div class="flex justify-center mt-4 mural-item ">
                        <div class="w-full max-w-5xl rounded-xl bg-gray-100 border-2 border-gray-400 py-6 px-4 sm:px-10">
                            <div class="flex flex-col">
                                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                    <div class="flex flex-row items-center">
                                        <!-- Ícone dos comentários -->
                                        <img src="http://127.0.0.1:8000/images/image-gallery.png" alt="Ícone de comentário"
                                            class="w-12 h-12 mr-4">
                                        <div class="flex flex-col">
                                            <label class="text-lg font-bold text-indigo-900">{{$fil->Assunto}}</label>
                                            <div class="flex flex-row">
                                                <label class="text-black mr-1">Postado por:</label>
                                                <label class="text-green-500 font-bold">{{$fil->Nome}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Linhas horizontais -->
                                <div class="my-4">
                                    <hr class="border-2 border-gray-400">
                                </div>
                                <div class="flex flex-col justify-between mb-4">
                                    <p>{{$fil->Recado}}</p>
                                </div>
                                <!-- Botões do crud -->
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if ($totalItems > 10)
                <!-- Botão ver mais-->
                <div class="flex justify-center mt-6">
                    <button id="load-more" class="bg-blue-500 text-lg text-white rounded-lg px-6 py-2 hover:bg-blue-700">
                        Ver mais...
                    </button>
                </div>

                <div id="more-items" style="display: none;">
                    @foreach ($mural->slice(10) as $fil)
                        <div class="flex justify-center mt-4 mural-item">
                            <div class="w-full max-w-5xl rounded-xl bg-gray-100 border-2 border-gray-400 py-6 px-4 sm:px-10">
                                <div class="flex flex-col">
                                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                        <div class="flex flex-row items-center">
                                            <!-- Ícone dos comentários -->
                                            <img src="http://127.0.0.1:8000/images/image-gallery.png" alt="Ícone de comentário"
                                                class="w-12 h-12 mr-4">
                                            <div class="flex flex-col">
                                                <label class="text-lg font-bold text-indigo-900">{{$fil->Assunto}}</label>
                                                <div class="flex flex-row">
                                                    <label class="text-black mr-1">Postado por:</label>
                                                    <label class="text-green-500 font-bold">{{$fil->Nome}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Linhas horizontais -->
                                    <div class="my-4">
                                        <hr class="border-2 border-gray-400">
                                    </div>
                                    <div class="flex flex-col justify-between mb-4">
                                        <p>{{$fil->Recado}}</p>
                                    </div>
                                    <!-- Botões do crud -->
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @else
            <tr>
                <td colspan="9" style="border: 1px solid #000; background-color: #fff; padding: 10px; border-radius: 15px;">
                    Sem registros!
                </td>
            </tr>
        @endif

   
    <!-- Teacher Footer Image -->
    <footer>
        <div class="max-w-full max-h-20">
            <!-- Image -->
            <img src="{{ asset('images/Finalback-Red.png') }}" alt=""
                class="relative inset-0 w-full h-full object-fit ">
        </div>
    </footer>
    <!-- END Teacher Footer Image -->
</body>

</html>