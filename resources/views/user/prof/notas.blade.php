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

</head>

<body class="bg-gray-100 overflow-x-hidden margin-auto h-screen">
    <!-- Header  -->
    <header class="bg-white shadow-lg">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>
            <nav id="navbar" class="hidden md:flex items-center space-x-12 gap-14">
                <a href="/prof/account" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Meus Dados</a>
                <a href="/prof/mural" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Mural</a>
                <a href="/prof/chat" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Chat</a>
                <a href="/prof/notas" class="text-customRed text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Notas</a>
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
            <a href="3" class="block text-customBlue text-lg font-itim py-1 hover:text-customRed">Meus Dados</a>
            <a href="/prof/mural" class="text-customBlue text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/prof/notas" class="block text-customRed text-lg font-itim py-1 hover:text-customRed">Notas</a>
            <a href="/prof/chat" class="block text-customBlue text-lg font-itim py-1 hover:text-customRed">Chat</a>
        </div>
    </header>
    <!-- End Header -->

    <!--Grades Atribution-->
    <div class="bg-gray-100">
        <div class="container mx-auto p-8 w-11/12 md:w-8/12 lg:w-6/12 xl:w-5/12">
            <h1 class="text-3xl font-bold text-center mb-8">Nome do Curso</h1>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <div class="w-full md:w-1/3">
                    <label for="matricula" class="block text-gray-700 font-bold mb-2">Nº da Matrícula</label>
                    <input type="text" id="matricula"
                        class="shadow appearance-none border border-customRed rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                </div>
                <div class="w-full md:w-1/3">
                    <label for="nome" class="block text-gray-700 font-bold mb-2">Nome do Aluno</label>
                    <input type="text" id="nome"
                        class="shadow appearance-none border border-customRed rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                </div>
                <div class="w-full md:w-1/3">
                    <label for="desempenho" class="block text-gray-700 font-bold mb-2">Desempenho</label>
                    <select id="desempenho"
                        class="shadow appearance-none border border-customRed rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Selecione</option>
                        <option value="Muito Bom">Muito Bom</option>
                        <option value="Bom">Bom</option>
                        <option value="Regular">Regular</option>
                        <option value="Irregular">Irregular</option>
                    </select>
                </div>
                <div class="w-full md:w-1/3">
                    <label for="nota" class="block text-gray-700 font-bold mb-2">Nota</label>
                    <select id="nota"
                        class="shadow appearance-none border border-customRed rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Selecione</option>
                        <option value="10">10</option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-4 mt-4 justify-center md:justify-end">
                <button
                    class="bg-customRed hover:bg-red-500 rounded-xl w-full md:w-20 h-10 text-white items-center">Enviar</button>
            </div>
        </div>
    </div>

    <div id="Divider" class="w-full h-1 bg-customRed "></div>


    <div class="flex justify-center mx-auto  rounded-lg  p-6">

        <div class="overflow-x-auto overflow-y-auto max-h-[400px] max-w-[300px] md:max-w-[1200px] ">
            <table class=" bg-white">
                <thead>
                    <tr class="bg-customRed border border-black text-left">
                        <th class="py-2 px-4 text-white">N° Matricula</th>
                        <th class="py-2 px-4 text-white">Nome</th>
                        <th class="py-2 px-4 text-white">Desempenho</th>
                        <th class="py-2 px-4 text-center">
                            <div class="hidden md:block relative text-left">
                                <input type="text"
                                    class="py-2 pl-4 w-56 rounded-lg border font-normal border-gray-300 focus:outline-none focus:ring focus:border-blue-300 "
                                    placeholder="Pesquisar...">
                                <button class="absolute left-48 top-0 mt-2 text-gray-600 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                    </svg>
                                </button>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="border border-black">
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 text-right">

                            <button class=" text-gray-500 mr-16" onclick="toggleModal('modal')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>

                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 text-right">
                            <button class=" text-gray-500 mr-16" onclick="toggleModal('modal')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 text-right">
                            <button class=" text-gray-500 mr-16" onclick="toggleModal('modal')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 text-right">
                            <button class=" text-gray-500 mr-16" onclick="toggleModal('modal')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">ONG</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4">Email</td>
                        <td class="py-2 px-4 text-right">
                            <button class=" text-gray-500 mr-16" onclick="toggleModal('modal')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <footer class="w-full ">
        <img src="{{ asset('images/Finalback-Red.png') }}" alt="" class="w-full object-cover h-auto">
    </footer>


    <!-- END Footer Image -->

</body>

</html>