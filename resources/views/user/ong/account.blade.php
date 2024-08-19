<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <header class="bg-white shadow-lg">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>
            <nav id="navbar" class="hidden md:flex items-center space-x-12 gap-14">
                <a href="/ong/account"
                    class="text-customRed text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Meus
                    Dados</a>
                <a href="/ong/mural"
                    class="text-customBlue text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Mural</a>
                <a href="/ong/courses"
                    class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Cursos</a>
                <a href="/ong/volunteer"
                    class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Voluntários</a>
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
            <a href="/ong/account" class="block text-customRed text-lg font-itim py-2 hover:text-customRed">Meus
                Dados</a>
            <a href="/ong/mural" class="text-customBlue text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/ong/courses" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Cursos</a>
            <a href="/ong/volunteer"
                class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Voluntários</a>
        </div>
    </header>

    <div class="h-full bg-gray-100 p-8">
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
            
            <div class="flex items-center flex-col ">
                @if(session('ong'))
             
                <div class="w-full max-w-screen-lg mx-auto">
                    <div class="text-center mb-4">
                        <p class="text-2xl font-bold">{{ session('ong')->Nome }}</p>
                        <hr class="w-full border-t-4 border-customRed my-4">
                    </div>
                    <div class="text-left mx-4">
                        <p><strong>Email:</strong> {{ session('ong')->Email }}</p>
                        <p><strong>Telefone:</strong> {{ session('ong')->Telefone }}</p>
                        <p><strong>Endereço:</strong> {{ session('ong')->Endereco }}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
        </div>


        <!-- Ajuda  -->
        <section class="bg-white py-10 rounded-xl mt-10">
            <div class="container mx-auto text-center ">
                <h3 class="text-xl font-bold mb-4">Escolha abaixo forma pela qual deseja ajudar a ONG!</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    @if(session('ong'))
                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-5">Contribua para o futuro da nossa ONG fazendo uma doação financeira e nos
                            ajude a continuar com o nosso trabalho.</p>
                        <a href="{{session('ong')->Linkdoacao}}"
                            class="inline-block py-1 text-xs text-white bg-red-500 px-8 hover:bg-red-600 rounded-lg">Doar</a>
                    </div>

                    <div class="border-solid border-2 border-red-500 p-6 rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <p class="text-sm m-3">Se você prefere fazer doações de materiais ou alimentos, ficaremos muito
                            gratos! Entre em contato conosco pelo nosso e-mail para mais detalhes.</p>
                        <a href="mailto:{{session('ong')->Email}}"
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
                @endif
            </div>

        </section>

        <!-- Main modal -->
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    @php
                    $ong = session('ong');

                    @endphp

                    <div id="modal-dados" class="p-8 md:p-10 ">
                        @if(isset($ong))
                        <form action="{{ route('ongs.update', ['Id_Ong' => $ong->Id_Ong]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div id="modal-dados" class="p-8 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="mb-4">
                                    <label for="resp_ong"
                                        class="block mb-1 text-lg font-medium text-black">Responsável</label>
                                    <input type="text" name="Responsavel" id="resp_ong"
                                        value="{{ old('resp_ong', session('ong')->Responsavel) }}"
                                        class="bg-white border border-gray-500 text-black text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="telefone"
                                        class="block mb-1 text-lg font-medium text-black">Telefone</label>
                                    <input type="text" name="Telefone" id="telefone"
                                        value="{{ old('telefone', session('ong')->Telefone) }}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="cep" class="block mb-1 text-lg font-medium text-black">CEP</label>
                                    <input type="text" name="CEP" id="cep" value="{{ old('cep', session('ong')->CEP) }}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="endereco"
                                        class="block mb-1 text-lg font-medium text-black">Endereço</label>
                                    <input type="text" name="Endereco" id="endereco"
                                        value="{{ old('endereco', session('ong')->Endereco) }}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="cidade" class="block mb-1 text-lg font-medium text-black">Cidade</label>
                                    <input type="text" name="Cidade" id="cidade"
                                        value="{{ old('cidade', session('ong')->Cidade) }}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="estado" class="block mb-1 text-lg font-medium text-black">Estado</label>
                                    <input type="text" name="Estado" id="estado"
                                        value="{{ old('estado', session('ong')->Estado) }}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="complemento"
                                        class="block mb-1 text-lg font-medium text-black">Complemento</label>
                                    <input type="text" name="Complemento" id="complemento"
                                        value="{{ old('complemento', session('ong')->Complemento) }}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="link_doacao" class="block mb-1 text-lg font-medium text-black">Link de
                                        doação</label>
                                    <input type="text" name="Linkdoacao" id="link_doacao"
                                        value="{{ old('link_doacao', session('ong')->Linkdoacao) }}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-4">
                                    <label for="sobre" class="block mb-1 text-lg font-medium text-black">Sobre</label>
                                    <input type="text" name="Sobre" id="sobre"
                                        value="{{ old('sobre', session('ong')->Sobre) }}"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5"
                                        required />
                                </div>

                            </div>
                            <div class="flex flex-row w-full gap-4">
                                <div class="mb-4 w-1/2">
                                    @if(session('ong')->ComprovanteEndereco)
                                    <img src="{{ asset('storage/' . session('ong')->ComprovanteEndereco) }}"
                                        alt="Comprovante de Endereço"
                                        class="w-40 h-40 border-4 border-white rounded-full">
                                    @endif
                                    <label for="ComprovanteEndereco"
                                        class="block mb-1 text-lg font-medium text-black">Comprovante de
                                        Endereço</label>
                                    <input type="file" name="ComprovanteEndereco" id="ComprovanteEndereco"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5" />
                                </div>
                                <div class="mb-4 w-1/2">
                                    @if(session('ong')->FotoBackOn)
                                    <img src="{{ asset('storage/' . session('ong')->FotoBackOn) }}"
                                        alt="Foto do Background" class="w-40 h-40 border-4 border-white rounded-full">
                                    @endif
                                    <label for="FotoBackOn" class="block mb-1 text-lg font-medium text-black">Foto
                                        de Papel de Parede</label>
                                    <input type="file" name="FotoBackOn" id="FotoBackOn"
                                        class="bg-gray-50 border border-gray-500 text-gray-900 text-lg rounded-lg focus:ring-blue-300 focus:border-blue-300 block w-full p-2.5" value="1" />
                                </div>
                            </div>
                            <button type="submit"
                                class="col-span-2 w-full text-white bg-customRed hover:bg-customRedDark focus:ring-4 focus:outline-none focus:ring-customRedDark font-medium rounded-lg text-lg px-5 py-2.5 text-center">
                                Atualizar
                            </button>
                        </form>
                        @else
                        <p>ONG não encontrada.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>




        <!-- Cursos e Professores Section -->
     <!-- Cursos e Professores Section -->
