<?php

print "Informe a base do número:";
$base = fgets (STDIN);

print "Informe o expoente do número:";
$expoente = fgets (STDIN);

$potencia =1;

    for($cont=0; $cont<$expoente; $cont++){
        $potencia = $potencia * $base;
    }

print "O resultado de $base elevado a $expoente é $potencia\n";
