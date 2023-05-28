<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>



<main class="container">
    <h1 style="text-align:center ;">Usuarios</h1>
    
    <div style="text-align:end; margin-bottom:10px;">
      <a type="button" href="{{route('user.create')}}" class="btn btn-success">ADICIONAR</a>
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PASSWORD</th>
            <th scope="col">VISUALIZAR</th>
            <th scope="col">EDITAR</th>
            <th scope="col">DELETAR</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($usuarios as $usuario )
            
          <tr>
            <th scope="row">{{$usuario->id}}</th>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->password}}</td>
            <td><a href="{{route('user.show',$usuario->id)}}" style="color:white;" class="btn btn-success">VER</a></td>
            <td><a  href="{{route('user.edit',$usuario->id)}}" style="color:white;" class="btn btn-primary">EDITAR</a>
            </td>
            <td>     
              <form method="POST" action="{{ route('user.destroy', $usuario->id) }}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">DELETAR</button>
            </form> 
            </td>
          </tr>

        @endforeach

        </tbody>
      </table>
</main>    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>