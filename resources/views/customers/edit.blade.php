<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Editar Cliente</title>
</head>
<body>
<div class="container">
    <h1>Editar Cliente</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="document_number" class="form-label">Número de Documento</label>
            <input type="text" class="form-control" id="document_number" name="document_number" value="{{ $customer->document_number }}" required>
        </div>
        <div class="mb-3">
            <label for="first_name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $customer->first_name }}" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $customer->last_name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('customers.index') }}" class="btn btn-warning">Cancelar</a>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
