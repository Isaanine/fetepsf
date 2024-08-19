<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src=" {{ asset('js/script.js') }} "></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative min-h-screen flex items-center justify-center bg-cover bg-center">
        <div class="bg-white w-[450px] mx-5 px-8 py-10 rounded-3xl shadow-md border border-gray-300 relative z-10">
            <a href="/">
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
            <div class="grid grid-cols-1 gap-4">
                <a href="/aluno/signup">
                    <div class="rounded-lg pl-2 py-4 shadow-lg hover:bg-gray-100 hover:shadow-2xl">
                        Aluno
                    </div>
                </a>
                <a href="/ong/signup">
                    <div class="rounded-lg pl-2 py-4 shadow-lg hover:bg-gray-100 hover:shadow-2xl">
                        ONG
                    </div>
                </a>
                <a href="/prof/signup">
                    <div class="rounded-lg pl-2 py-4 shadow-lg hover:bg-gray-100 hover:shadow-2xl">
                        Professor
                    </div>
                </a>
            </div>
        </div>
        <img src="{{ asset('images/signInBack.png') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover z-0">
    </div>
</body>

</html>