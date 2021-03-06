<?php

	// Inclusion del Archivo de Controlador Base
	REQUIRE_ONCE('main_controller.php');

	// Definicion del Controlador de Navegacion
	class NavegacionController extends MainController{

		// Carga el Head, Nav y Footer
		function index(){
			$this->navegacionView->showIndex();
		}

		// Carga la Seccion de Inicio
		function inicio(){
			$this->navegacionView->showInicio($this->categoriaModel->leerCategorias(), $this->noticiaModel->leerNoticias());
		}

		// Carga la Seccion de Inicio con las Noticias Correspondientes a la Categoria Indicada
		function noticias(){
			if(isset($_REQUEST['id'])){
				$this->navegacionView->showNoticias($this->categoriaModel->leerCategorias(), $this->noticiaModel->leerNoticias($_REQUEST['id']));
			}
		}

		// Carga la Seccion de Inicio con la Noticia Indicada
		function noticia(){
			if(isset($_REQUEST['id'])){
				$this->navegacionView->showNoticia($this->noticiaModel->leerNoticia($_REQUEST['id']));
			}
		}

		// Carga la Seccion de Informacion
		function informacion(){
			$this->navegacionView->showInformacion();
		}

		// Carga la Seccion de Galeria
		function galeria(){
			$this->navegacionView->showGaleria();
		}

		// Carga la Seccion de Contacto
		function contacto(){
			$this->navegacionView->showContacto();
		}
	}
?>