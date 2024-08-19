<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')

</head>

<body class=" overflow-x-hidden">
    <!-- Header  -->
    <header class="bg-white  ">
        <div class="flex items-center justify-between ">
            <div id="logo" class="flex items-center border bg-customYellow rounded-br-only">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class=" pl-5 pb-2 pr-7 pt-1">
            </div>

            <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                <a href="/"
                    class="text-customBlue  text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3 ">Home</a>
                <a href="/#aboutus"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Sobre
                    nós</a>
                <a href="{{ url('/ongs')}}"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">ONG's</a>
                    <a href="{{ url('/volunteer')}}"
                    class="text-customYellow text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Voluntarios</a>
                <a href="{{ url('/')}}#contactus"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Fale
                    Conosco</a>

            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-yellow-600 ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconYellow.png') }}" alt="">
                </a>
                <a id="button" href="{{ url('/signup')}}"
                    class="bg-customYellow ml-3 font-itim text-xl text-white px-3 py-1 rounded-full hover:bg-yellow-500">Sign
                    up</a>
            </div>

            <div id="mobile-nav" class="md:hidden ml-5 mr-5 ">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>
        </div>


        <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
            <a href="{{ url('/home')}}#home"
                class="text-customYellow text-lg font-itim py-2  hover:text-yellow-600">Home</a>
            <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2  hover:text-yellow-600">Sobre nós</a>
            <a href="{{ url('/ongs')}}" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">ONG's</a>
            <a href="{{ url('/volunteer')}}"
                class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Voluntarios</a>
            <a href="#contactus" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Fale
                Conosco</a>
            <a href="{{ url('/signin') }}"
                class="block  text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Entrar</a>
            <a href="{{ url('/signup')}}"
                class="block  text-customBlue text-lg font-itim py-2 hover:text-yellow-600">Registrar-se</a>
        </div>
    </header>
    <!-- End Header -->
    <div id="volunteer" class=" relative w-screen h-100 -z-40">
        <div>
            <div class="flex flex-col w-full items-center">
                <h1 class="text-customDarkBlue text-6xl font-itim mb-4 w-fit">Voluntários</h1>
                <p class="text-xl text-center w-1/2">Junte-se a nós como voluntário e faça a diferença! <br> Existem diversas
                    áreas dentro da nossa ONG onde você pode oferecer sua ajuda e transformar vidas.
                </p>
            </div>
        </div>
        <div class="grid grid-col-2 justify-items-center">
            @if(isset($vagas))
            @foreach($vagas as $vaga)
            <div class="w-full max-w-5xl rounded-xl bg-gray-100 border-2 border-gray-400 py-6 px-4 sm:px-10 items-center justify-center mt-4">
                <div>
                    <div class="flex flex-col">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                            <div class="flex items-center">
                                
                                

                            </div>
                            <div class="flex flex-col items-start sm:items-end mt-4 sm:mt-0">
                                <label>Tel: {{ $vaga->Telefone }}</label>
                                <label>E-mail: {{ $vaga->Email }}</label>
                            </div>
                        </div>
                        <!-- Linhas horizontais -->
                        <div class="my-4">
                            <hr class="border-2 border-gray-400">
                        </div>

                        <div class="flex flex-col justify-between">
                            <h1 class="text-lg font-bold text-indigo-900 flex justify-center items-center">Necessidade: {{ $vaga->Nomearea }}</h1><!--adicionar back-end-->
                            <p class="text-justify text-lg w-full my-4">{{ $vaga->Sobre }}</p>
                        </div>
                        <!-- Seção de localização, horário e botões -->
                        <div class="flex flex-col sm:flex-row items-start sm:items-center mt-4 sm:justify-end">
                            <!-- Container para localização, que vai para a esquerda -->
                            <div class="flex flex-col sm:flex-row sm:items-center sm:mr-8">
                                <label class="flex mb-4 sm:mb-0 items-center text-left">
                                    <svg class="mr-2" version="1.0" xmlns="http://www.w3.org/2000/svg" width="24.000000pt" height="24.000000pt" viewBox="0 0 24.000000 24.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,24.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                            <path d="M59 211 c-17 -18 -29 -40 -29 -56 0 -30 28 -86 65 -130 l25 -30 25 30 c37 44 65 100 65 130 0 38 -50 85 -90 85 -22 0 -41 -9 -61 -29z m91 -36 c15 -18 10 -45 -12 -59 -35 -22 -74 27 -48 59 16 19 44 19 60 0z" />
                                        </g>
                                    </svg>
                                    {{ $vaga->Cidade }}
                                </label>
                            </div>

                            <!-- Container para horário e botões, que vai para a direita -->
                            <div class="flex flex-col sm:flex-row items-start sm:items-center sm:ml-auto">
                                <label class="flex mb-4 mr-6 sm:mb-0 items-center text-left sm:ml-8">
                                    <svg class="mr-2 mt-2" version="1.0" xmlns="http://www.w3.org/2000/svg" width="28.000000pt" height="28.000000pt" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                            <path d="M77 614 c-4 -4 -7 -18 -7 -30 0 -16 -7 -24 -22 -26 -19 -2 -24 -10 -26 -40 l-3 -38 260 0 261 0 0 35 c0 19 -6 38 -14 42 -8 4 -16 19 -18 33 -4 34 -32 32 -36 -2 -3 -23 -8 -28 -32 -28 -24 0 -29 5 -32 28 -2 16 -9 27 -18 27 -9 0 -16 -11 -18 -27 -3 -23 -8 -28 -32 -28 -24 0 -29 5 -32 28 -2 16 -9 27 -18 27 -9 0 -16 -11 -18 -27 -3 -23 -8 -28 -32 -28 -24 0 -29 5 -32 28 -2 16 -9 27 -18 27 -9 0 -16 -11 -18 -27 -3 -23 -8 -28 -32 -28 -24 0 -29 5 -32 27 -3 26 -18 39 -31 27z" />
                                            <path d="M22 273 l3 -168 141 -3 142 -3 -5 44 c-3 27 1 57 11 81 15 36 15 40 0 51 -24 17 -8 35 30 35 19 0 51 7 72 16 24 10 54 14 81 11 l43 -5 0 54 0 54 -260 0 -260 0 2 -167z m138 113 c0 -17 -24 -28 -45 -20 -27 11 -17 34 15 34 19 0 30 -5 30 -14z m100 0 c0 -17 -24 -28 -45 -20 -27 11 -17 34 15 34 19 0 30 -5 30 -14z m100 0 c0 -17 -24 -28 -45 -20 -27 11 -17 34 15 34 19 0 30 -5 30 -14z m100 0 c0 -17 -24 -28 -45 -20 -27 11 -17 34 15 34 19 0 30 -5 30 -14z m-305 -96 c0 -18 -33 -26 -47 -12 -6 6 -7 15 -3 22 10 16 50 8 50 -10z m100 0 c0 -18 -33 -26 -47 -12 -6 6 -7 15 -3 22 10 16 50 8 50 -10z m-106 -79 c19 -12 4 -31 -25 -31 -35 0 -30 34 6 39 3 0 11 -3 19 -8z m95 3 c28 -11 18 -34 -14 -34 -30 0 -43 23 -17 33 6 3 13 6 14 6 1 1 8 -2 17 -5z" />
                                            <path d="M412 280 c-70 -43 -92 -128 -49 -191 62 -93 189 -87 239 12 23 45 23 86 -2 127 -42 68 -124 91 -188 52z m86 -81 c2 -19 13 -44 25 -57 16 -17 18 -25 9 -34 -21 -21 -72 38 -72 82 0 61 33 69 38 9z" />
                                        </g>
                                    </svg>
                                    Horário {{ $vaga->Horario }} - {{ $vaga->Dias }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

</body>

</html>