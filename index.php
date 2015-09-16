<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de Ajax</title>
	<script src="js/jquery-1.11.3.js"></script>
</head>
<body>
	<form action="#">
		<strong>Seleccione un Grado: </strong>
		<select id="selectGrado" name="selectGrado">
			<option value="Seleccione">Seleccione</option>
			<option value="Primero">Primero</option>
			<option value="Segundo">Segundo</option>
			<option value="Tercero">Tercero</option>
		</select>
		<div id="resultado"><strong>Seleccione un Alumno: </strong> <select id="selectAlumno" name="selectAlumno"> </select></div>
	</form>

	<script>
		//Funcion de JQuery
		$("#selectGrado").change(function() {
			var gradoVal = $("#selectGrado").val();
			$.ajax({
				method: "POST",
				url: "procesarAjax.php",
				data: { grado: gradoVal}
			})

			.done(function( msg ) {
				$("#selectAlumno").html(msg);
			});
		});
	</script>

</body>
</html>