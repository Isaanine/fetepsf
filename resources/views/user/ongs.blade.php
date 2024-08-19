<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ONGS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')

</head>


<body class="bg-gray-100 overflow-x-hidden margin-auto">
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
                <a href="#"
                    class="text-customYellow text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">ONG's</a>
                    <a href="{{ url('/volunteer')}}"
                    class="text-customBlue text-2xl font-itim hover:text-yellow-600 hover:underline hover:pb-3">Voluntarios</a>
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
            <a href="#sponsors" class="block text-customBlue text-lg font-itim py-2 hover:text-yellow-600">ONG's</a>
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

        <!-- Where I am -->
        <div id="home"
        class=" w-screen h-screen flex justify-center items-center bg-[url('/public/images/backContent-Yellow.png')] bg-no-repeat bg-cover overflow-hidden">
        <!-- Overlay Div -->

        <div class="bg-white w-dados mx-4 h-101 rounded-3xl shadow-2xl p-5">
            <div class="w-full h-full flex flex-col justify-center items-center">
                <div class=" w-full flex flex-col p-4">
                    <h1 class="text-black text-2xl lg:text-6xl sm:text-5xl font-itim mb-4 text-center">Encontre ONGs que
                        transformam vidas através da
                        educação
                        infantil.</h1>
                    <p class="text-black text-lg lg:5xl sm:text-3xl font-itim text-center">Conectando você a projetos
                        que moldam o amanhã
                        perto
                        da sua casa.</p>
                </div>
                <div class="flex items-center justify-center flex-col sm:flex-row max-w-md mx-4">
                <form action="{{ url('/search') }}" method="get" class="flex flex-col items-center justify-center w-full py-2 space-y-4">
                <label class="relative block w-full text-center">
                    <span class="sr-only">Search</span>
                    <select name="estado" id="estado" class="border-2 border-customYellow rounded-full py-1 px-3 w-full md:w-80">
                        <option value="select">Selecione o Estado em que você reside</option>
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="ap">Amapá</option>
                        <option value="am">Amazonas</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espírito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="ro">Rondônia</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="sp">São Paulo</option>
                        <option value="se">Sergipe</option>
                        <option value="to">Tocantins</option>
                        </select>
                        <br><br>
                        <select name="zona" id="zona" class="border-2 border-customYellow rounded-full py-1 px-3 w-full md:w-80">
                            <option value="select">Selecione a Zona em que você reside</option>
                            <option value="norte">Norte</option>
                            <option value="sul">Sul</option>
                            <option value="leste">Leste</option>
                            <option value="oeste">Oeste</option>
                            <option value="centro">Centro</option>
                            </select>
                            </label>
                            <button class="w-full md:w-40 h-10 bg-customYellow hover:bg-yellow-500 rounded-full font-bold" type="submit">Pesquisar</button>
                        </form>
            </div>
            
            </div>
        </div>
    </div>  


    <!-- Approaches -->
    <div class="container mx-auto p-6 justify-center ">
        <div class="flex justify-center align-center mb-20  p-14  w-full max-h-xl text-center">
            <p class="text-4xl md:text-7xl font-itim mb-4  ">Algumas das diferentes abordagens presente nas
                ONGs.</p>
        </div>
        <div id="gridCourses" class="grid grid-cols-1 md:grid-cols-6 gap-4 sm:gap-y-12">
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Artes.png') }}" alt="" class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Artes</p>
                </div>
            </div>
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Esporte.png') }}" alt="" class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Esporte</p>
                </div>
            </div>
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Danca.png') }}" alt="" class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Dança</p>
                </div>
            </div>
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Comunicação.png') }}" alt=""
                    class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Comunicação</p>
                </div>
            </div>
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Numeros.png') }}" alt="" class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Números</p>
                </div>
            </div>
            <div class="bg-customGreen2 shadow-xl rounded-lg  w-40 h-40 mx-auto items-end justify-center mb-8 sm:mb-12">
                <img src="{{ asset('images/Linguagem.png') }}" alt="" class="relative inset-0  object-cover items-end">
                <div class="flex justify-center items-center">
                    <p class="text-gray-700 text-lg font-itim my-5">Linguagem</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Approaches -->

    <!--Positives Points-->
    <div id="gridCourses" class="grid grid-cols-1 md:grid-cols-3 gap-y-12 my-28">
        <div class="bg-customGreen2 shadow-xl rounded-3xl  w-80 h-40 mx-auto items-center">
            <div class="flex mt-5 ml-5">
                <p class="font-itim font-bold text-3xl"> Alfabetização</p>
            </div>
            <div class="flex flex-wrap justify-between mt-2 ml-5">

                <div class="w-1/2 flex justify-end items-end">
                    <img src="{{ asset('images/book.png') }}" alt="" class="object-cover w-36 h-36">
                </div>
            </div>
        </div>
        <div class="bg-customGreen2 shadow-xl rounded-3xl  w-80 h-40 mx-auto items-center">
            <div class="flex mt-2 ml-5 w-20">
                <p class="font-itim font-bold text-3xl"> Inclusão Educacional</p>
            </div>
            <div class="flex flex-wrap justify-between mt-2 ml-5">

                <div class="w-1/2 flex justify-end items-end">
                    <img src="{{ asset('images/hand.png') }}" alt="" class="object-cover w-36 h-36">
                </div>
            </div>
        </div>
        <div class="bg-customGreen2 shadow-xl rounded-3xl w-80 h-40 mx-auto flex items-center">
            <div class="w-1/2 pl-5">
                <p class="font-itim font-bold text-2xl" style="word-break: break-all; white-space: normal;">
                    Apoio a <br>Professores e<br> Educadores
                </p>
            </div>
            <div class="w-1/2 pr-5">
                <img src="{{ asset('images/teacher.png') }}" alt="" class="object-cover w-36 h-36">
            </div>
        </div>
    </div>
    <!--end Positives Points -->

    <!-- Divider Point -->
    <div class="w-full h-16 bg-gray-100"></div>
    <!-- END Divider Point -->

   

    <!-- ONGS -->
    <div id="home"
        class="relative w-full h-screen flex flex-col sm:flex-row items-center justify-center bg-[url('/public/images/backContent-Yellow2.png')] bg-no-repeat bg-cover bg-center  ">
        <!-- Texto e Botão -->
        <div
            class="w-full mt-5 sm:w-1/2 flex flex-col justify-center items-center text-center sm:text-left sm:items-center mb-8 sm:mb-0">
            <h1 class="text-4xl sm:text-6xl md:text-8xl font-itim text-black mb-4 ">É uma ONG?</h1>
            <p class=" sm:text-4xl font-serif text-black mb-4">
                Junte-se a nós na<br>
                missão de<br>
                transformar a<br>
                educação infantil.
            </p>
            <button
                class="bg-customGreen2 hover:bg-green-700 text-black font-bold py-2 px-4 rounded-full w-full sm:w-60 md:w-72 h-12 md:h-14 focus:outline-none focus:ring-2 focus:ring-green-500">
                Cadastrar
            </button>
        </div>
        <!-- Imagem -->
        <div class="w-full sm:w-1/2 flex items-center justify-center">
            <img src="{{ asset('images/Child.png') }}" alt="Criança" class="object-cover max-w-full  w-fit sm:h-fit">
        </div>
    </div>
    <!-- End ONGS -->


   

    <!--Partner-->





    <!--end Partner-->

    <!--Call with US -->
    <div id="   contactus" class="flex flex-col sm:flex-row my-20 w-screen h-full">
        <!-- Text -->
        <div class=" w-full h-full sm:w-1/2 flex justify-center items-center ">
            <div class="w-2/3">
                <h1 class="text-3xl font-itim mb-4 text-start">Entre em contato</h1>
                <p class="text-black text-xl  font-itim mb-4"> Se você tiver dúvidas, sugestões ou reclamações sobre
                    o
                    site,
                    entre em contato conosco pelo e-mail xxxxx@gmail.com. Para dúvidas relacionadas a uma das
                    organizações,
                    consulte as informações de contato disponíveis na página de perfil de cada ONG.
                </p>
            </div>
        </div>
        <!-- Form -->
        <div class=" w-full h-full sm:w-1/2 flex justify-center items-center ">
            <div class="w-2/3">
                <form>
                    <div class="mb-4">
                        <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
                        <input type="text" id="nome" name="nome"
                            class="shadow appearance-none border-4 rounded-full border-customYellow w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border-4 rounded-full border-customYellow w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="assunto" class="block text-gray-700 text-sm font-bold mb-2">Assunto</label>
                        <input type="text" id="assunto" name="assunto"
                            class="shadow appearance-none border-4 rounded-full border-customYellow w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="mensagem" class="block text-gray-700 text-sm font-bold mb-2">Sua
                            mensagem</label>
                        <textarea
                            class="mt-1 block w-full border-4 border-customYellow  rounded-xl px-6 py-3"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-customYellow hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus-shadow-outline">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <!--END CALL of US-->

    <footer>
        <div class="max-w-full max-h-20">
            <!-- Image -->
            <img src="{{ asset('images/Finalback-Green.png') }}" alt=""
                class="relative inset-0 w-full h-full object-fit ">
        </div>
    </footer>
</body>

</html>