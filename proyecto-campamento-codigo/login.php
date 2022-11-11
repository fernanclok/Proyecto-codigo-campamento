<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--pack de iconos-->
        <script src="https://kit.fontawesome.com/c65205b7f3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./style.css"> 
        <title>Nature Camp</title>
        <link rel="icon" href="img/favicon.ico" type="ICO" sizes="16x16">
    </head>
    <body class="fondoad">
        <header class="menu">
         <div class="contenedor">
            <h3>Nature Camp</h3>
            <div class="imagennav"></div>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="Actividades.html">Actividades</a></li>
                <li><a href="Nosotros.html">Nosotros</a></li>
                <li><a href="#">Inscribirse</a></li>
                <li><a href="login.php">Administrador</a></li>
            </ul>
         </div>
        </header>
        <br>
        <div class="login-box">
            <h2>Iniciar sesion</h2>
            <form method="POST" action="iniciarsesion.php"enctype="multipart/form-data">
                <input type="email" placeholder="Correo" name="txtcorreo" minlength="8" maxlength="40", required>
                <br>
                <br>
                <input type="password" placeholder="Contraseña" alt="strongPass" name="txtpass"  maxlength="20" minlength="5", required>
                <br>
                <br>
                <hr>
                <button>iniciar sesion</button>
              </div>
            </form>
          </div>
          <br>
          <br>
          <br>
          <br>
     </body>
 </html>