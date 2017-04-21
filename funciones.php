<?php 
	function traducirStatusLead($id){
		switch ($id) {
			case '1':
				return 'Solicitado';
			break;
			case '2':
				return 'Rechazado';
			break;
			case '3':
				return 'Sin contacto';
			break;
		}
	}
	function traducirStatusLlamada($id){
		switch ($id) {
			case '1':
			return 'Seguimiento';
			break;
			case '2':
			return 'Seguimiento con ticket';
			break;
			case '3':
			return 'Cerrado';
			break;
		}
	}
	function traducirAcuerdo($id){
		switch ($id) {
			case '1':
			return 'No acepta reembolso';
			break;
			case '2':
			return 'No Aplica';
			break;
			case '3':
			return 'Otro Beneficio';
			break;
			case '4':
			return 'Reembolso';
			break;
			case '5':
			return 'Se proporcionó información';
			break;
		}
	}
?>