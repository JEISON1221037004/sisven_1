<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Agregar Nuevo Detalle de Factura</title>
</head>
<body>
<div class="container">
    <h1>Agregar Nuevo Detalle de Factura</h1>
    <form action="{{ route('details.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="invoice_id" class="form-label">Factura ID</label>
            <input type="text" class="form-control" id="invoice_id" name="invoice_id" required>
        </div>
        <div class="mb-3">
            <label for="product_id" class="form-label">Producto ID</label
            <input type="text" class="form-control" id="product_id" name="product_id" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="mb-3">
            <label for="price" the class="form-label">Precio</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('details.index') }}" class="btn btn-warning">Cancelar</a>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
