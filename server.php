<?php
    require_once "lib/nusoap.php";
    function getTenis($marcas){
        if ($marcas == "Tenis"){
            return join(",", array(
                "Nike",
                "Adidas",
                "Converse",
                "Puma",
                "Reebok"));
        }
        else{
            return "No hay marcas de Tenis";
        }
    }
    $server = new soap_server();
    $server->register("getTenis");
    if(!isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>