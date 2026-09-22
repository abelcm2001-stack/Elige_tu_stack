<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>
<body>

<header> 

Elige tu stack 

</header>

    <?php $fechaActual = date('d/m/Y');
          $horaActual = date('H:i:s'); ?>


    <p> Fecha de hoy:     <?php echo htmlspecialchars($fechaActual); ?> </p>
    <p> Hora actualmente: <?php echo htmlspecialchars($horaActual); ?> </p>

    <!-- htmlspecialchars() es una función que convierte caracteres especiales en entidades HTML y hace que los datos sean seguros para mostrar en la página. -->

</body>
</html>