<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio San José de Guanenta - Graduación</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Encabezado */
        header {
            background: linear-gradient(to right, #ffcc00, #005bbb);
            color: #fff;
            text-align: center;
            padding: 20px 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        header h1 {
            font-family: 'Georgia', serif;
            font-size: 2.5em;
            margin: 0;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
            animation: glow 1.5s infinite alternate;
        }

        /* Botón de inicio de sesión */
        .login-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #ffcc00;
            color: #005bbb;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-button:hover {
            background-color: #ffc107;
            color: #333;
        }

        .login-button:active {
            transform: scale(0.98);
        }

        /* Barra de navegación */
        nav {
            display: flex;
            justify-content: center;
            background-color: #005bbb;
            padding: 10px;
        }

        nav a {
            color: #ffcc00;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: bold;
            transition: background 0.3s;
        }

        nav a:hover {
            background-color: #ffcc00;
            color: #005bbb;
            border-radius: 5px;
        }

        /* Animación de luces */
        @keyframes glow {
            from {
                text-shadow: 0 0 10px #ffcc00, 0 0 20px #ffcc00, 0 0 30px #ffcc00, 0 0 40px #ffcc00;
            }
            to {
                text-shadow: 0 0 20px #ffcc00, 0 0 30px #ffcc00, 0 0 40px #005bbb, 0 0 50px #005bbb;
            }
        }

        /* Sección principal */
        .content {
            text-align: center;
            padding: 20px;
            background-image: url('path/to/background-image.jpg'); /* Imagen de fondo */
            background-size: cover;
            background-position: center;
            color: #444;
        }

        .content h2 {
            font-size: 1.8em;
            margin-top: 20px;
            color: #333;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
            animation: glow 2s infinite alternate;
        }

        .content p {
            font-size: 1.2em;
            font-style: italic;
            color: #555;
            margin-bottom: 30px;
        }

        /* Sección de fotos de graduación */
        .photos {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .photos img {
            max-width: 45%;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .photos img:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.5);
        }

        /* Pie de página */
        footer {
            background-color: #333;
            color: #ccc;
            text-align: center;
            padding: 10px 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
        <h1>Colegio San José de Guanenta</h1>
        <button class="login-button" onclick="window.location.href='pagina_principal.php'">Iniciar Sesión</button>
    </header>

    <!-- Barra de navegación -->
    <nav>
        <a href="#">INSTITUCIÓN</a>
        <a href="#">BANDA</a>
        <a href="#">DESTACADOS</a>
        <a href="#">MOSAICO</a>
        <a href="#">DIRECTIVAS</a>
        <a href="#">GALERÍA</a>
        <a href="#">CREADORES</a>
    </nav>

    <!-- Contenido principal -->
    <div class="content">
        <h2>"El honor más grande aún no se ha otorgado, la carrera más dura aún no ha comenzado."</h2>
        <p>No basta con soñar, hay que echarle manos a la obra, luchar hasta conseguir el éxito de nuestro presente. Nunca es tarde.</p>
        
        <!-- Fotos de graduación -->
        <div class="photos">
            <div>
                <h3>Once Uno - Jornada Mañana</h3>
                <img src="img/11-1.jpeg" alt="Foto de graduación1 Jornada Mañana">
            </div>
            <div>
                <h3>Once Dos - Jornada Mañana</h3>
                <img src="img/11-2.jpeg" alt="Foto de graduación2 Jornada Mañana">
            </div>
            <div>
                <h3>Once Tres - Jornada Mañana</h3>
                <img src="img/11-3.jpeg" alt="Foto de graduación3 Jornada Mañana">
            </div>
            <div>
                <h3>Once Cuatro - Jornada Mañana</h3>
                <img src="img/11-4.jpeg" alt="Foto de graduación4 Jornada Mañana">
            </div>
            <div>
                <h3>Once Cinco - Jornada Mañana</h3>
                <img src="img/11-5.jpeg" alt="Foto de graduación5 Jornada Mañana">
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer>
        &copy; 2024 Colegio San José de Guanenta. Todos los derechos reservados.
    </footer>

</body>
</html>

