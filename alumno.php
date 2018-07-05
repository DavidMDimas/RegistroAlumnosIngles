<?php 
session_start();
if(isset($_SESSION['valida'])){

	?>


<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
	<title>Información del Alumno</title>
</head>
<body>
<div class="header"><a href="index" class="Inicio">Inicio</a>English TESI<a href="cerrarSesion" class="cerrarSesion">Cerrar Sesion</a></div>

<div class="menu-prin">
	<ul class="menu">
	<li><a href="#">Alumnos</a>
	<ul>
		<li><a href="alumno">Información</a></li>
		<li><a href="registroAlumnos">Registro</a></li>
	</ul>
	</li>

	<li><a href="#">Grupos</a>
		<ul>
			<li><a href="seleccionarGrupo">Información del Grupo</a></li>
			<li><a href="crearGrupos">Agregar nuevo Grupo</a></li>
		</ul>
	</li>

	<li><a href="#">Profesores</a>
	<ul>
		<li><a href="infoProfe">Información Profesor</a></li>
		<li><a href="registrarProfe">Registrar Profesor</a></li>
		<li><a href="subirCalificacionesGrupo">Subir Calificaciones</a></li>

	</ul>
	</li>
	<li><a href="reportes">Reportes</a></li>
	<li><a href="#">Constancias</a>
	<ul>
		
		<li><a href="registrarConstancia">Registrar Constancia</a></li>
		<li><a href="constancias">TESI</a></li>
		<li><a href="constanciasOtraInstitucion">Otra Institucion</a></li>
	</ul>
	</li>
	</ul>
</div>

<div class="contenido">
<form action="infoAlumno" method="POST" class="formAlumn">
<center>
	<p>(Consultar por Apellidos o Matricula)</p>
	<p>Matricula:<input type="text"  name="matricula">
	<p>Nombre(s):<input type="text" name="nombre"></p>
	<p>Apellido Paterno:<input type="text" name="apaterno"></p>
	<p>Apellido Materno:<input type="text" name="amaterno"></p>
	<p><select id="opcion">
		<option id="infE">Información Escolar</option>
		<option id="infP">Información Personal</option>
	</select></p>
	<input type="submit" name="info" value="Enviar" id="boton"></p>	
	<?php
	$_SESSION['paginaAlumno']=TRUE;
	 ?>
</center>
</form>
</div>
<footer>
<center>
	  <p>Desarrollado por:Aldo Matias Contacto: aldo_rheazyk@hotmail.com</p>
</center>

</footer> 
</body>
</html>
<?php 
}else{
	echo "<script>window.location.href=\"login\";</script>";
}
?>