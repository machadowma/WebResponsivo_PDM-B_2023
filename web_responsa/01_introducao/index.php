<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<?php include("../menu.php"); ?>

<div class="container-fluid mt-3">
    <h1>Introdução</h1>
    <h5>Dobrar Receita</h5>

    <br>1 lata de leite condensado
    <br>1 lata de creme de leite
    <br>1,5 xícara de suco de limão

    <form method="POST" action="action.php">
      Multiplicar receita por:
      <input type="number" id="num" name="num">
      <input type="submit" value="ok">
    </form>

</div>

</body>
</html>

