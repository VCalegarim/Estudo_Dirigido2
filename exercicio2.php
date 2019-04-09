<?php

print "Digite um valor:";
$valor = fgets(STDIN);

if ($valor<0){
    print "\nO valor $valor é negativo.\n";
}

else{
    print "\nO valor $valor é positivo.";
}
