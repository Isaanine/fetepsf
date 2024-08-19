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
    <header class="bg-white ">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center bg-customPurple rounded-br-only">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="pl-5 pb-2 pr-7 pt-1">
            </div>

            <nav id="navbar" class="hidden  md:flex items-center space-x-12 gap-14">
                <a href="#" class="text-purple-700  text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3 ">Home</a>
                <a href="#aboutus" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3">Sobre nós</a>
                <a href="/ongs" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3">ONG's</a>
                <a href="/volunteer" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3">Voluntarios</a>
                <a href="#contactus" class="text-customBlue text-2xl font-itim hover:text-purple-900 hover:underline hover:pb-3">Fale Conosco</a>
            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="{{ url('/signin') }}" class="text-gray-600 hover:text-purple-900 ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconPurple.png') }}" alt="">
                </a>
                <a id="button" href="{{ url('/signup')}}" class="bg-customPurple ml-3 font-itim text-xl text-white px-3 py-1 rounded-full hover:bg-purple-900">Sign up</a>
            </div>

            <div id="mobile-nav" class="md:hidden mr-5 ml-5 ">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskPurple.png') }}" alt="">
                </button>
            </div>
        </div>


        <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
            <a href="#" class="text-purple-700 text-lg font-itim py-2  hover:text-purple-900">Home</a>
            <a href="#aboutus" class="block text-customBlue text-lg font-itim py-2  hover:text-purple-900">Sobre nós</a>
            <a href="#" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">ONG's</a>
            <a href="/volunteer" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Voluntarios</a>
            <a href="#contactus" class="block text-customBlue text-lg font-itim py-2 hover:text-purple-900">Fale Conosco</a>
            <a href="{{ url('/signin') }}" class="block  text-customBlue text-lg font-itim py-2 hover:text-purple-900">Entrar</a>
            <a href="{{ url('/signup')}}" class="block  text-customBlue text-lg font-itim py-2 hover:text-purple-900">Registrar-se</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- Home  -->
    <div id="home" class="bg-gray-100 relative w-screen h-100 mb-4 md:mb-10 -z-40">

        <!-- Image -->
        <img src="{{ asset('images/backContent.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover">

        <!-- Overlay Div -->
        <div id="overlay" class="absolute md:left-36 md:top-32  p-4">
            <div id="divContent" class="bg-white  rounded-3xl shadow-2xl p-14 max-w-lg text-center md:mt-0">
                <h1 class="text-purple-700 text-3xl font-itim mb-4">Onde os sonhos ganham vida!</h1>
                <p class="text-gray-700 text-xl font-itim">Apoiamos ONGs dedicadas a oferecer atividades extracurriculares que estimulam a criatividade e promovem o conhecimento.</p>
            </div>
        </div>

        <!-- Additional Elements -->
        <div id="childrenImage" class="hidden md:flex absolute right-32 bottom-12">
            <img src="{{ asset('images/children.png') }}" alt="" class="w-auto h-auto">
        </div>
    </div>
    <!-- End Home  -->

    <!-- Icons Cards  -->
    <div class="flex justify-center items-center">
        <div id="gridIcons" class="grid gap-12 sm:grid-cols-1 md:grid-cols-3 mx-10">
            <div class="relative bg-white mt-10 p-4 shadow-2xl flex flex-col items-center w-full md:w-120 h-[430px] ">
                <img src="{{ asset('images/icons/iconTargetShooting.png') }}" alt="Icon 1" class="h-16 md:h-20 absolute md:-top-12 -top-10">
                <h2 class="text-2xl font-bold mt-10 text-purple-800">Missão</h2>
                <p class="mt-2 text-center">Nossa missão é proporcionar uma plataforma intuitiva e eficiente para que ONGs sem presença online possam divulgar seus trabalhos de maneira rápida e prática.</p>
            </div>
            <div class="relative bg-white mt-10 p-4 shadow-2xl flex flex-col items-center w-full md:w-120 h-[430px]">
                <img src="{{ asset('images/icons/lineG.png') }}" alt="Icon 2" class="h-14 md:h-20 absolute -top-8 md:-top-12">
                <h2 class="text-2xl font-bold mt-10 text-purple-800">Visão</h2>
                <p class="mt-2 text-center">Visamos apoiar o maior número possível de ONGs, possibilitando que contribuam para o avanço do conhecimento através dos seus cursos oferecidos em nossa plataforma, promovendo um impacto positivo na sociedade.</p>
            </div>
            <div class="relative bg-white mt-10 p-4 shadow-2xl flex flex-col items-center w-full md:w-120 h-[430px] ">
                <img src="{{ asset('images/icons/loveHand.png') }}" alt="Icon 3" class="h-16 md:h-20 absolute md:-top-14 -top-12">
                <h2 class="text-2xl font-bold mt-10 text-purple-800">Valores</h2>
                <p class="mt-2 text-center">Valorizamos a acessibilidade, a colaboração e o compromisso com o desenvolvimento social, oferecendo ferramentas eficazes para ampliar o alcance e a eficácia das iniciativas das ONGs em nossa comunidade global.</p>
            </div>
        </div>
    </div>

    <!-- End Icons Cards -->

    <!-- AboutUs -->
    <h1 class="text-6xl font-itim mb-8 md:mb-2 translate-y-20 z-50 text-center text-purple-700">ONGs</h1>
    <div id="aboutus" class="flex  items-center justify-center">
        <div>
            <div class="relative w-screen">
                <img src="{{ asset('images/background.png') }}" alt="Imagem de Fundo" class="w-full h-[500px] md:h-[700px]">
                <div id="text-container" class="absolute inset-0 flex flex-col items-center  justify-center  p-6">
                    <p id="textP" class="text-base md:text-2xl">Descubra as organizações incríveis que já fazem parte da nossa plataforma, <br> além dos cursos incríveis que elas oferecem gratuitamente. <br><br> Você também pode contribuir! <br> Escolha uma das ONGs para acessar seu perfil e encontrar informações<br> sobre como ajudar por meio de doações ou divulgando suas ações sociais..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End AboutUs -->

   

    <!-- End Courses  -->

   <!-- Dados -->
   <div class="flex items-center justify-center">
        <div id="dadosContainer" class="relative p-8 bg-white shadow-2xl rounded-lg mx-3 mt-20 mb-20 w-[850px] h-100">
            <div id="quebracabeca" class="absolute -z-50 top-10 left-0 transform -translate-x-44 -translate-y-2">
                <img id="quebraCabecaImage" class="hidden md:block h-64" src="{{ asset('images/quebra-cabeca.png') }}" alt="">
            </div>
            <div id="abc" class="  absolute   z-50 bottom-0 right-0 transform translate-x-24 translate-y-10">
                <img id="abcImage" class="hidden md:block h-48" src="{{ asset('images/ABC.png') }}" alt="">
            </div>
            <div class="flex justify-center">
                <h1 class=" text-purple-700  text-4xl">Faça parte você também !!</h1>
            </div>
            <div class="flex justify-center">
                <p class=" text-2xl">São mais de:</p>
            </div>
            <div class="md:mt-24 mt-24 grid grid-cols-3 gap-16 place-items-center">
            <div class="text-center">
    @if(isset($countOngs))
        <div class="text-6xl font-bold text-gray-600">{{ $countOngs }}</div>
        <div class="text-lg mt-2">ONGs Cadastradas</div>
    @else
        <div class="text-6xl font-bold text-gray-600">1</div>
        <div class="text-lg mt-2">ONGs Cadastradas</div>
    @endif
