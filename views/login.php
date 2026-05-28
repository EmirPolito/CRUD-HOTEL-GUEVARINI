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
    <title>Login - CRUD HOTEL</title>
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
                    <!-- Aquí va la imagen del logo que pondrá el usuario -->
                    <img src="../img/logo-guevarini.png" alt="Logo Hotel Guevarini" class="logo-img"
                        style="display: block; margin: 0 auto; max-width: 280px; height: auto;">
                </div>

                <!-- <h2>Iniciar Sesión</h2> -->

                <?php
                if (isset($_SESSION['error_login'])) {
                    echo "<div class='alert alert-error'>" . $_SESSION['error_login'];
                    if (isset($_SESSION['correo_no_verificado'])) {
                        $correo_verif = htmlspecialchars($_SESSION['correo_no_verificado']);
                        echo "<form action='../php/auth/reenviar_verificacion.php' method='POST' style='margin-top:10px;'>
                 <input type='hidden' name='correo' value='$correo_verif'>
                 <button type='submit' style='background:white;color:#dc3545;border:1px solid #dc3545;padding:8px;border-radius:4px;width:100%;cursor:pointer;font-weight:bold;'>Reenviar correo de verificación</button>
              </form>";
                        unset($_SESSION['correo_no_verificado']);
                    }
                    echo "</div>";
                    unset($_SESSION['error_login']);
                }
                if (isset($_SESSION['mensaje_login'])) {
                    echo "<div class='alert alert-success'>" . $_SESSION['mensaje_login'] . "</div>";
                    unset($_SESSION['mensaje_login']);
                }
                if (isset($_SESSION['mensaje_exito'])) {
                    echo "<div class='alert alert-success'>" . $_SESSION['mensaje_exito'] . "</div>";
                    unset($_SESSION['mensaje_exito']);
                }
                ?>

                <form id="formLogin" action="../php/auth/validar_login.php" method="POST">
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" required autocomplete="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required autocomplete="current-password">
                    </div>

                    <button type="submit" class="btn btn-primary login-btn">Iniciar sesión</button>
                    <div id="mensajeJS" class="alert alert-error hidden" style="margin-top: 15px;"></div>
                </form>

                <div class="form-links">
                    <!-- 
                      El registro está oculto por defecto para producción/demostración. 
                      Para habilitarlo, descomenta la siguiente línea y asegúrate de configurar 
                      las credenciales SMTP según la guía en CONFIGURACION.md 
                    -->
                    <!-- <a href="registro.php" style="display: inline-block;">Crear una cuenta nueva</a> -->
                    <!-- <br> -->
                    <a href="recuperar.php">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/main.js"></script>
</body>

</html>