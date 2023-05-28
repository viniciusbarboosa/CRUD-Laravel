<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
<div class="container">

    <h1>EDITAR</h1>
<form method="POST" action="{{route('user.update',$usuario->id)}}">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NOME</label>
        <input type="text" value="{{$usuario->name}}" class="form-control" name="name" id="name" placeholder="Nome">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">EMAIL</label>
        <input type="text" value="{{$usuario->email}}" class="form-control" name="email" id="email" placeholder="Email">
    </div>
    <div style="margin-bottom:10px;">
        <a type="button" href="{{route('user')}}" class="btn btn-success">VOLTAR</a>
    </div>
    
    <button type="submit" class="btn btn-success">ATUALIZAR</button>
</div>

</form>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>