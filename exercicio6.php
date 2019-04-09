<?php

print"Informe o primeiro numero: \n";
$n1 = ( float ) fgets ( STDIN );

print  "Informe o segundo número: \n" ;
$n2 = ( float ) fgets ( STDIN );

print  "Informe o terceiro número: \n" ;
$n3 = ( float ) fgets ( STDIN );



    // Para determinar o maior:
    if ( $n1 > $n2  and $n1 > $n3 ){
    print  " O primeiro número é o maior " ;
}

    if ( $n2 > $n1  and  $n2 > $n3 ){
    print  " O segundo número é o maior " ;
}

    if ( $n3 > $n1  and  $n3 > $n2 ){
    print  " O terceiro número é o maior " ;
}
