<?php

    class core{
        
        /**
         * [
         * 	method getConfigDefaultRoute membutuhkan 1 parameter yaitu 
         * 	$route adalah controllernya, didalam method getConfigDefaultRoute 
         * 	terdapat sebuah method static yang harus mempunyai 2 argument 
         * 	yaitu $route dan function argument. argument pertama dari set ambilnya dari parameter getConfigDefaultRoute()
         * 	sedangkan function($route) ambil dari argument pertama set yaitu $route lalu digunakan sama 
         * 	anaknya ya itu $roure::index(); parameter set dijadikan argument oleh function($route) agar 
         * 	bisa diakses oleh base code si function
         * 	
         * @param  [type] $route [Controller]
         */
        public static function getConfigDefaultRoute($route){  
            route::set($route, function($route){
                $route::index();
            });
        }

    }

?>