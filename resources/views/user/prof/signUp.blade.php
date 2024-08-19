<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.8/inputmask.min.js"></script>
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')
</head>

<body class="overflow-auto">
    <div class="relative min-h-screen flex items-center justify-center  bg-center">
        <div class="bg-white w-[500px] my-5 mx-5 px-8 py-10 rounded-3xl shadow-md border border-gray-300 relative z-10">
            <a href="/signup">
                <button class="w-20 -translate-y-4 -translate-x-3 flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200 hover:rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-log-out" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 5l-7 7l7 7" />
                        <path d="M19 12h-14" />
                    </svg>
                </button>
            </a>
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Crescer Sabendo" class="h-16">
            </div>
            <h2 class="text-center text-3xl font-bold mb-6">Seja bem-vindo!!</h2>
    <form method="POST" action="/createprofessor">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Nome</label>
            <input type="text" required name="Nome" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">CPF</label>
            <input type="text" required maxlength="14" name="CPF"  placeholder= "___.___.___-__"  class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Nascimento</label>
            <input type="date" required name="Nascimento" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Telefone</label>
            <input type="text" required maxlength="13" name="Telefone"  placeholder= "(__) _______-______" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Informe sua formação</label>
            <input type="text" required name="Formacao" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="text" required name="Email" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Senha</label>
            <input type="password" required name="Senha" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Confirmar Senha</label>
            <input type="password" required name="C_Senha" class="w-full p-2 rounded-xl border-2 border-purple-900 h-12 focus:outline-none">
        </div>
        <button type="submit" class="w-full bg-purple-900 text-white p-2 rounded-xl text-lg font-semibold hover:bg-purple-700">Cadastrar-se</button>
    </form>

    <script>

        $(document).ready(function() {
            // Máscaras para os campos
            $('input[name="CPF"]').mask('000.000.000-00');
            $('input[name="Telefone"]').mask('(00) 00000-0000');

            
        });

    </script>
            @if ($errors->any())
            <div class="mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <img src="{{ asset('images/signInBack.png') }}" alt="Background" class="absolute inset-0 w-full h-full  z-0">
    </div>
</body>

</html>