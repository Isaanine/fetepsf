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
    <header class="bg-white">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center border bg-customYellow rounded-br-only">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="pl-5 pb-2 pr-7 pt-1">
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

    <div class="container mx-auto p-6 justify-center">
        <div class="flex justify-center align-center mb-20 p-14 w-full max-h-xl text-center">
            <p class="text-4xl md:text-7xl font-itim mb-4">Resultados da Pesquisa</p>
        </div>

        @if($ong->isEmpty())
        <p class="text-center text-gray-600 text-lg">Nenhuma ONG encontrada para os critérios selecionados.</p>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($ong as $ong)
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-xl font-bold text-customBlue mb-2">
                    <a href="{{ route('ongs.show', ['Id_Ong' => $ong->Id_Ong]) }}">{{ $ong->Nome }}</a>
                </h2>
                <p class="text-gray-700 mb-2"><strong>Estado:</strong> {{ $ong->Estado }}</p>
                <p class="text-gray-700"><strong>Zona:</strong> {{ $ong->Zona }}</p>
                <p class="text-gray-700"><strong>Cidade:</strong> {{ $ong->Cidade }}</p>
            </div>
            @endforeach
        </div>


        @endif
    </div>
</body>

</html>
