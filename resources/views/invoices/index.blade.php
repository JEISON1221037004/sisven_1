<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Lista de Facturas</title>
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Lista de Facturas</h1>
    <div class="mb-3">
        <a href="{{ route('invoices.create') }}" class="btn btn-success">Agregar Factura</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Número</th>
                <th scope="col">Cliente</th>
                <th scope="col">Fecha</th>
                <th scope="col">Modo de Pago</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
            <tr>
                <th scope="row">{{ $invoice->id }}</th>
                <td>{{ $invoice->number }}</td>
                <td>{{ $invoice->customer->first_name }} {{ $invoice->customer->last_name }}</td>
                <td>{{ $invoice->date }}</td>
                <td>{{ $invoice->pay_mode->name }}</td>
                <td>
                    <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-info">Editar</a>
                    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>