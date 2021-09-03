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
                <a href="{{url('products/create')}}" class="btn btn-primary">Crear nuevo producto</a>
                @if(session('status'))
                <div class="alert alert-success mt-3">
                    {{session('status')}}
                </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>DESCRIPCIÓN</th>
                                <th>PRECIO</th>
                                <th>FECHA DE CREACIÓN</th>
                                <th>FECHA DE ACTUALIZACIÓN</th>
                                <th>IMAGEN</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product -> id}}</td>
                                <td>{{$product -> name}}</td>
                                <td>{{$product -> description}}</td>
                                <td>{{$product -> precio}}</td>
                                <td>{{$product -> created_at}}</td>
                                <td>{{$product -> updated_at}}</td>
                                <td> <img src="{{ asset('uploads/products/'.$product->image)}}"  width="120px"  alt="..."></td>
                                <td>
                                    <form action="{{route('products.destroy',$product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('products.show',$product->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                {{$products-> links()}}
            </div>
        </div>
    </div>
</body>

</html>
