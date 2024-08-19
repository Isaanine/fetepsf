<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crescer Sabendo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 overflow-x-hidden">
    <!-- Header  -->
    <header class="bg-white">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center border bg-customYellow rounded-br-only">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="pl-5 pb-2 pr-7 pt-1">
            </div>

            <nav id="navbar" class="hidden md:flex items-center space-x-12 gap-14">
                <a href="/"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Home</a>
                <a href="/#aboutus"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Sobre
                    nós</a>
                <a href="#"
                    class="text-customYellow text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">ONG's</a>
                <a href="#"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Doações</a>
                <a href="#contactus"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Fale
                    Conosco</a>
            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3">
                <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-yellow-600">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconYellow.png') }}" alt="">
                </a>
                <a id="button" href="{{ url('/signup')}}"
                    class="bg-customYellow ml-3 font-itim text-xl text-white px-3 py-1 rounded-full hover:bg-yellow-500">Sign
                    up</a>
            </div>

            <div id="mobile-nav" class="md:hidden ml-5 mr-5">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden bg-white py-2 px-4">
            <a href="{{ url('/home')}}#home"
                class="text-customYellow text-lg font-itim py-2 hover:text-yellow-600">Home</a>
            <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Sobre nós</a>
            <a href="#sponsors" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">ONG's</a>
            <a href="{{ url('/donates')}}#doacao"
                class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Doações</a>
            <a href="#contactus" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Fale
                Conosco</a>
            <a href="{{ url('/signin') }}"
                class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Entrar</a>
            <a href="{{ url('/signup')}}"
                class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Registrar-se</a>
        </div>
    </header>
    <!-- End Header -->

    <div class="h-full bg-gray-100 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div x-data="{ openSettings: false }" class="absolute right-12 mt-4 rounded">
                <!-- Settings Button and Dropdown -->
            </div>
            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center mt-10">

                <div class="w-full max-w-screen-lg mx-auto">
                    <div class="text-center mb-4">
                        <p class="text-2xl font-bold"></p>
                        <div class="flex items-center flex-col ">
                    @if(isset($ong))
             
                <div class="w-full max-w-screen-lg mx-auto">
                    <div class="text-center mb-4">
                        <p class="text-2xl font-bold">{{ $ong->Nome }}</p>
                        <hr class="w-full border-t-4 border-customRed my-4">
                    </div>
                    <div class="text-left mx-4">
                        <p><strong>Email:</strong> {{ $ong->Email }}</p>
                        <p><strong>Telefone:</strong> {{ $ong->Telefone }}</p>
                        <p><strong>Endereço:</strong> {{ $ong->Endereco }}</p>
                        
                    </div>
                    <hr class="w-full border-t-4 border-customRed my-4">

                </div>
                    </div>
                
                @endif
            </div>
               
            </div>
        </div>

        <!-- Ajuda Section -->
        <section class="bg-white py-10 rounded-xl mt-10">
            <div class="container mx-auto text-center ">
                <h3 class="text-xl font-bold mb-4">Escolha abaixo forma pela qual deseja ajudar a ONG!</h3>
                <div class="flex flex-wrap justify-center gap-4">

                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-5">Contribua para o futuro da nossa ONG fazendo uma doação financeira e nos
                            ajude a continuar com o nosso trabalho.</p>
                        <a href="{{$ong->Linkdoacao}}"
                            class="inline-block py-1 text-xs text-white bg-red-500 px-8 hover:bg-red-600 rounded-lg">Doar</a>
                    </div>

                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-3">Se você prefere fazer doações de materiais ou alimentos, ficaremos muito
                            gratos! Entre em contato conosco pelo nosso e-mail para mais detalhes.</p>
                        <a href="{{$ong->Email}}"
                            class="inline-block py-1 text-xs text-white bg-red-500 px-8 hover:bg-red-600 rounded-lg">Mandar
                            E-mail</a>
                    </div>

                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-3">Junte-se a nós como voluntário e faça a diferença! Existem diversas áreas
                            dentro da nossa ONG onde você pode oferecer sua ajuda e transformar vidas.</p>
                        <a href="#_"
                            class="inline-block py-1 text-xs text-white bg-red-500 px-8 hover:bg-red-600 rounded-lg">Voluntariar-se</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Cursos e Professores Section -->

        <section class=" py-10">
            <div class="container mx-auto flex flex-col lg:flex-row lg:space-x-8">
                <!-- Cursos Ofertados -->
                <div class="w-full lg:w-2/3 bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold mb-4">Cursos Ofertados</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                        <div class="bg-gray-300 p-4 rounded-lg flex flex-col items-center">
                            <button onclick="toggleModal('modal')">
                                <div class="mb-2">
                                    <img class="h-14 w-20" src="{{ asset('images/php-logo.png') }}" alt="">
                                </div>
                                <div>
                                    <p class="font-sans text-lg text-black text-center">Curso de PHP</p>
                                </div>
                            </button>
                        </div>
                        <button onclick="toggleModal('modal')">
                            <div class="bg-gray-300 p-4 rounded-lg flex flex-col items-center">
                                <div class="mb-2">
                                    <img class="h-14 w-20" src="{{ asset('images/javascript.png') }}" alt="">
                                </div>
                                <div>
                                    <p class="font-sans text-lg text-black text-center">Curso de JavaScript</p>
                                </div>
                            </div>
                        </button>
                        <button onclick="toggleModal('modal')">
                            <div class="bg-gray-300 p-4 rounded-lg flex flex-col items-center">
                                <div class="mb-2">
                                    <img class="h-14 w-20" src="{{ asset('images/logo-kotlin.png') }}" alt="">
                                </div>
                                <div>
                                    <p class="font-sans text-lg text-black text-center">Curso de kotlin</p>
                                </div>
                            </div>
                        </button>
                        <button onclick="toggleModal('modal')">
                            <div class="bg-gray-300 p-4 rounded-lg flex flex-col items-center">
                                <div class="mb-2">
                                    <img class="h-14 w-20" src="{{ asset('images/python.png') }}" alt="">
                                </div>
                                <div>
                                    <p class="font-sans text-lg text-black text-center">Curso de Python</p>
                                </div>
                            </div>
                        </button>
                        <button onclick="toggleModal('modal')">
                            <div class="bg-gray-300 p-4 rounded-lg flex flex-col items-center">
                                <div class="mb-2">
                                    <img class="h-14 w-20" src="{{ asset('images/c-logo.png') }}" alt="">
                                </div>
                                <div>
                                    <p class="font-sans text-lg text-black text-center">Curso de C++</p>
                                </div>
                            </div>
                        </button>
                        <button onclick="toggleModal('modal')">
                            <div class="bg-gray-300 p-4 rounded-lg flex flex-col items-center">
                                <div class="mb-2">
                                    <img class="h-14 w-20" src="{{ asset('images/html5-logo.png') }}" alt="">
                                </div>
                                <div>
                                    <p class="font-sans text-lg text-black text-center">Curso de HTML5</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Professores -->
                <div class="w-full lg:w-1/3 bg-white p-6 rounded-lg shadow-lg mt-6 lg:mt-0">
                    <h4 class="text-xl font-bold mb-4">Professores</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <img src="{{ asset('images/Ana.png') }}" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Ana</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/Isa.png') }}" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Isabelle</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/Isa.png') }}" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Desiree</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/Carlos.jpg') }}" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Carlos</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/icons/perfil.png') }}" alt="Professor"
                                class="w-10 h-10 rounded-full">
                            <span class="ml-4">Gustavo</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/Gabriel.png') }}" alt="Professor" class="w-10 h-10 rounded-full">
                            <span class="ml-4">Gabriel</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/icons/perfil.png') }}" alt="Professor"
                                class="w-10 h-10 rounded-full">
                            <span class="ml-4">André</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/icons/perfil.png') }}" alt="Professor"
                                class="w-10 h-10 rounded-full">
                            <span class="ml-4">Endrigo</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>





        <div id="modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden bg-gray-800 bg-opacity-75 fixed top-0 right-0 left-0 z-50 justify-center items-center w-screen md:inset-0 h-screen max-h-full">
            <div class="relative p-8 md:w-8/12 sm:10-12 max-h-full mx-auto">
                <!-- Modal content -->
                <div class="relative bg-customBrown rounded-4xl shadow">
                    <!-- Modal header -->
                    <div class="flex flex-col items-center justify-center p-4 md:p-5 rounded-t">
                        <h3 class="text-3xl font-bold text-black">
                            Matrícula
                        </h3>
                        <button type="button" onclick="toggleModal('modal')"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-blue-300 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
                            <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->


                    <div id="modal-dados" class="p-8 md:p-10 ">
                        <form action="" method="">


                            <div id="modal-dados" class="p-8 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="mb-4">
                                    <label for="Nome" class="block mb-1 text-lg font-medium text-black">Nome</label>
                                    <input type="text" name="Nome" id="Nm"
                                        class="bg-white border border-gray-500 text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="EmailL" class="block mb-1 text-lg font-medium text-black">Email</label>
                                    <input type="email" name="Email" id="emil"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>

                                <div class="mb-4">
                                    <label for="FormacaoL"
                                        class="block mb-1 text-lg font-medium text-black">Formação</label>
                                    <input type="text" name="Formacao" id="formç"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="NascimentoL" class="block mb-1 text-lg font-medium text-black">Data de
                                        Nascimento</label>
                                    <input type="text" name="Nascimento" id="nasc"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="NascimentoL" class="block mb-1 text-lg font-medium text-black">Nome do
                                        Responsável</label>
                                    <input type="text" name="Nascimento" id="nasc"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="NascimentoL" class="block mb-1 text-lg font-medium text-black">CPF do
                                        Responsável</label>
                                    <input type="text" name="Nascimento" id="nasc"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="NascimentoL" class="block mb-1 text-lg font-medium text-black">Email do
                                        Responsável</label>
                                    <input type="text" name="Nascimento" id="nasc"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="TelefoneL" class="block mb-1 text-lg font-medium text-black">Telefone do
                                        Responsável</label>
                                    <input type="text" name="Telefone" id="tel"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                            </div>
                            <button onclick="toggleModal('modal')"
                                class="col-span-2 w-full text-white bg-customRed hover:bg-customRedDark focus:ring-4 focus:outline-none focus:ring-customRedDark font-medium rounded-lg text-lg px-5 py-2.5 text-center">
                                Realizar Matrícula
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>