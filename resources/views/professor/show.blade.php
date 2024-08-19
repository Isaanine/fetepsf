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

    <!--Home Profile-->
    <div class="h-full bg-gray-100 p-8 ">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col ml-20 -mt-20">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile.jpg"
                    class="w-40 border-4 border-white rounded-full">
              
                <div class="flex items-start space-x-2 mt-2">
                    <p class="text-2xl">{{$professor->Nome}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Home Profile-->

    <!--Data teacher-->
    <div class="w-full h-96 flex justify-center items-center my-14">
        <div id="gridCourses"
            class="my-20 bg-customBrown md:w-8/12 w-full rounded-4xl p-10 flex flex-wrap justify-between">
            <div class="w-full md:w-1/2">
                <p class="font-itim text-2xl font-bold h-20 ">Nome: {{$professor->Nome}}</p>
                <p class="font-itim text-2xl font-bold h-20">Email: {{$professor->Email}}</p>
                <p class="font-itim text-2xl font-bold h-20">Data de Nascimento: {{$professor->Nascimento}}</p>
            </div>
            <div class="w-full md:w-1/2">
                <p class="font-itim text-2xl font-bold h-20">Telefone: {{$professor->Telefone}}</p>
                <p class="font-itim text-2xl font-bold h-20">Formação: {{$professor->Formacao}}</p>
            </div>
        </div>
    </div>
    <!--End Data teacher-->

    <!--My Courses-->
    <div class="flex flex-wrap justify-between mx-5">
        <!-- Meus Cursos -->
        <div id="Pt1" class="w-full lg:w-7/12 border-2 border-black rounded-4xl mx-7 md:mx-14 my-10">
            <div class="my-5 mx-5 md:mx-10 max-w-full flex justify-between">
                <p class="font-itim text-black text-xl md:text-2xl">Cursos Ministrados</p>
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
            </div>
        </div>
    </div>
    <!--END Meus Cursos-->
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

</body>

</html>
