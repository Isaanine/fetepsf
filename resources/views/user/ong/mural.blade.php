<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-white overflow-x-hidden">
    <header class="bg-white shadow-lg">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>
            <nav id="navbar" class="hidden md:flex items-center space-x-12 gap-14">
                <a href="/ong/account"
                    class="text-customBlue text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Meus
                    Dados</a>
                <a href="/ong/mural"
                    class="text-customRed text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Mural</a>
                <a href="/ong/courses"
                    class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Cursos</a>
                <a href="/ong/volunteer"
                    class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Voluntários</a>
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
            <a href="/ong/account" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Meus
                Dados</a>
            <a href="/ong/mural" class="text-customRed text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/ong/courses" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Cursos</a>
            <a href="/ong/volunteer"
                class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Voluntários</a>
        </div>
    </header>

    <!--RULE MURAL-->
    <div class="w-full h-80  flex justify-center items-center my-14">
        <div id="gridCourses"
            class="my-20 bg-customBrown md:w-8/12 w-full rounded-4xl p-10 flex flex-wrap justify-between h-10/12">
            <div class="w-1/2">
                <p class="font-itim text-3xl md:text-6xl font-bold">Mural</p>
            </div>
            <p class="font-itim text-2xl mt-5 md:text-4xl ">Para postar seu recado, preencha corretamente todos os
                <br>campos, logo abaixo:
            </p>
        </div>
    </div>
    <!--End RULE MURAL-->

    <!-- Form Mural-->
    <div class="w-full h-80 shadow-sm flex justify-center items-center my-14 ">
        <div class="container sm:mx-24 p-6">
            <form action="/createmural" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="nome" class="block text-black text-lg font-bold mb-2">Nome</label>
                    <input type="text" id="nome" name="Nome"
                        class="shadow appearance-none border-4 rounded-full border-customRed w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-black text-lg font-bold mb-2">Email</label>
                    <input type="email" id="email" name="Email"
                        class="shadow appearance-none border-4 rounded-full border-customRed w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="assunto" class="block text-black text-lg font-bold mb-2">Assunto</label>
                    <input type="text" id="assunto" name="Assunto"
                        class="shadow appearance-none border-4 rounded-full border-customRed w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="mensagem" class="block text-black text-lg font-bold mb-2">Deixe o seu Recado</label>
                    <textarea name="Recado"
                        class="mt-1 block w-full border-4 border-customRed  rounded-xl px-6 py-3"></textarea>
                </div>
                <button type="submit"
                    class="bg-customRed hover:bg-red-700 text-white font-bold py-2 px-10 rounded-full focus:outline-none focus-shadow-outline">Enviar</button>
            </form>
        </div>
    </div>
    <!-- END Form Mural-->

    <!--Search Bar-->
    <main class="p-6">
        <div class="bg-customRed rounded-2xl p-4 max-w-5xl mx-auto flex flex-col shadow-lg">
            <h2 class="text-white text-2xl font-bold">Mural</h2>
            <h3 class="text-white text-xl text-center font-bold">Mensagens do Mural</h3>
            <div class="mt-4 w-full">
                <label for="search" class="text-white font-bold">Para buscar um recado, preencha o campo abaixo:</label>
                <div class="flex flex-row">
                    <input type="text" id="search" name="search" class="w-full mt-2 p-2 rounded"
                        placeholder="Palavra chave: Nome do postador, email e título da postagem">
                    <button
                        class="mt-2 p-2 bg-customBlue2 text-white rounded hover:bg-blue-900 flex items-end">Pesquisar</button>
                </div>
            </div>
        </div>
        <!-- END Search Bar-->
        <!-- Comentarios -->



    @if (session('mural'))
        
        
        @php
            $mural = session('mural');
            $totalItems = count($mural);
           if($totalItems == null){
                $totalItems = 0;
           }
        @endphp
   

        
        @if ($totalItems > 0)
            <div id="mural-container">
                @foreach ($mural->take(7) as $fil)
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
        @endif

    </main>
    <!-- footer -->
    <footer class="w-full mt-auto">
        <img class="w-full h-auto" src="http://127.0.0.1:8000/images/Finalback-Red.png" alt="">
    </footer>
</body>

</html>