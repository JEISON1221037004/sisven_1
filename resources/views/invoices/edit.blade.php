<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Editar Factura</title>
</head>
<body>
<div class="container">
    <h1>Editar Factura</h1>
    <form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="number" class="form-label">Número de Factura</label>
            <input type="text" class="form-control" id="number" name="number" value="{{ $invoice->number }}" required>
        </div>
        <div class="mb-3">
            <label for="customer_id" class="form-label">Cliente</label>
            <select class="form-select" id="customer_id" name="customer_id" required>
                @foreach(App\Models\Customer::all() as $customer)
                <option value="{{ $customer->id }}" {{ $invoice->customer_id == $customer->id ? 'selected' : '' }}>
                    {{ $customer->first_name }} {{ $customer->last_name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $invoice->date }}" required>
        </div>
        <div class="mb-3">
            <label for="pay_mode_id" class="form-label">Modo de Pago</label>
            <select class="form-select" id="pay_mode_id" name="pay_mode_id" required>
                @foreach(App\Models\PayMode::all() as $payMode)
                <option value="{{ $payMode->id }}" {{ $invoice->pay_mode_id == $payMode->id ? 'selected' : '' }}>
                    {{ $payMode->name }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('invoices.index') }}" class="btn btn-warning">Cancelar</a>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>