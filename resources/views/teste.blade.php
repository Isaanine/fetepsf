<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @php
    $responsavel = Session::get('responsavel');
    $aluno = Session::get('aluno');
    @endphp

    <p class="text-xl">{{$aluno->Nome}}</p>
    <p class=" text-xl">{{$responsavel->Nome}}</p>
</body>

</html>