<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style1.css?v=1.1">
</head>
<body>
<section class="text-center my-5">
    <div class="my-5">
        <h1>¡Bienvenido a!</h1>
        <h2 class="my-3">Nuestro Registro usando PHP</h2>
        <form action="registro.php" method="get">
            <div class="row">
                <div class="col-6">
                    <label for="nombre">Ingrese su Nombre: </label><br>
                    <input class="form-control mb-2 my-3" type="text" name="nombre" id="nombre" placeholder="Ingrese nombres completos" required><br> <!-- mb-2 para margen abajo -->
                    
                    <label for="apellido">Ingrese el Apellido: </label><br>
                    <input class="form-control mb-2 my-3" type="text" name="apellido" id="apellido" placeholder="Ingrese Apellidos completos" required><br>
                    
                    <label for="edad">Ingrese su edad: </label><br>
                    <input class="form-control mb-2 my-3" type="number" name="edad" id="edad" placeholder="Ingrese edad actual" required><br>
                    
                    <label for="genero">Ingrese su Genero: </label><br>
                    <input class="form-control mb-2 my-3" type="text" name="genero" id="genero" placeholder="Ingrese genero" required><br>
                </div>
                <div class="col-6">
                    <label for="dni">Ingrese su Nro. de DNI: </label><br>
                    <input class="form-control mb-2 my-3" type="number" name="dni" id="dni" placeholder="Ingrese DNI actual" required><br>

                    <label for="email">Ingrese su Email: </label><br>
                    <input class="form-control mb-2 my-3" type="email" name="email" id="email" placeholder="Ingrese email personal" required><br>
                    
                    <label for="localidad">Ingrese su Localidad: </label><br>
                    <input class="form-control mb-2 my-3" type="text" name="localidad" id="localidad" placeholder="Ingrese localidad actual" required><br>
                    
                    <label for="telefono">Ingrese su Nro. Telefono: </label><br>
                    <input class="form-control mb-2 my-3" type="number" name="telefono" id="telefono" placeholder="Ingrese telefono" required><br>
                </div>
            </div>
            <br>
            <input type="submit" value="Guardar Registro" class="btn btn-primary">
            <input type="reset" value="Limpiar Campos" class="btn btn-dark"><br><br>
            <button type="button" class="btn btn-outline-danger" onclick="window.location.href='media.html';">Regresar</button>
        </form>
    </div>
</section>


</body>
</html>