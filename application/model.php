<?php
	class Model{

		function __construct(){

		}
		function user_info(){
			
			$informacion = array(
				'Nom'=>'Alberto',
				'Cognom1'=>'Rueda',
				'Cognom2' => 'Ventura',
			);

			return $informacion; 
		}


		function user_error_info($error){
			
			$informacion = array(
				'Nom'=>'Alberto',
				'Cognom1'=>'Rueda',
				'Cognom2' => 'Ventura',
				'pagina' => $error
			);

			return $informacion; 
		}

	}