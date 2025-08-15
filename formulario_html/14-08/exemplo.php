<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo</title>
</head>
<body>

    <?php
        $dia = date("d"); //tudo que tiver aqui dentro o servidor irá processar e transformar em html
    
        echo "<p> $dia </p>";



?>
    <h1> Hoje é dia <?=$dia ?> de agosto de 2025 </h1>                 <!-- exibir variavel php < ?=$dia ?> -->
    <!-- para executar aruivos em php "php -S localhost:8080" -->
    <!-- variavel é sempre $ -->
    <!-- action= é para mandar para outra pagina -->
    <!-- ver diferença entre git e posh -->

<div class="container">
<h1></h1>
<form method="post" action = "formresp.php">
<div class="mb-3">
              <label for="nome" class="form-label">nome</label>
              <input type="text" id="nome" name="nome" class="form-control">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>

</body>
</html>