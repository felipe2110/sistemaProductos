<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Editar Campaña</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('companies.update',$companies->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name" value="{{$companies->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input class="form-control" id="description" name="nit" rows="3" value="{{$companies->nit}}"></input>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary">Guardar</button>
                        <a href="{{url('companies')}}" class="btn btn-dark">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
