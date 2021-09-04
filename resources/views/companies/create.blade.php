<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Crear compañia</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('companies.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Nit</label>
                        <input type="text" class="form-control" name="nit">
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary">Crear nueva compañia</button>
                        <a href="{{url('companies')}}" class="btn btn-dark">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
