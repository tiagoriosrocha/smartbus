<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Rotas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <ul>
        @foreach($rota as $Rota)
        <li>
            <a {{$rota->id}}>
                Título: {{$rota->titulo}}
                tipo: {{$rota->tipo}}
                percurso: {{$rota->percurso}}
            </a>
        </li>
        @endforeach
    </ul>

</body>
</html>