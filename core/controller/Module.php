<?php

// Tareas que se realizan con modulos.

class Module {
	public static $module;
	public static $view;
	public static $message;

	public static function setModule($module){
		self::$module = $module;
	}

	public static function loadLayout(){
		include "core/modules/".Module::$module."/view/layout.php";
	}

	// Validación del modulo.
	public static function isValid(){
		$valid = false;
		$folder = "core/modules/".Module::$module;
		
			if(is_dir($folder)){
				$valid=true;

			} else { self::$message= "<b>404 NOT FOUND</b> Module <b>".Module::$module."</b> folder  !!"; }
		return $valid;
	}

	public static function Error(){
		echo self::$message;
		die();
	}
}

?>