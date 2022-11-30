<?php
include('sesion.php');
if($menuadmin==false){
	header ('Location: inicio.html');
}
?>
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
    <body class="administrador">
    <header>
        <div class="contenedor">
            <h3>NATURE CAMP</h3>
            <div class="box">
            </div>
            <ul>
            <a href="administrador.php"><li>Menu Principal</li></a>
                <a href="logout.php"><li>Cerrar sesion</li></a>
            </ul>
           
</div>
         <br><br><br><br>
            <nav class="menuAD">
		<ul class="menu-horizontal-admin">
			<li>
            <a href="consultarINST.php">INSTRUCTORES</a>
				<ul class="menu-vertical">
					<li><a href="insertarINST.php">Agregar Instructor</a></li>
					<li><a href="actualizarINST.php">Actualizar Instructor</a> </li>
					<li><a href="borrarINST.php">Eliminar Instructor</a></li>
				</ul>
			</li>
			<li>
				<a href="consultarCamp.php">CAMPISTA</a>
				<ul class="menu-vertical">
                    <li><a href="campistaADM.php">Agregar Campista</a></li>
					<li><a href="actualizarCAM.php">Actualizar</a> </li>
					<li><a href="borrar.php">Eliminar</a></li>
				</ul>
			</li>
			<li>
				<a href="consultaADMIN.php">ADMINISTRADORES</a>
				<ul class="menu-vertical">
                <li><a href="insertarADMIN.php">Nuevo Administrador</a></li>
					<li><a href="actualizarADMIN.php">Actualizar datos</a> </li>
					<li><a href="borrarADMIN.php">Baja de administrador</a></li>
				</ul>
			</li>
		</ul>
	        </nav>
        </header>
<?php
              include_once("campista.php");
              $myCampista= new campista();
              $dataset=$myCampista->getINSTRUCTOR();
              ?>
              <br>
              <br>
              <table class="tabla">
              <section class="marcadeagua"></section>
      <thead>
      <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Edad</th>
          <th>Años de Experiencia</th>
      </tr>
      </thead>
        <?php foreach ($myCampista->getINSTRUCTOR() as $row){?> 
        <tr>
        <td><?php echo $row['ID'] ?></td>
        <td><?php echo $row['Instructor'] ?></td>
        <td><?php echo $row['Edad'] ?></td>
        <td><?php echo $row['Experiencia'] ?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <br><br>
    </body>
    </html>