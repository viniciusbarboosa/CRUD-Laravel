<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>



<main class="container">
    <h1>ADICIONAR</h1>
    <br>
    <form method="POST" action="{{route('user.store')}}">
        @csrf
        <div class="mb-3">
            <label  for="name" class="form-label">NOME</label>
            <input required type="text"  class="form-control" name="name" id="name" placeholder="Nome">
        </div>
    
        <div class="mb-3">
            <label for="email" class="form-label">EMAIL</label>
            <input required type="text"  class="form-control" name="email" id="email" placeholder="Email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">PASSWORD</label>
            <input required type="text"  class="form-control" name="password" id="password" placeholder="Senha">
        </div>  
        
        <div style="margin-bottom:10px;">
          <a type="button" href="{{route('user')}}" class="btn btn-success">VOLTAR</a>
        </div>

        <button type="submit" class="btn btn-success">ATUALIZAR</button>
    </div>
    
    </form>
 
</main>    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>