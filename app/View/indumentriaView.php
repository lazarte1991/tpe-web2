<?php

require_once('libs/smarty/libs/Smarty.class.php');

    class IndumentariaView {

        private $title;

        function __construct() {
            $this->title  = "Subject";
        }

        function showHome($categoria, $producto){
        }

        function showProducto($categoria, $producto){
            $smarty = new Smarty();
            $smarty->assign('categoria', $categoria, true);
            $smarty->assign('producto', $producto, true);
            $smarty-> display('templates/tabla.tpl');
        }

        function showLoggin(){
        }

        function ShowHomeLocation(){
            header("Location: ".BASE_URL."home");
        }
        function ShowCategoriasLocation($categoria){
            header("Location: ".BASE_URL."home/categorias/".$categoria);
        }
    }
?>