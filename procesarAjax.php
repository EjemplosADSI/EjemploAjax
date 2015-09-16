<?php 
	$miGrado = $_POST['grado'];

	$arrPrimero = array('Juan', 'Manuela', 'Alejandra', 'Pedro');
	$arrSegundo = array('Miguel', 'Johana', 'Karen', 'Viviana');
	$arrTercero = array('Duber', 'Julian', 'Stiven');
	$arrRecorrer;

	$miSelect = $miSelect .= "<strong>Seleccione el Alumno: </strong>";
	if($miGrado == 'Primero'){
		$arrRecorrer = $arrPrimero;
	}else if ($miGrado == 'Segundo'){
		$arrRecorrer = $arrSegundo;
	}else if ($miGrado == 'Tercero'){
		$arrRecorrer = $arrTercero;
	}

	$miSelect .= "<select id='alumno' name='alumno'>";
	foreach ($arrRecorrer as $nombre) {
		$miSelect .= "<option value=".$nombre.">".$nombre."</option>";
	}
	$miSelect .= "</select>";
	
	echo $miSelect;
 ?>