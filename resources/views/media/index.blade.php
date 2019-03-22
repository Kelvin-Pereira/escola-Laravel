<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Media</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
       background: #fff5;
       
    }
    
    </style>
</head>
<body>
<div class="container">
<form action="calcular-media" method="post">
        <h1>Média</h1>
        <div class="box">
                @csrf
                <div class="col-4">
                <input class="form-control" type="text" placeholder="Nome" name="nome" required> <br><br>
                
                </div>
                <div class="col-4">
                <input class="form-control" type="text" placeholder="Nota: 1" name="nota1" required><br><br>

                </div>
                <div class="col-4">
                <input class="form-control" type="text" placeholder="Nota: 2" name="nota2" required><br><br>

                </div>
                <div class="col-4">
                <input class="form-control" type="text" placeholder="Nota: 3" name="nota3" required><br><br>

                </div>
                <div class="col-4">
                <input class="form-control" type="text" placeholder="Nota: 4" name="nota4" required>
               
                </div><br>
                <button  class="btn btn-primary" type="submit">Enviar</button>
                <button  class="btn btn-danger" type="reset">Limpar</button>
        </div>

    </form>
    
</div>
 
    
</body>
</html>