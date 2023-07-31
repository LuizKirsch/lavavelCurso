<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo</title>
</head>

<body>

    <div style="
    display:flex;
    flex-direction: row">

    @foreach ($pessoas as $pessoa )
        @component('components.avatar')

            @slot('image') {{$pessoa['image']}} @endslot

            @slot('nome') {{$pessoa['nome']}} @endslot
            @slot('birth') {{$pessoa['birth']}} @endslot
            @slot('idade') {{$pessoa['idade']}} @endslot

        @endcomponent
    @endforeach

    </div>

</body>

</html>
