<?php include 'header.html'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Proyecto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Registrar Proyecto</h2>
    <form action="procesar_proyecto.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>
        
        <label for="presupuesto">Presupuesto:</label>
        <input type="number" id="presupuesto" name="presupuesto" required><br><br>
        
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required><br><br>
        
        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" id="fecha_fin" name="fecha_fin" required><br><br>
        
        <input type="submit" value="Registrar Proyecto">
    </form>
</body>
</html>
