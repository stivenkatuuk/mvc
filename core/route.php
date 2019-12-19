<?php 

    class route extends core{

    	/**
    	 * [Method set mempunyai 2 parameter yaitu $route dan $function.
    	 * 	parameter pertama ialah controllernya.
    	 * 	sedangkan parameter keduanya ialah menjalankan sebuah fungsi
    	 * 	sebuah fungsi membutuhkan parameter $route karena saat penggunaanya
    	 * 	dia butuh parameter itu penggunaannya ada di ./core/core.php
    	 * ]
    	 * @param [type] $route    [Controller]
    	 * @param [type] $function [Function]
    	 */
        public static function set($router,$function){
            $function->__invoke($route);

        }
    }

?>