<section class="py-10">
    <div class="container mx-auto flex flex-col lg:flex-row lg:space-x-8">
        <!-- Cursos Ofertados -->
        <div class="w-full lg:w-2/3 bg-white p-6 rounded-lg shadow-lg">
            <h4 class="text-xl font-bold mb-4">Cursos Ofertados</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                @foreach ($cursos as $curso)
                <div x-data="{ open: false }" class="bg-gray-300 p-4 rounded-lg relative">
                    <div class="cursor-pointer" @click="open = true">
                        <p class="text-center">Imagem do Curso</p>
                        <p class="text-center">{{ $curso->Nome }}</p>
                    </div>
                    <!-- Modal -->
                    <div x-show="open" @click.away="open = false" class="fixed inset-0 flex items-center justify-center z-50">
                        <div class="relative p-5 w-11/12 sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-5/12 mx-auto rounded-lg shadow-lg bg-white overflow-y-auto max-h-[90vh]">
                            <!-- Modal Header -->
                            <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                                <h3 class="text-3xl font-bold text-black">Detalhes do Curso</h3>
                                <button type="button" @click="open = false" class="text-gray-400 hover:bg-gray-200 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Fechar</span>
                                </button>
                            </div>
                                 <!-- Modal content -->
        
        <div class="p-2 md:p-8">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row justify-center items-center">
                    <div class="w-full md:w-1/2 flex flex-col items-center justify-center mt-5 md:mt-0">
                        <div class="bg-gray-200 rounded-lg p-4 h-48 w-full">
                            <!-- Aqui você pode adicionar a imagem do curso se tiver uma -->
                            <h2 class="text-center text-gray-700 font-bold">IMAGEM</h2>
                        </div>
                        <div class="bg-red-500 text-white font-bold py-2 px-4 rounded w-full mt-4 flex justify-center">
                            <p>{{ $curso->Nome }}</p>
                        </div>
                        <div class="bg-red-500 text-white font-bold py-2 px-4 rounded w-full mt-4 flex justify-center">
                            <p>{{ $curso->Horario }}</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col items-center justify-center mt-5 md:mt-0">
                        <div class="flex flex-col w-full md:w-5/6 justify-center items-center">
                            <h2 class="text-xl font-bold mb-4 text-center md:text-left">Informações do curso</h2>
                            <p class="text-gray-700 text-sm break-words flex text-justify">
                                {{ $curso->Sobre }}
                            </p>
                        </div>
                        <div class="bg-gray-200 rounded-lg p-4 mt-4 w-full md:w-5/6">
                            <p class="text-gray-700 font-bold">Materiais Necessários:</p>
                            <p class="text-gray-700">{{ $curso->Itens_Aula }}</p>
                            <p class="text-gray-700 font-bold mt-2">Dias:</p>
                                <div class="h-1 bg-gray-400 rounded-full mt-2 w-full">
                                    <div class="bg-gray-700 rounded-full h-1 mt-2 w-1/2"></div>
                                </div>
                                <p class="text-gray-700 text-sm mt-2">{{ $curso->Dias }}</p>
                        </div>                        </div>

                    </div>
                </div>
                <button
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full mt-4">
                    Matricule-se
                </button>
            </div>
        </div>
    </div>
                    <!-- End Modal -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

</body>

</html>