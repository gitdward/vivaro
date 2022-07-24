<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vivaro - Respuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container p-5">
        <div class="row mb-3">
            <div class="col">
                <h1 class="text-center">Vivaro - Envío de mensajes</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="alert alert-{{ $result[0] }} col-6" role="alert">
                <h4 class="alert-heading">{{ $result[1] }}</h4>
                <p>{{ $result[2] }}</p>
                <hr>
                <p class="mb-0"><strong>Número de mensaje: </strong> {{ $number }}</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <a class="btn btn-primary" href="/">Regresar a formulario</a>
            </div>
        </div>
    </main>
</body>

</html>
