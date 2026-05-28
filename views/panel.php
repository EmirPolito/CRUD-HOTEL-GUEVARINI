<?php
// Inicia la sesión para poder acceder a variables de sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../login.php");// Si no hay sesión, redirige al login
    exit();
}

// Obtiene datos del usuario desde la sesión
$nombre_usuario = $_SESSION['usuario_nombre']; // Nombre del usuario
$rol_id = $_SESSION['usuario_rol_id']; // Rol del usuario (1 = admin, otro = cliente)

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8"> <!-- Codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive -->
    <title>Panel Principal - CRUD HOTEL</title>

    <!-- Hoja de estilos con parámetro dinámico para evitar caché -->
    <link rel="stylesheet" href="../css/panel.css?v=<?php echo time(); ?>">

</head>

<body style="background-image: url('../img/menu.jpg?v=<?php echo time(); ?>');">

    <!-- NAVBAR PRINCIPAL -->
    <nav class="navbar">
        <a href="panel.php" class="logo-link" style="text-decoration:none;">
            <div class="logo"><img src="../img/logo-hotel-guevarini-blanco.png" alt="Hotel Guevarini"
                    style="height: 101px; margin: -30px 0;"></div>
        </a>

        <div class="nav-links">

            <span style="font-weight:600;margin-right:35px;">
                Bienvenido -
                <?php echo ($rol_id == 1 ? 'Administrador' : 'Cliente'); ?> <!-- Muestra el rol dependiendo del ID -->
                <?php echo htmlspecialchars($nombre_usuario); ?> <!-- Muestra el nombre de forma segura -->
            </span>

            <!-- Enlace visible SOLO para administrador -->
            <?php if ($rol_id == 1): ?>
                <a href="usuarios/usuarios.php">Usuarios</a>
            <?php endif; ?>

            <!-- Botón para cerrar sesión -->
            <a href="../php/auth/logout.php" class="btn btn-danger" style="margin-left: 10px; padding: 5px 10px;">
                Cerrar Sesión
            </a>

        </div>
    </nav>

    <!-- CONTENEDOR PRINCIPAL DEL PANEL -->
    <div class="panel-grid">
        <div class="panel-right">
            <div class="panel-overlay"></div>
            <div class="panel-content">
                <h2 class="panel-title">Panel de Control</h2>
                <div class="grid-opciones">

                    <!-- OPCIÓN SOLO PARA ADMIN: CLIENTES -->
                    <?php if ($rol_id == 1): ?>
                        <a href="clientes/clientes.php" class="card card-clientes">
                            <div class="card-icon-container">
                                <img src="../img/clientes.png" alt="Icono Clientes">
                            </div>
                            <div class="card-text">
                                <h3>Clientes</h3>
                                <p>Gestionar base de datos de clientes y estatus.</p>
                            </div>
                            <span class="card-btn">Ver Detalles</span>
                        </a>
                    <?php endif; ?>

                    <!-- OPCIÓN: HABITACIONES -->
                    <a href="habitaciones/habitaciones.php" class="card card-habitaciones">
                        <div class="card-icon-container">
                            <img src="../img/habitaciones.png" alt="Icono Habitaciones">
                        </div>
                        <div class="card-text">
                            <h3>Habitaciones</h3>
                            <p>
                                <?php
                                echo $rol_id == 1
                                    ? 'Ver y modificar estado de las habitaciones del hotel.'
                                    : 'Ver habitaciones disponibles.';
                                ?>
                            </p>
                        </div>
                        <span class="card-btn">Ver Detalles</span>
                    </a>

                    <!-- OPCIÓN: RESERVACIONES -->
                    <a href="reservaciones/reservaciones.php" class="card card-reservaciones">
                        <div class="card-icon-container">
                            <img src="../img/reservacion.png" alt="Icono Reservaciones">
                        </div>
                        <div class="card-text">
                            <h3>Reservaciones</h3>
                            <p>Consulta las reservaciones activas e historial disponible.</p>
                        </div>
                        <span class="card-btn">Ver Detalles</span>
                    </a>

                </div>
            </div>
        </div>

    </div>

</body>

</html>