</div>
<div class="text-center">
    @if(isset($countAlunos))
        <div class="text-6xl font-bold text-gray-600">{{ $countAlunos }}</div>
        <div class="text-lg mt-2">Crianças atendidas</div>
    @else
        <div class="text-6xl font-bold text-gray-600">1</div>
        <div class="text-lg mt-2">Crianças atendidas</div>
    @endif
</div>
<div class="text-center">
    @if(isset($countCursos))
        <div class="text-6xl font-bold text-gray-600">{{ $countCursos }}</div>
        <div class="text-lg mt-2">Cursos oferecidos</div>
    @else
        <div class="text-6xl font-bold text-gray-600">1</div>
        <div class="text-lg mt-2">Cursos oferecidos</div>
    @endif
</div>
</div></div>
</div>
    <div id="contactus" class="flex flex-col justify-center items-center mb-5 ">

        <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:gap-20  rounded-lg h-5/6 w-9/12 ">

            <div class="flex flex-col space-y-6 flex-grow">
                <form action="">
                    <label class="block">
                        <span class="block text-lg  text-gray-700">Nome</span>
                        <input type="text" class="mt-1 block w-full border-4 border-customPurple rounded-xl px-6 py-3">
                    </label>
                    <label class="block">
                        <span class="mt-2 block text-lg  text-gray-700">Email</span>
                        <input type="email" class="mt-1 block w-full border-4 border-customPurple rounded-xl px-6 py-3">
                    </label>
                    <label class="block">
                        <span class=" mt-2  block text-lg  text-gray-700">Assunto</span>
                        <input type="text" class="mt-1 block w-full border-4 border-customPurple rounded-xl px-6 p-3">
                    </label>
                    <label class="block">
                        <span class="mt-2  block text-lg  text-gray-700">Sua mensagem</span>
                        <textarea class="mt-1 block w-full border-4 border-customPurple resize-none rounded-xl px-6 py-3"></textarea>
                    </label>
                    <button class="bg-customPurple text-white rounded-xl px-4 py-3 mt-4 self-start hover:bg-purple-900">Enviar</button>
            </div>


            <div class="flex flex-col flex-grow md:ml-10 md:w-52">
                <h2 class="text-2xl  text-customPurple">Entre em contato</h2>
                <p class="text-xl mt-5"> Se você tiver dúvidas, sugestões ou reclamações sobre o site, entre em contato conosco pelo e-mail xxxxx@gmail.com. Para dúvidas relacionadas a uma das organizações, consulte as informações de contato disponíveis na página de perfil de cada ONG.</p>
            </div>
            </form>
        </div>
    </div>
    </div>




    <!-- Footer -->
    <footer class="w-full mt-auto">
        <img class="w-full h-auto" src="{{ asset('images/footerPurple.png') }}" alt="">
    </footer>
    <!-- End Footer-->

</body>

</html>