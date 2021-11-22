<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
    <?php if(!empty($persona)){ ?>
        <form action="<?php echo base_url('index.php/process/edit'); ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $persona[0]['id']; ?>">
        <div class="mb-3">
            <label for="dni" class="form-label">Dni:</label>
            <input type="number" class="form-control" id="dni" name="dni" aria-describedby="dni" value="<?php echo $persona[0]['dni']; ?>">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="dni" value="<?php echo $persona[0]['nombre']; ?>">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Dni:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="dni" value="<?php echo $persona[0]['apellido']; ?>">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Dni:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="dni" value="<?php echo $persona[0]['telefono']; ?>">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dni:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="dni" value="<?php echo $persona[0]['direccion']; ?>">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">
                Editar
            </button>
        </div>
    </form>
    <?php } ?>
</body>
</html>