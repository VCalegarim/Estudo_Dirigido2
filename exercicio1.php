<?php

print "Informe um número:";
$numero1 = (int) fgets(STDIN);
//teve que informar "(int)" para conseguir usar números com dois digitos.

print "Informe mais um número:";
$numero2 = (int) fgets(STDIN);

if ($numero1 < $numero2){
    print "$numero2 é maior que $numero1";
}

else{
    print "$numero1 é maior que $numero2";  
}
       
