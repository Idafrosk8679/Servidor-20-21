<?php
    function render($dicci,$template){
        $fichero = file_get_contents($template);
        foreach($dicci as $key=>$value){
            $fichero = str_replace('{'.$key.'}',$value,$fichero);
        }
        echo $fichero;
    }
?>