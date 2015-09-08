<?php

// Inclusion del Motor de Templates Smarty
	REQUIRE_ONCE('libs/smarty/Smarty.class.php');

// Definicion de la Vista Principal
	class MainView{
		private $smarty;

		function __construct(){
			$this->smarty = new Smarty;
			$this->smarty->setCompileDir('libs/smarty/templates_c');
		}

		function showHome(){
			$this->smarty->display('index.tpl');
		}
	}
?>