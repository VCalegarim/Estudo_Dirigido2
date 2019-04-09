<?php

print "Digite F para feminino ou M para masculino:";
$sexo = fgetc(STDIN);

//$sexo = strtolower($sexo);

print ( $sexo);

if($sexo == "F"){
    print ("O seu sexo é feminino.");
}elseif($sexo == "M"){
    print ("O seu sexo é masculino.");
}else{
    print ("Sexo inválido.");
}
