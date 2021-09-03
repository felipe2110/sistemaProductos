<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Crear producto</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('products.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input class="form-control" id="description" name="description" rows="3"></input>
                    </div>
                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input class="form-control" type="file" id="formFile" name="fileImage">
                    </div>
                    <div class="form-group">
                        <label for="">Compañia</label>
                        <select id="Select" class="form-select" name="companie_id">
                            @foreach($companies as $companie)
                            <option  value="{{$companie -> id}}">{{$companie -> name}}</option>
                            @endforeach()
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary">Crear nuevo producto</button>
                        <a href="{{url('products')}}" class="btn btn-dark">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
