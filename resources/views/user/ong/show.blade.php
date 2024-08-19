<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $ong->Nome }}</title>
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
                <a href="/" class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Home</a>
                <a href="/#aboutus" class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Sobre nós</a>
                <a href="#" class="text-customYellow text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">ONG's</a>
                <a href="#" class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Doações</a>
                <a href="#contactus" class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Fale Conosco</a>
            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3">
                <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-yellow-600">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconYellow.png') }}" alt="">
                </a>
                <a id="button" href="{{ url('/signup')}}" class="bg-customYellow ml-3 font-itim text-xl text-white px-3 py-1 rounded-full hover:bg-yellow-500">Sign up</a>
            </div>

            <div id="mobile-nav" class="md:hidden ml-5 mr-5">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden bg-white py-2 px-4">
            <a href="{{ url('/home')}}#home" class="text-customYellow text-lg font-itim py-2 hover:text-yellow-600">Home</a>
            <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Sobre nós</a>
            <a href="#sponsors" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">ONG's</a>
            <a href="{{ url('/donates')}}#doacao" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Doações</a>
            <a href="#contactus" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Fale Conosco</a>
            <a href="{{ url('/signin') }}" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Entrar</a>
            <a href="{{ url('/signup')}}" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Registrar-se</a>
        </div>
    </header>
    <!-- End Header -->

    <div class="h-full bg-gray-100 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div x-data="{ openSettings: false }" class="absolute right-12 mt-4 rounded">
                <!-- Settings Button and Dropdown -->
            </div>
            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg" class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center mt-10">
                @if($ong)
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
                </div>
                @else
                <p class="text-xl">Não há ONG</p>
                @endif
            </div>
        </div>

        <!-- Ajuda Section -->
        <section class="bg-white py-10 rounded-xl mt-10">
            <div class="container mx-auto text-center ">
                <h3 class="text-xl font-bold mb-4">Escolha abaixo forma pela qual deseja ajudar a ONG!</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    @if($ong)
                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-5">Contribua para o futuro da nossa ONG fazendo uma doação financeira e nos ajude a continuar com o nosso trabalho.</p>
                        <a href="{{ $ong->Linkdoacao }}" class="inline-block py-1 text-xs text-white bg-red-500 px-8 hover:bg-red-600 rounded-lg">Doar</a>
                    </div>

                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-3">Se você prefere fazer doações de materiais ou alimentos, ficaremos muito gratos! Entre em contato conosco pelo nosso e-mail para mais detalhes.</p>
                        <a href="mailto:{{ $ong->Email }}" class="inline-block py-1 text-xs text-white bg-red-500 px-8 hover:bg-red-600 rounded-lg">Mandar E-mail</a>
                    </div>

                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-3">Junte-se a nós como voluntário e faça a diferença! Existem diversas áreas dentro da nossa ONG onde você pode oferecer sua ajuda e transformar vidas.</p>
                        <a href="#_" class="inline-block py-1 text-xs text-white bg-red-500 px-8 hover:bg-red-600 rounded-lg">Voluntariar-se</a>
                    </div>
                    @endif
                </div>
            </div>
        </section>

        <!-- Cursos e Professores Section -->
        <!-- Cursos e Professores Section -->
        @php
        $curso = Session::get('curso');
        @endphp
        <section class="py-10">
            <div class="container mx-auto flex flex-col lg:flex-row lg:space-x-8">
                <!-- Cursos Ofertados -->
                <pre>{{ print_r($cursos, true) }}</pre>

                <div class="w-full lg:w-2/3 bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold mb-4">Cursos Ofertados</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                        @if($cursos)
                        @foreach ($cursos as $curso)
                        <div x-data="{ open: false }" class="bg-gray-300 p-4 rounded-lg relative">
                            <div class="cursor-pointer" @click="open = true">
                                <p class="text-center">Imagem do Curso</p>
                                <p class="text-center">{{ $curso->Nome }}</p>
                            </div>

                            <!-- Modal -->
                            <div x-show="open" @click.away="open = false" class="fixed inset-0 flex items-center justify-center z-50">
                                <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative flex-col sm:flex-row">
                                    <div class="flex justify-between items-center mb-4">
                                        <h4 class="text-lg font-bold">{{ $curso->Nome }}</h4>
                                        <!-- Close Button -->
                                        <button @click="open = false" class="text-black-500 hover:text-black-800 rounded-full p-2 text-lg font-bold">
                                            X
                                        </button>
                                    </div>

                                    <!-- Imagem do curso -->
                                    <div class="sm:w-1/3">
                                        <div class="bg-gray-300 w-full h-full rounded-md flex items-center justify-center">
                                            <p class="text-gray-500">IMAGEM</p>
                                        </div>
                                    </div>
                                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $curso->Nome }}</h2>
                                    <p class="text-blue-600 text-base font-medium">
                                        Sobre: <span class="text-gray-800 font-semibold">{{ $curso->Sobre }}</span>
                                    </p>
                                    <p class="text-blue-600 text-base font-medium">
                                        Horário: <span class="text-gray-800 font-semibold">{{ $curso->Horario }}</span>
                                    </p>
                                    <p class="text-blue-600 text-base font-medium">
                                        Dias: <span class="text-gray-800 font-semibold">{{ $curso->Dias }}</span>
                                    </p>
                                    <p class="text-blue-600 text-base font-medium">
                                        Itens Aula: <span class="text-gray-800 font-semibold">{{ $curso->Itens_Aula }}</span>
                                    </p>
                                    <a href="#" class="block text-center bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Matricule-se</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <p>Nenhum curso disponível.</p>
                        @endif
                    </div>
                </div>


                <!-- Professores -->
                <div class="w-full lg:w-1/3 bg-white p-6 rounded-lg shadow-lg mt-6 lg:mt-0">
                    <h4 class="text-xl font-bold mb-4">Professores</h4>
                    <ul class="space-y-4">
                        @if($professores && count($professores) > 0)
                        @foreach($professores as $professor)
                        <li class="flex items-center">
                            <img src="{{ asset('path/to/professor.png') }}" alt="{{ $professor->Nome }}" class="w-10 h-10 rounded-full">
                            <a href="{{ route('professor.show', $professor->Id_Professor) }}" class="ml-4 text-customBlue hover:underline">{{ $professor->Nome }}</a>
                        </li>
                        @endforeach
                        @else
                        <p>Nenhum professor disponível.</p>
                        @endif
                    </ul>
                </div>
        </section>
    </div>
</body>

</html>