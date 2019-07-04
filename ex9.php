<?php

    function resto($x,$y){
        if($y%$x==0){
            $valor=$y/$x;
            $media="$y é divisível por $x, e o resultado é: $valor";
        }else{
            $valor=$y/$x;
            $media="$y não é divisível por $x, e o resultado é: $valor";
        }
        return $media;
    }

    print "Digite o valor de x: ";
    $x = (float) fgets(STDIN);
    print "Digite o valor de y: ";
    $y = (float) fgets(STDIN);
    $media = resto($x,$y);
    print $media;