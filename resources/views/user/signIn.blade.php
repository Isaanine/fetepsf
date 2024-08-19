<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative min-h-screen flex items-center justify-center bg-cover bg-center">
        <div class="bg-white px-6 py-9  rounded-3xl shadow-md  md:w-dados  relative z-10 mx-10 my-6">
            <button class="w-20 -translate-y-4 -translate-x-3 flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200 hover:rounded-lg">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-log-out" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 5l-7 7l7 7" />
                        <path d="M19 12h-14" />
                    </svg>
                </a>
            </button>
            <div class="flex justify-center mb-6">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Crescer Sabendo" class="h-16">
                </a>
            </div>
            <h2 class="text-center text-4xl font-semibold mb-6">Bem Vindo De Volta!!</h2>
           
            
            <form action="/login" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="Email" class="block text-gray-700">Email</label>
                    <input type="email" required="Email" name="Email" class="w-full p-2 rounded-xl border-customDarkBlue border-2 h-12 focus:outline-none ">
                </div>
                <div class="mb-4">
                    <label for="Senha" class="block text-gray-700">Senha</label>
                    <input type="password" required id="Senha" name="Senha" class="w-full p-2 border-2 border-customDarkBlue rounded-xl h-12 focus:outline-none ">
                </div>
                

                <button type="submit" class="w-full bg-customDarkBlue text-white p-2 rounded-xl text-lg font-itim hover:bg-blue-800">Entrar</button>
            </form>
            <div class="text-start mt-6">
                Não tem conta? <a href="{{ url('/signup') }}" class="font-bold">Cadastre-se</a>
            </div>
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
        <img src="{{ asset('images/signInBack.png') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover z-0">
    </div>
</body>

</html>