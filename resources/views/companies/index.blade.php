<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br />
                <a href="{{url('companies/create')}}" class="btn btn-primary">Crear nueva compañia</a>
                <a href="{{url('products')}}" class="btn btn-warning">Ver productos</a>
                @if(session('status'))
                <div class="alert alert-success mt-3">
                    {{session('status')}}
                </div>
                @endif
                <figure class="text-center">
                    <h1>COMPAÑIAS</h1>
                </figure>
                <div class="table-responsive">
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>NIT</th>
                                <th>FECHA DE CREACIÓN</th>
                                <th>FECHA DE ACTUALIZACIÓN</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                            <tr>
                                <td>{{$company -> id}}</td>
                                <td>{{$company -> name}}</td>
                                <td>{{$company -> nit}}</td>
                                <td>{{$company -> created_at}}</td>
                                <td>{{$company -> updated_at}}</td>
                                <td>
                                    <form action="{{route('companies.destroy',$company->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('companies.show',$company->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('companies.edit',$company->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                {{$companies-> links()}}
            </div>
        </div>
    </div>
</body>

</html>
