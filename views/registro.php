<?php
session_start();
if (isset($_SESSION['usuario_id'])) {
    header("Location: panel.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta - CRUD HOTEL</title>
    <link rel="stylesheet" href="../css/login.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="login-page-wrapper">
        <div class="login-split-container">
            <!-- Lado de la Imagen -->
            <div class="login-image-side"></div>

            <!-- Lado del Formulario -->
            <div class="login-form-side">
                <div class="logo-container">
                    <img src="../img/logo-guevarini.png" alt="Logo Hotel Guevarini" class="logo-img"
                        style="display: block; margin: 0 auto; max-width: 280px; height: auto;">
                </div>

                <!-- <h2>Crear Nueva Cuenta</h2> -->

                <?php
                if (isset($_SESSION['error_registro'])) {
                    echo "<div class='alert alert-error'>" . $_SESSION['error_registro'] . "</div>";
                    unset($_SESSION['error_registro']);
                }
                if (isset($_SESSION['mensaje_registro'])) {
                    echo "<div class='alert alert-success'>" . $_SESSION['mensaje_registro'] . "</div>";
                    unset($_SESSION['mensaje_registro']);
                }
                ?>

                <form action="../php/auth/procesar_registro.php" method="POST">
                    <div class="form-group">
                        <label for="nombre_completo">Nombre Completo:</label>
                        <input type="text" id="nombre_completo" name="nombre_completo" required autocomplete="name">
                    </div>

                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" required autocomplete="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required minlength="5"
                            autocomplete="new-password">
                    </div>

                    <button type="submit" class="btn btn-primary login-btn">Registrarse</button>
                </form>

                <div class="form-links">
                    <a href="login.php">¿Ya tienes cuenta? Inicia sesión aquí</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>