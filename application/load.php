<?php
	/**
	** Class Load
	**  helps in view's load
	**
	*/
	class Load{
		function __construct(){

		}		


		function view($filename,$data=null){
			
			if(is_array($data)){
				extract($data);
				//echo $Nom;
			}
			

			//echo $filename;
			include 'views/'.$filename;
		}


	}
