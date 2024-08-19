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
                <a href="#" class="text-customRed text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Meus
                    Dados</a>
                <a href="/prof/mural"
                    class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Mural</a>
                <a href="/prof/chat"
                    class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Chat</a>
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
    <div id="modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden bg-gray-800 bg-opacity-75 fixed top-0 right-0 left-0 z-50 justify-center items-center w-screen md:inset-0 h-screen max-h-full">
        <div class="relative p-8 md:w-8/12 sm:10-12 max-h-full mx-auto">
            <!-- Modal content -->
            <div class="relative bg-customBrown rounded-4xl shadow">
                <!-- Modal header -->
                <div class="flex flex-col items-center justify-center p-4 md:p-5 rounded-t">
                    <h3 class="text-3xl font-bold text-black">
                        Seus Dados
                    </h3>
                    <button type="button" onclick="toggleModal('modal')"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-blue-300 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
                        <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->


                <div id="modal-dados" class="p-8 md:p-10 ">
                    <form
                        action="{{ route('professores.update', ['Id_Professor' => session('professor')->Id_Professor]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @csrf
                        @method('PUT')
                        <div id="modal-dados" class="p-8 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="mb-4">
                                <label for="Nome" class="block mb-1 text-lg font-medium text-black">Nome</label>
                                <input type="text" name="Nome" id="Nm"
                                    value="{{ old('Nome', session('professor')->Nome) }}"
                                    class="bg-white border border-gray-500 text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label for="EmailL" class="block mb-1 text-lg font-medium text-black">Email</label>
                                <input type="email" name="Email" id="emil"
                                    value="{{ old('Email', session('professor')->Email) }}"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label for="TelefoneL"
                                    class="block mb-1 text-lg font-medium text-black">Telefone</label>
                                <input type="text" name="Telefone" id="tel"
                                    value="{{ old('Telefone', session('professor')->Telefone) }}"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label for="FormacaoL"
                                    class="block mb-1 text-lg font-medium text-black">Formação</label>
                                <input type="text" name="Formacao" id="formç"
                                    value="{{ old('Formacao', session('professor')->Formacao) }}"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label for="NascimentoL" class="block mb-1 text-lg font-medium text-black">Data de
                                    Nascimento</label>
                                <input type="text" name="Nascimento" id="nasc"
                                    value="{{ old('Nascimento', session('professor')->Nascimento) }}"
                                    class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                    required />
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row my-5 w-full h-full">
                            <div class="w-full sm:w-1/2 px-4">
                                <div class="mb-4">
                                    @if(session('professor')->Foto)
                                        <img src="{{ asset('storage/' . session('professor')->Foto) }}"
                                            alt="Foto do Professor" class="w-40 h-40 border-4 border-white rounded-full">
                                    @endif
                                    <label for="Foto" class="block mb-1 text-lg font-medium text-black">Foto</label>
                                    <input type="file" name="Foto" id="foto"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-5/6 p-2.5" />
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 px-4">
                                <div class="mb-4">
                                    @if(session('professor')->FotoBack)
                                        <img src="{{ asset('storage/' . session('professor')->FotoBack) }}"
                                            alt="Foto do Professor" class="w-40 h-40 border-4 border-white rounded-lg">
                                    @endif
                                    <label for="FotoBack" class="block mb-1 text-lg font-medium text-black">Foto de
                                        Trás</label>
                                    <input type="file" name="FotoBack" id="fotoBack"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-5/6 p-2.5" />
                                </div>
                            </div>
                        </div>


                        <button type="submit"
                            class="col-span-2 w-full text-white bg-customRed hover:bg-customRedDark focus:ring-4 focus:outline-none focus:ring-customRedDark font-medium rounded-lg text-lg px-5 py-2.5 text-center">
                            Atualizar
                        </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!--END Main modal -->
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
                        <button class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200"
                            onclick="toggleModal('modal')">
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
                @if (session('professor')->FotoBack)
                    <img src="{{ asset('storage/' . session('professor')->FotoBack) }}"
                        class="w-full h-full rounded-tl-lg rounded-tr-lg">
                @else
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg"
                        class="w-full h-full rounded-tl-lg rounded-tr-lg">
                @endif
            </div>
            <div class="flex flex-col ml-20 -mt-20">

                <img src="{{ asset('storage/' . session('professor')->Foto) }}" alt="Foto do Professor"
                    class="w-40 h-40 border-4 border-white rounded-full">

                <div class="flex items-start space-x-2 mt-2">
                    <p class="text-2xl">{{session('professor')->Nome}}</p>
                </div>

            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
    </div>
    <!-- END Home Profile-->



    <!-- Main modal -->

    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden bg-gray-800 bg-opacity-75 fixed top-0 right-0 left-0 z-50 justify-center items-center w-screen md:inset-0 h-screen max-h-full">
        <div class="relative p-8 md:w-8/12 sm:10-12 max-h-full mx-auto">
            <!-- Modal content -->
            <div class="relative bg-customBrown rounded-4xl shadow ">
                <!-- Modal header -->
                <div class="flex flex-col items-center justify-center p-4 md:p-5 rounded-t">
                    <h3 class="text-3xl font-bold text-black ">
                        Seus Dados
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-blue-300 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="authentication-modal">
                        <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-8 md:p-10">
                    <form class="" action="#">
                        <div class="mb-1 flex flex-col justify-start">
                            <label for="codigoL" class="block mb-0.5 text-lg font-medium text-black">Código</label>
                            <label class="block text-lg font-medium text-black">XXXXXX</label>
                        </div>
                        <div class="mb-4">
                            <label for="Nome" class="block mb-1 text-lg font-medium text-black">Nome</label>
                            <input type="text" name="Nome" id="Nm"
                                class="bg-white border border-gray-500 text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="EmailL" class="block mb-1 text-lg font-medium text-black">Email</label>
                            <input type="email" name="Email" id="emil"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5 "
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="TelefoneL" class="block mb-1 text-lg font-medium text-black">Telefone</label>
                            <input type="text" name="Telefone" id="tel"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5 "
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="formaçãoL" class="block mb-1 text-lg font-medium text-black">Formação</label>
                            <input type="text" name="formação" id="formç"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5 "
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="DTNL" class="block mb-1 text-lg font-medium text-black">Data de
                                Nascimento</label>
                            <input type="text" name="date" id="nasc"
                                class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5 "
                                required />
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-customRed hover:bg-customRedDark focus:ring-4 focus:outline-none focus:ring-customRedDark font-medium rounded-lg text-lg px-5 py-2.5 text-center">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--END Main modal -->

    <!--Data teacher-->
    @if(session('professor'))

        <div class="w-full h-96 flex justify-center items-center my-14">
            <div id="gridCourses"
                class="my-20 bg-customBrown md:w-8/12 w-full rounded-4xl p-10 flex flex-wrap justify-between">
                <div class="w-full md:w-1/2">
                    <p class="font-itim text-2xl font-bold h-20 ">Nome: {{session('professor')->Nome}}</p>
                    <p class="font-itim text-2xl font-bold h-20">Email: {{session('professor')->Email}}</p>
                    <p class="font-itim text-2xl font-bold h-20">Data de Nascimento: {{session('professor')->Nascimento}}
                    </p>
                </div>
                <div class="w-full md:w-1/2">
                    <p class="font-itim text-2xl font-bold h-20">Telefone: {{session('professor')->Telefone}}</p>
                    <p class="font-itim text-2xl font-bold h-20">Formação: {{session('professor')->Formacao}}</p>
                </div>
            </div>
        </div>
    @endif
    <!--End Data teacher-->

    <!--My Courses-->
    <!-- Cursos e Professores Section -->
    <section class=" py-10">
            <div class="container mx-auto flex flex-col lg:flex-row lg:space-x-8">
                <!-- Cursos Ofertados -->
                <div class="w-full lg:w-2/3 bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold mb-4">Cursos Ofertados</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                        <div class="bg-gray-300 p-4 rounded-lg">Imagem do Curso</div>
                        <div class="bg-gray-300 p-4 rounded-lg">Imagem do Curso</div>
                        <div class="bg-gray-300 p-4 rounded-lg">Imagem do Curso</div>
                        <div class="bg-gray-300 p-4 rounded-lg">Imagem do Curso</div>
                        <div class="bg-gray-300 p-4 rounded-lg">Imagem do Curso</div>
                        <div class="bg-gray-300 p-4 rounded-lg">Imagem do Curso</div>
                        <div class="bg-gray-300 p-4 rounded-lg">Imagem do Curso</div>
                        <div class="bg-gray-300 p-4 rounded-lg">Imagem do Curso</div>
                        <div class="bg-gray-300 p-4 rounded-lg">Imagem do Curso</div>
                    </div>
                </div>

                <!-- Professores -->
                <div class="w-full lg:w-1/3 bg-white p-6 rounded-lg shadow-lg mt-6 lg:mt-0">
                    <h4 class="text-xl font-bold mb-4">Professores</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <img src="path/to/professor.png" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Nome XXXXXXXXX</span>
                        </li>
                        <li class="flex items-center">
                            <img src="path/to/professor.png" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Nome XXXXXXXXX</span>
                        </li>
                        <li class="flex items-center">
                            <img src="path/to/professor.png" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Nome XXXXXXXXX</span>
                        </li>
                        <li class="flex items-center">
                            <img src="path/to/professor.png" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Nome XXXXXXXXX</span>
                        </li>
                        <li class="flex items-center">
                            <img src="path/to/professor.png" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Nome XXXXXXXXX</span>
                        </li>
                        <li class="flex items-center">
                            <img src="path/to/professor.png" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Nome XXXXXXXXX</span>
                        </li>
                        <li class="flex items-center">
                            <img src="path/to/professor.png" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Nome XXXXXXXXX</span>
                        </li>
                        <li class="flex items-center">
                            <img src="path/to/professor.png" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Nome XXXXXXXXX</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

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