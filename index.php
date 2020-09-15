<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <h3 class="mt-3 mb-3">Cadastro de Alunos</h3>

            <form action="recebe.php" method="post" style="width: 400px;">

                <div class="form-group">
                    <input type="text" placeholder="Nome" name="nome" class="form-control" required>
                </div>

                <div class="form-group">
                    <input type="email" placeholder="E-mail" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <input type="tel" placeholder="Telefone" name="telefone" class="form-control">
                </div>

                <input type="submit" value="Enviar" class="btn btn-outline-primary">
            
            </form>
        </div>
    </body>
</html>