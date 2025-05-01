<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valle del Mantaro - Galería</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-image: url('../IMAGENES/fondo.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    color: #333;
}

.container {
    max-width: 1400px;
    margin: auto;
    padding: 40px 20px;
}

.search-container {
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
}

.search-container input {
    padding: 12px 20px;
    width: 50%;
    font-size: 16px;
    border-radius: 30px;
    border: 2px solid #007bff;
    outline: none;
    transition: 0.3s ease;
}

.search-container input:focus {
    border-color: #0056b3;
    box-shadow: 0 0 6px rgba(0, 123, 255, 0.4);
}

.results {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 40px 20px;
}

.image-box {
    width: 300px;
    height: 200px;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
    background-color: #fff;
}

.image-box:hover {
    transform: scale(1.03);
}

.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 12px;
}


        @media (max-width: 768px) {
            .image-box {
                width: 90%;
            }

            .search-container input {
                width: 70%;
            }
        }
        .container p{
            max-width: 1400px;
            margin: auto;
            padding: 40px 20px;
            font-size:40px;
            text-align:center;
            color:rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <div class="container">
    <p>Plaza de Armas!!</p>

        
        <!-- Galería de imágenes -->
        <div class="results" id="results">
            <!-- Imágenes del 1.png al 22.png -->
            <div class="image-box"><img src="../IMAGENES/11111.png" alt="Imagen 1"></div>
            <div class="image-box"><img src="../IMAGENES/22222.png" alt="Imagen 2"></div>
            <div class="image-box"><img src="../IMAGENES/33333.png" alt="Imagen 3"></div>
            <div class="image-box"><img src="../IMAGENES/44444.png" alt="Imagen 4"></div>
            
        </div>
    </div>

    <script src="../JS/busqueda.js"></script>
</body>
</html>
