<?php 
	$miGrado = $_POST['grado'];

	$arrPrimero = array('Juan', 'Manuela', 'Alejandra', 'Pedro');
	$arrSegundo = array('Miguel', 'Johana', 'Karen', 'Viviana');
	$arrTercero = array('Duber', 'Julian', 'Stiven');

	$miSelect = "";
	if($miGrado == 'Primero'){
		$miSelect .= "<select id='alumno' name='alumno'>";
		foreach ($arrPrimero as $nombre) {
			$miSelect .= "<option value=".$nombre.">".$nombre."</option>";
		}
		$miSelect .= "</select>";
	}

	if($miGrado == 'Segundo'){
		$miSelect .= "<select id='alumno' name='alumno'>";
		foreach ($arrSegundo as $nombre) {
			$miSelect .= "<option value=".$nombre.">".$nombre."</option>";
		}
		$miSelect .= "</select>";
	}

	echo $miSelect;
 ?>