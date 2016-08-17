<?php

// Una vista corresponde a cada componente visual dentro de un modulo.

class View {
	/**
	* La función load carga una vista correspondiente a un modulo.
	**/	
	public static function load($view){
		// Module::$module;
		if(!isset($_GET['view'])){
			include "core/modules/".Module::$module."/view/".$view."/widget-default.php";
		} else {
			if(View::isValid()){
				include "core/modules/".Module::$module."/view/".$_GET['view']."/widget-default.php";				
			} else {
				View::Error("<b>404 NOT FOUND</b> View <b>".$_GET['view']."</b> folder  !!");
			}
		}
	}

	/**
	* @function isValid
	* Valida la existencia de una vista.
	**/	
	public static function isValid(){
		$valid=false;
		if(file_exists($file = "core/modules/".Module::$module."/view/".$_GET['view']."/widget-default.php")){
			$valid = true;
		}
		return $valid;
	}

	public static function Error($message){
		print $message;
	}
}

?>