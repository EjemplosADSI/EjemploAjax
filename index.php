<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de Ajax</title>
	<script src="js/jquery-1.11.3.js"></script>
</head>
<body>
	<form action="#">
		<select id="selectGrado" name="selectGrado">
			<option value="Seleccione">Seleccione</option>
			<option value="Primero">Primero</option>
			<option value="Segundo">Segundo</option>
			<option value="Tercero">Tercero</option>
		</select>
		<div id="resultado"></div>
	</form>

	<script>
		//Funcion de JQuery
		$( "#selectGrado").change(function() {
			var grado = $("#selectGrado").val();
			$.ajax({
				method: "POST",
				url: "procesarAjax.php",
				data: { grado: grado}
			})

			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
	</script>

</body>
</html>