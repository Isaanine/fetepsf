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
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
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
                <a href="/aluno/mural" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Mural</a>
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
            <a href="#" class="block text-customRed text-lg font-itim py-1 hover:text-customRed">Meus Dados</a>
            <a href="/aluno/mural" class="text-customBlue text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/aluno/chat" class="block text-customBlue text-lg font-itim py-1 hover:text-customRed">Chat</a>
        </div>
    </header>



    <!-- End Header -->
    <!--Home Profile-->
    <div class="h-full bg-gray-100 p-8 ">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div x-data="{ openSettings: false }" class="absolute right-12 mt-4 rounded">
                <button @click="openSettings = !openSettings"
                    class="border border-gray-400 p-2 rounded text-gray-300 hover:text-gray-300 bg-gray-100 bg-opacity-10 hover:bg-opacity-20"
                    title="Settings">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                        </path>
                    </svg>
                </button>
                <div x-show="openSettings" @click.away="openSettings = false"
                    class="bg-white absolute right-0 w-40 py-2 mt-1 border border-gray-200 shadow-2xl"
                    style="display: none;">
                    <div class="py-2 border-b">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Opções</p>
                        <button class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.232 5.232l3.536 3.536M4 20h4.586a1 1 0 00.707-.293l9.414-9.414a1 1 0 00-1.414-1.414L8 18.293A1 1 0 007.293 19H4a1 1 0 01-1-1v-3.586a1 1 0 01.293-.707l9.414-9.414a1 1 0 011.414 1.414L5.414 15.586A1 1 0 005 16v4z" />
                            </svg>
                            <span class="text-sm text-gray-700">Editar Perfil</span>
                        </button>

                    </div>
                    <div class="py-2">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Conta</p>
                        <a href="{{ route('logout') }}">
                            <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M13 5l7 7l-7 7" />
                                    <path d="M5 12h14" />
                                </svg>
                                <span class="text-sm text-gray-700">Sair</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col ml-20 -mt-20">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile.jpg"
                    class="w-40 border-4 border-white rounded-full">
                @if(session('aluno'))
                <div class="flex items-center space-x-2 mt-5">
                    <p class="text-2xl">{{ session('aluno')->Nome }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- END Home Profile-->

   


    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full inset-0 h-screen">
        <div
            class="relative p-5 w-11/12 sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-5/12 mx-auto rounded-lg shadow-lg bg-white overflow-y-auto max-h-[90vh]">
            <!-- Modal content -->
            <div class="flex flex-col items-center justify-center p-4 md:p-5 rounded-t">
                <button type="button"
                    class="absolute top-4 right-4 text-gray-400 bg-transparent hover:bg-blue-300 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center"
                    data-modal-hide="authentication-modal">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <div class="p-2 md:p-8">
                <div class="flex flex-col justify-center">
                    <div class="flex flex-col md:flex-row justify-center items-center">
                        <div class="w-full md:w-1/2 flex flex-col items-center justify-center mt-5 md:mt-0">
                            <div class="bg-gray-200 rounded-lg p-4 h-48 w-full">
                                <h2 class="text-center text-gray-700 font-bold">IMAGEM</h2>
                            </div>
                            <div
                                class="bg-red-500 text-white font-bold py-2 px-4 rounded w-full mt-4 flex justify-center">
                                <p>Nome do Curso</p>
                            </div>
                            <div
                                class="bg-red-500 text-white font-bold py-2 px-4 rounded w-full mt-4 flex justify-center">
                                <p>Horário</p>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 flex flex-col items-center justify-center mt-5 md:mt-0">
                            <div class="flex flex-col w-full md:w-5/6 justify-center items-center">
                                <h2 class="text-xl font-bold mb-4 text-center md:text-left">Informações do curso</h2>
                                <p class="text-gray-700 text-sm break-words flex text-justify">
                                    XXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXXXXX
                                    XXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXXXXX
                                    XXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXXXXX
                                    XXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXXXXX
                                    XXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXXXXX
                                </p>
                            </div>
                            <div class="bg-gray-200 rounded-lg p-4 mt-4 w-full md:w-5/6">
                                <p class="text-gray-700 font-bold">Ong- Crescer Sabendo</p>
                                <div class="h-1 bg-gray-400 rounded-full mt-2 w-full">
                                    <div class="bg-gray-700 rounded-full h-1 mt-2 w-1/2"></div>
                                </div>
                                <p class="text-gray-700 text-sm mt-2">35-40 min - Segunda a Sexta</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full mt-4">
                        BOLETIM
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!--Data teacher-->
    <div class="w-full h-96 shadow-sm flex justify-center items-center my-14">
        <div id="gridCourses"
            class="my-20 bg-customBrown md:w-8/12 w-full rounded-4xl p-10 flex flex-wrap justify-between">
            <div class="w-full md:w-1/2">
                @if(session('aluno'))
                <p class="font-itim text-2xl font-bold h-20 ">Nome: {{session('aluno')->Nome}}</p>
                <p class="font-itim text-2xl font-bold h-20">Email: {{session('aluno')->Email}}</p>
                @if (session('aluno')->id)
                <p class="font-itim text text-2xl font-bold h-20">RM: {{session('aluno')->id}}</p>
                @endif
                @if (session('aluno')->RM)
                <p class="font-itim text text-2xl font-bold h-20">RM: {{session('aluno')->RM}}</p>
                @endif
                @endif

            </div>
            <div class="w-full md:w-1/2">
                @if(session('responsavel'))
                <p class="font-itim text-2xl font-bold h-20">Telefone Resp: {{session('responsavel')->Telefone}}</p>
                <p class="font-itim text-2xl font-bold h-20">Endereço: {{session('responsavel')->Endereco}}</p>
                <p class="font-itim text-2xl font-bold h-20">CEP: {{session('responsavel')->CEP}}</p>
                @endif
            </div>


        </div>
    </div>
    <!--End Data teacher-->

    <!--My Courses-->
    <div class="flex flex-wrap justify-between mx-5">
        <!-- Meus Cursos -->
        <div id="Pt1" class="w-full lg:w-7/12 border-2 border-black rounded-4xl mx-7 md:mx-14 my-10">
            <div class="my-5 mx-5 md:mx-10 max-w-full flex justify-between">
                <p class="font-itim text-black text-xl md:text-2xl">Meus Cursos</p>
                <a class="font-itim underline underline-offset-2 text-sm md:text-lg">Ver todos</a>
            </div>
            <div id="gridCourses" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 my-8">
                <!-- Content -->
                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-4 my-5">
                    <div class="border-2 rounded-xl border-black w-40 sm:w-52 h-26 flex justify-center align-center">
                        <div class="flex flex-col justify-center w-32 sm:w-40 h-26">
                            <img src="{{ asset('images/icons/ImageIconBrown.png') }}" alt=""
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>
                <!-- Repetir o conteúdo conforme necessário -->
            </div>
        </div>
        <!-- Fim Meus Cursos -->

        <!-- ONGs -->
        <div id="Pt2" class="w-full lg:w-3/12 border-2 border-black rounded-4xl mx-7 md:mx-14 my-10">
            <div class="my-5 mx-5 md:mx-10 max-w-full flex justify-center">
                <p class="font-itim text-black text-2xl md:text-4xl">Ongs</p>
            </div>
            <div id="gridCourses" class="flex flex-col justify-center items-center my-8">
                <!-- Content -->
                <label class="relative flex items-center mb-4">
                    <span class="mr-2">
                        <div class="border-2 rounded-full border-black w-10 sm:w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 sm:w-10 h-8 sm:h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-sm sm:text-lg">Nome XXXXXXXXXXXXXX</p>
                </label>
                <!-- Repetir o conteúdo conforme necessário -->

                <label class="relative flex items-center mb-4">
                    <span class="mr-2">
                        <div class="border-2 rounded-full border-black w-10 sm:w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 sm:w-10 h-8 sm:h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-sm sm:text-lg">Nome XXXXXXXXXXXXXX</p>
                </label>

                <label class="relative flex items-center mb-4">
                    <span class="mr-2">
                        <div class="border-2 rounded-full border-black w-10 sm:w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 sm:w-10 h-8 sm:h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-sm sm:text-lg">Nome XXXXXXXXXXXXXX</p>
                </label>

                <label class="relative flex items-center mb-4">
                    <span class="mr-2">
                        <div class="border-2 rounded-full border-black w-10 sm:w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 sm:w-10 h-8 sm:h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-sm sm:text-lg">Nome XXXXXXXXXXXXXX</p>
                </label>

                <label class="relative flex items-center mb-4">
                    <span class="mr-2">
                        <div class="border-2 rounded-full border-black w-10 sm:w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 sm:w-10 h-8 sm:h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-sm sm:text-lg">Nome XXXXXXXXXXXXXX</p>
                </label>

                <label class="relative flex items-center mb-4">
                    <span class="mr-2">
                        <div class="border-2 rounded-full border-black w-10 sm:w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 sm:w-10 h-8 sm:h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-sm sm:text-lg">Nome XXXXXXXXXXXXXX</p>
                </label>

                <label class="relative flex items-center mb-4">
                    <span class="mr-2">
                        <div class="border-2 rounded-full border-black w-10 sm:w-12 flex justify-center">
                            <img src="{{ asset('images/icons/ImageIcon.png') }}" alt="Logo"
                                class="rounded-full w-8 sm:w-10 h-8 sm:h-10 object-cover">
                        </div>
                    </span>
                    <p class="font-itim text-black text-sm sm:text-lg">Nome XXXXXXXXXXXXXX</p>
                </label>
            </div>
        </div>
        <!-- Fim ONGs -->
    </div>
    <!-- END ONGS NAMES -->

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