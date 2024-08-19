<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geral - Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src=" {{ asset('js/script.js') }} "></script>

    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 overflow-x-hidden">
    <header class="bg-white">
        <div class="flex items-center justify-between ">
            <div id="logo" class="flex items-center  p-5 bg-customBlue2 rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl px-10">ADM</p>
            </div>
            <nav id="navbar" class="hidden  md:flex items-center ">
                <a href="" class="text-blue-600  text-2xl font-itim hover:text-blue-700 hover:underline hover:pb-3 ">Geral</a>
            </nav>

            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3 ">
                <a href="#" class="text-gray-600 hover:text-customRed ">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconBlue.png') }}" alt="">
                </a>
            </div>

            <div id="mobile-nav" class="md:hidden mr-5 ">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarBlue.png') }}" alt="">
                </button>
            </div>

        </div>


        <div id="mobile-menu" class="hidden bg-white  py-2 px-4 ">
            <a href="#" class="block text-blue-700  text-lg font-itim py-2 ">Geral</a>
        </div>
    </header>

    <div class="flex flex-col sm:flex-row sm:justify-around sm:space-y-0 space-y-4 my-8 mx-10">
        <div class="bg-gray-200 rounded-lg shadow p-4 text-center w-full sm:w-1/4">
        @if(isset($countOngs))
            <div class="text-6xl font-bold text-gray-600">{{ $countOngs }}</div>
            <div class="text-lg mt-2">ONGs Cadastradas</div>
        @endif
        </div>
        <div class="bg-gray-200 rounded-lg shadow p-4 text-center w-full sm:w-1/4">
        @if(isset($countOngs))
            <div class="text-6xl font-bold text-gray-600">{{ $countCursos }}</div>
            <div class="text-lg mt-2">Cursos Cadastrados</div>
        @endif  
        </div>
       
        <div class="bg-gray-200 rounded-lg shadow p-4 text-center w-full sm:w-1/4">
        @if(isset($countOngs))
            <div class="text-6xl font-bold text-gray-600">{{ $countAlunos }}</div>
            <div class="text-lg mt-2">Alunos Cadastrados</div>
            @endif
        </div>
        
    </div>
    <hr class="bg-customBlue2 h-2 mb-4 mt-4" />

    <!-- Tabela de Gerenciamento -->
    <h2 class=" text-gray-500 text-xl  md:text-3xl  text-center mb-4">Gerenciar ONGs Cadastradas</h2>
    <!-- Tabela de Gerenciamento -->
    @if(isset($ongs))
    <div class="flex justify-center mx-auto  rounded-lg  p-6">

        <div class="overflow-x-auto overflow-y-auto max-h-[400px]">
            <table class=" bg-white">
                <thead>
                    <tr class="bg-customBlue2 border border-black text-left">
                        <th class="py-2 px-4 text-white">ONG</th>
                        <th class="py-2 px-4 text-white">Email</th>
                        <th class="py-2 px-4 text-center">
                            <div class="block relative text-left">
                                <form action="{{ route('searchOngs') }}" method="GET" class="flex items-center">
                                    <input
                                        type="text"
                                        name="email"
                                        class="py-2 pl-4 w-56 rounded-lg border font-normal border-gray-300 focus:outline-none focus:ring focus:border-blue-300"
                                        placeholder="Pesquisar...">
                                    <button type="submit" class="ml-2 flex items-center text-gray-600">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-6 h-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                        </svg>
                                    </button>
                                    <button type="submit" class="ml-2 flex items-center text-gray-600" value="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5V1.5m0 0a9 9 0 1 0 9 9h-1.5a7.5 7.5 0 1 1-7.5-7.5v1.5m0-6h-6.75A9 9 0 0 1 12 4.5z" />
                                        </svg>

                                    </button>
                                </form>
                            </div>


                        </th>
                    </tr>
                </thead>
                <tbody class="border border-black">

                    @foreach($ongs as $ong)

                    <tr class="border-b">
                        <td class="py-2 px-4">{{$ong->Nome}}</td>
                        <td class="py-2 px-4">{{$ong->Email }}</td>
                        <td class="py-2 px-4 flex justify-center items-center gap-5">
                            <form action="{{ route('showOng', ['Id_Ong' => $ong->Id_Ong]) }}" method="GET">
                                <button class="      text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 20c-2.27-2.27-5.64-3.63-9-3.63s-6.73 1.36-9 3.63" />
                                    </svg>
                                </button>
                            </form>

                            <button class="  text-gray-500" onclick="openModal('{{$ong->Nome}}', '{{$ong->Email}}', '{{ $ong->Telefone }}', '{{ $ong->Endereco }}')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 9h9m-9 4h6m-6 4h9M13.5 2.25a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V3a.75.75 0 0 1 .75-.75h6.75zM12 2.25a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V3a.75.75 0 0 1 .75-.75h6.75zM21 5.25v13.5a.75.75 0 0 1-.75.75H3.75a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 .75.75z" />
                                </svg>

                            </button>


                            <form class="" action="{{ route('deleteong', ['Id_Ong' => $ong->Id_Ong]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta ONG?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="  rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </form>
                        </td>

                    </tr>




                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
    <div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg h-101  p-6 w-80 md:w-2/6 mx-4 flex flex-col">
            <div class="flex flex-col mt-20 gap-12">
                @if(isset($ong))
                <form action="{{ route('showOng', ['Id_Ong' => $ong->Id_Ong]) }}" method="post">
                    <button type="submit" class="w-full bg-customBlue2 text-white py-2 rounded-xl hover:bg-blue-500">
                        Ver Página da ONG
                    </button>
                </form>

                <button class="bg-customBlue2 text-white py-2 rounded-xl hover:bg-blue-500" onclick="toggleModal('modal-dados')">Dados de Contato</button>
                @endif

            </div>
            <div class="mt-auto">
                <button class="w-full py-2 rounded-xl border border-gray-300 text-gray-700 hover:bg-gray-200" onclick="toggleModal('modal')">Fechar</button>
            </div>
        </div>
    </div>
    </div>


    <div id="modal-dados" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg h-101 p-6 w-80 md:w-2/6 mx-4 flex flex-col">
            <h2 id="modal-nome" class="text-2xl font-semibold mb-4 text-center">Nome ONG</h2>
            <div class="flex flex-col space-y-2">
                <h2 class="text-xl">Email</h2>
                <p id="modal-email"></p>
                <h2 class="text-xl">Telefone</h2>
                <p id="modal-telefone"></p>
                <h2 class="text-xl">Endereço</h2>
                <p id="modal-endereco"></p>
            </div>
            <div class="mt-auto">
                <button class="w-full py-2 rounded-xl border border-gray-300 text-gray-700" onclick="toggleModal('modal-dados')">Fechar</button>
            </div>
        </div>
    </div>
    @else
    <p>Não há ongs</p>
    @endif


    <footer class="w-full mt-auto">
        <img class="w-full h-auto" src="{{ asset('images/footerBlue.png') }}" alt="">
    </footer>
</body>

</html>