<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Taller Mecánico Automotriz</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="manifest" href="manifest.json">
</head>
<body>
    <?php include 'encabezado.php'; ?>

    <main>
        <!-- Carrusel de Imágenes -->
        <section class="carousel-container">
            <div class="carousel" id="carousel">
                <img src="Fondos/1.jpg" alt="Imagen 1">
                <img src="Fondos/3.jpg" alt="Imagen 2">
                <img src="Fondos/4.jpg" alt="Imagen 3">
                <img src="Fondos/5.jpg" alt="Imagen 4">
                <img src="Fondos/6.jpg" alt="Imagen 5">
                <img src="Fondos/7.jpg" alt="Imagen 6">
                <img src="Fondos/8.jpg" alt="Imagen 7">
                <img src="Fondos/llantas2.jpg" alt="Imagen 8">
            </div>
        </section>
    </main>

    <!-- Segunda sección con video -->
    <section class="video-section">
        <video autoplay loop>
            <source src="img/ma.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
    </section>


    <script>
        // Script para hacer dinámico el carrusel
        const carousel = document.getElementById('carousel');
        const images = carousel.getElementsByTagName('img');
        let index = 0;

        function showNextImage() {
            images[index].style.display = 'none'; 
            index = (index + 1) % images.length; 
            images[index].style.display = 'block'; 
        }

        
        for (let i = 1; i < images.length; i++) {
            images[i].style.display = 'none';
        }

        setInterval(showNextImage, 3000);
    </script>
    <?php include 'pie.php'; ?>
</body>
</html>


