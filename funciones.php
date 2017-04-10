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
				return 'Aprobado';
			break;
		}
	}
?>