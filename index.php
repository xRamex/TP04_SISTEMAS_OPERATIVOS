<?php
$integrantes = ["Tomás Ramos. DNI:43.949.441", "Luis Orellana. DNI:44.269.998"];
$anio = 2025;
$materia = "Sistemas Operativos";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>TP04 - LAMP Server</title>
</head>
<body>
  <h1>Trabajo Práctico N°4</h1>
  <h2><?php echo $materia . " - Año " . $anio; ?></h2>
  <h3>Integrantes del Grupo:</h3>
  <ul>
    <?php foreach ($integrantes as $nombre): ?>
      <li><?php echo $nombre; ?></li>
    <?php endforeach; ?>
  </ul>
  <a href="descargas.php">Ir a la sección de descargas</a>
</body>
</html>
