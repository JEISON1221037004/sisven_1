<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Agregar Nueva Factura</title>
</head>
<body>
<div class="container">
    <h1>Agregar Nueva Factura</h1>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="number" class="form-label">Número de Factura</label>
            <input type="text" class="form-control" id="number" name="number" required>
        </div>
        <div class="mb-3">
            <label for="customer_id" class="form-label">Cliente</label>
            <select class="form-select" id="customer_id" name="customer_id" required>
                <option selected disabled value="">Elige un cliente...</option>
                @foreach(App\Models\Customer::all() as $customer)
                <option value="{{ $customer->id }}">
                    {{ $customer->first_name }} {{ $customer->last_name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="pay_mode_id" the class="form-label">Modo de Pago</label>
            <select class="form-select" id="pay_mode_id" name="pay_mode_id" required>
                <option selected disabled value="">Elige un modo de pago...</option>
                @foreach(App\Models\PayMode::all() as $payMode)
                <option value="{{ $payMode->id }}">
                    {{ $payMode->name }}
                </option>
                @endforeach
            select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('invoices.index') }}" class="btn btn-warning">Cancelar</a>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
