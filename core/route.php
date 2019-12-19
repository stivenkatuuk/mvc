<?php 

    class route extends core{
        public static function set($route, $function){
            $function->__invoke();
        }
    }

?>