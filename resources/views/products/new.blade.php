<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Agregar Nuevo Producto</title>
</head>
<body>
<div class="container">
    <h1>Agregar Nuevo Producto</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="stock" the class="form-label">Stock</label>
            <input type="text" class="form-control" id="stock" name="stock">
        </div>
        <div class="mb-3">
            <label for="category_id" the class="form-label">Categoría</label
            <select class="form-select" id="category_id" name="category_id" required>
                <option selected disabled value="">Elige una categoría...</option>
                @foreach(App\Models\Category::all() as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" the class="btn btn-primary">Crear</button>
        <a href="{{ route('products.index') }}" class="btn btn-warning">Cancelar</a>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
