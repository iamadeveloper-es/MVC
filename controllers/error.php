<?php

    class ThrowError extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->mensaje = 'Error en la solicitud o la págian no existe';
            $this->view->render('error/index');
            //echo '<p>Error al cargar recurso</p>';
        }
    }

?>