
<?php 

    $patente=$_GET['patente'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Formulario Conductor</title>

</head>
<body>

<div class="container mt-5 mx-auto ">
<div class="mx-auto" style="width: 300px;">
  
    <img src="./img/Captura.PNG" alt="">
    <link rel="stylesheet" href="form.css">
    <form action="" >
        <div class="row mt-2">
        <label for="">Ingrese su Rut</label>
        </div>
        <div class="row mt-2 mx-3">
        <input type="text" name="rut" id="" placeholder=" ej: 12345678-K">
        <input type="hidden"  name="patente" value="<?php echo $patente;?>">
        </div>
        <div class="row mt-2 mx-3">
        <button type="submit" class="btn btn-success"> enter</button>
        </div>
</div>

       
    </form>
</div>



</div>
</body>
</html>