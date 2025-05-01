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
    <p>AVENTURAS DEL DISTRITO DE EL MANTARO</p>
        <!-- Galería de imágenes -->
        <div class="results" id="results">
            <!-- Imágenes del 1.png al 22.png -->
            <div class="image-box"><img src="../IMAGENES/11.jpg" alt="Imagen 11"></div>
            <div class="image-box"><img src="../IMAGENES/12.jpg" alt="Imagen 12"></div>
            <div class="image-box"><img src="../IMAGENES/13.jpg" alt="Imagen 13"></div>
            <div class="image-box"><img src="../IMAGENES/14.jpg" alt="Imagen 14"></div>
            <div class="image-box"><img src="../IMAGENES/15.jpg" alt="Imagen 15"></div>
            <div class="image-box"><img src="../IMAGENES/16.jpg" alt="Imagen 16"></div>
            <div class="image-box"><img src="../IMAGENES/17.jpg" alt="Imagen 17"></div>
            <div class="image-box"><img src="../IMAGENES/18.jpg" alt="Imagen 18"></div>
            <div class="image-box"><img src="../IMAGENES/19.jpg" alt="Imagen 19"></div>
            <div class="image-box"><img src="../IMAGENES/20.jpg" alt="Imagen 20"></div>
            <div class="image-box"><img src="../IMAGENES/21.jpg" alt="Imagen 21"></div>
            <div class="image-box"><img src="../IMAGENES/22.jpg" alt="Imagen 22"></div>
        </div>
    </div>

    <script src="../JS/busqueda.js"></script>
</body>
</html>
