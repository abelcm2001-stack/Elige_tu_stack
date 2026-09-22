<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php echo $fechaActual = date('d/m/Y');
          echo $horaActual = date('H:i:s'); ?>


    <p> Fecha de hoy:     <?php echo htmlspecialchars($fechaActual); ?> </p>
    <p> Hora actualmente: <?php echo htmlspecialchars($horaActual); ?> </p>

    //htmlspecialchars() es una función que convierte caracteres especiales en entidades HTML.

</body>
</html>