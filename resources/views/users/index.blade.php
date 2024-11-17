<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action=" {{ route('user.import') }} " method="POST" enctype="multipart/form-data">
        <!-- O 'user.import' é o nome da route -->
        @csrf
        {{-- o @csrf serve para gerara um token de segurança que verificará o form ativado --}}
        <input type="file" name="file" id="file" accept=".csv"><br><br>

        <button type="submit" id="fileBtn">
            Importar
        </button>
        {{-- ao executar esse form um erro pode aparecer caso ele não esteja conectado a um BD, observe
        O PHP utiliza uma pasta temporária definida pela diretiva upload_tmp_dir no arquivo de configuração do PHP (php.ini). Certifique-se de que a pasta configurada: --}}
    </form>

    @foreach ($users as $user)
        {{ $user->$id }}
    @endforeach
</body>

</html>
