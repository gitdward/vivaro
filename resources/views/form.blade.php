<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vivaro - Formulario</title>
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
        <form method="post" action="{{ route('message.send') }}">
            <div class="row justify-content-center mb-3">
                <label for="phone_input" class="col-sm-2 col-form-label">Teléfono:</label>
                <div class="col-3 mb-3">
                    <input type="text" class="form-control" id="phone_input" placeholder="81 **** ****"
                        name="number">
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <label for="mensaje_input" class="col-form-label col-sm-2">Mensaje:</label>
                <div class="col-3 -mb-3">
                    <textarea class="form-control" id="mensaje_input" rows="3" name="message"></textarea>
                </div>
            </div>
            @csrf
            <div class="row justify-content-center">
                <div class="col-2">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>
