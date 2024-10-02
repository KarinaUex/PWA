<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Taller Mecánico Automotriz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'encabezado.php'; ?>

    <main>
        <section class="contact">
            <h1 style="text-align: center;">Contactanos</h1>
            <form action="#" method="POST" width: 300px;>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="celular">Celular:</label>
                <input type="tel" id="celular" name="celular" required>

                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>

                <label for="vehiculo">Vehículo:</label>
                <input type="text" id="vehiculo" name="vehiculo" required>

                <label for="imagen">Subir imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/*">

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <?php include 'pie.php'; ?>
</body>
</html>
