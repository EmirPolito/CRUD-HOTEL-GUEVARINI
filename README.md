<div align="center">

# HOTEL GUEVARINI

[![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-00000F?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)](https://developer.mozilla.org/es/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)](https://developer.mozilla.org/es/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6-323330?logo=javascript&logoColor=F7DF1E)](https://developer.mozilla.org/es/docs/Web/JavaScript)

</div>

**HOTEL GUEVARINI** es un sistema web desarrollado para optimizar la administración hotelera mediante un entorno moderno, intuitivo y seguro. La plataforma permite
gestionar usuarios, habitaciones y reservaciones, integrando autenticación, control de roles y validaciones inteligentes para mejorar la organización operativa del hotel.
<br>
<br>
<img width="1600" height="725" alt="3ee28d41-9cf1-4338-911d-03c1e3533d8a" src="https://github.com/user-attachments/assets/6a82e645-35c9-45f1-bba0-772bb1e1fa63" />
<br>
<br>
<img width="1600" height="730" alt="3753bac1-7afa-4e0d-b38b-21b489363ea4" src="https://github.com/user-attachments/assets/2e7941e6-f0fc-43f2-b282-a6c40960fb72" />

---

## Características Principales

### Autenticación y Seguridad

- **Sistema** de inicio de sesión seguro.
- **Gestión rigurosa de roles (Administrador y Cliente).**
- **Verificación de cuentas nuevas** y sistema de recuperación de contraseñas mediante enlace único enviado por correo electrónico.
- **Funcionalidad para reenviar el correo de verificación** en caso de que un registro quede pendiente o el correo original se pierda.

### Gestión de Clientes

- **Base de datos centralizada de información de contacto de huéspedes** (activos/inactivos).

### Control de Inventario (Habitaciones)

- **Mantenimiento** dinámico de habitaciones, abarcando diferentes tipos (Sencilla, Doble, Suite) y sus respectivos precios.
- **Monitoreo** en tiempo real de su estatus (Disponible, Ocupada, Mantenimiento).

### Administración de Reservaciones

- **Creación**, seguimiento y confirmación de reservaciones hoteleras.
- **Trazabilidad y validación inteligente** entre periodos de ingreso y salida.

---

## Tecnologías Utilizadas

- **Frontend:** Estructura en HTML5 semántico, diseño estilizado con Vanilla CSS3 y lógica interactiva con JavaScript.
- **Backend:** Desarrollado sobre PHP 7.4+ gestionando la lógica de negocio y las persistencias.
- **Base de Datos:** Servidor MySQL o MariaDB.
- **Librerías / Dependencias:** Manejadas mediante Composer (por ejemplo, PHPMailer para el control de la mensajería).

---

## Guía de Instalación y Configuración

Sigue estos pasos rápidos para desplegar el proyecto y asegurar que te funcione todo correctamente:

1. **Instalar Dependencias:**
   Abre una terminal en la carpeta raíz del proyecto y ejecuta `composer install` para descargar las librerías necesarias (como PHPMailer).
2. **Crear la Base de Datos:**
   Importa el archivo `base_de_datos.sql` en tu gestor de MySQL (por ejemplo, phpMyAdmin, DBeaver o consola). Esto creará automáticamente la base de datos `hotel_guevarini_publico` con todas las tablas y datos iniciales.

3. **Configurar la Conexión:**
   Abre el archivo `php/conexion.php` y actualiza las credenciales para que coincidan con tu servidor MySQL local:

   ```php
   private $host = "localhost";
   private $db_name = "hotel_guevarini_publico";
   private $username = "root"; // Tu usuario de MySQL
   private $password = "";     // Tu contraseña de MySQL
   ```

4. **Correos Electrónicos (Opcional):**
   Si deseas probar el sistema de registro y recuperación de contraseñas, asegúrate de colocar tus credenciales SMTP (ej. Mailtrap) en los archivos dentro de la carpeta `php/auth/`.

5. **Habilitar el Registro de Usuarios (Opcional):**
   El sistema de registro ya viene totalmente diseñado (con el mismo estilo de pantalla dividida que el de inicio de sesión), pero viene oculto por defecto para facilitar un entorno cerrado/demostrativo. Para activarlo y permitir que los usuarios se registren de forma autónoma, sigue las instrucciones detalladas en la guía completa de configuración.

Para más detalles, revisa nuestra --> **[Guía Completa de Configuración y Despliegue](CONFIGURACION.md)**

---

## Cuentas de Prueba Preconfiguradas

Tras importar la base de datos, el sistema se abastecerá con un juego de credenciales semilla listas para evaluar el sistema en sus dos perfiles. La contraseña genérica asignada para pruebas es `12345`.

| Rol Asignado      | Correo Electrónico de Acceso | Contraseña |
| :---------------- | :--------------------------- | :--------- |
| **Administrador** | `admin@correo.com`           | `12345`    |
| **Cliente**       | `cliente@correo.com`         | `12345`    |

---

## Organización del Directorio

```text
CRUD-HOTEL-GUEVARINI-Publico/
├── css/                  # Diseño gráfico, reset y hojas de componente
├── img/                  # Activos multimedia visuales
├── js/                   # Control e interacción del cliente local
├── php/  y  libs/        # Capa de transacciones y procesamiento de formularios
├── views/                # Interfaces de Front y vistas autenticadas
├── vendor/               # Repositorio de librerías Composer
├── base_de_datos.sql     # Copia relacional en formato Script
├── composer.json         # Formato declarativo para repositorios Composer
├── README.md             # Documentación presente
└── login.php             # Puerta de enlace al dashboard / Punto de entrada
```

---

## Licencia

Este proyecto está bajo la Licencia MIT. Para más detalles, consulta el archivo [LICENSE](LICENSE).

---

## Desarrolladores

Este proyecto fue estructurado y desarrollado como entrega e implementación final del Sistema de Gestión Hotelera por:

**Emir Polito** - Frontend & QA Tester

- GitHub: https://github.com/EmirPolito

**Irving Mendez** - Full Stack & Designer

- Github: https://github.com/1RV1N6-M3ND3Z
