<?php

    class ThrowError extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->mensaje = 'Error al cargar recurso';
            $this->view->render('error/index');
            //echo '<p>Error al cargar recurso</p>';
        }
    }

?>