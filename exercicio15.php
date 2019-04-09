<?php

print"Informe o primeiro numero: \n";
$n1 = ( float ) fgets ( STDIN );

print  "Informe o segundo número: \n" ;
$n2 = ( float ) fgets ( STDIN );

print  "Informe o terceiro número: \n" ;
$n3 = ( float ) fgets ( STDIN );

print  "Informe o quarto número: \n" ;
$n4 = ( float ) fgets ( STDIN );

print  "Informe o quinto número: \n" ;
$n5 = ( float ) fgets ( STDIN );


        // Para determinar o maior:
        if ( $n1 > $n2  and $n1 > $n3 and $n1>$n4 and $n1>$n5){
            print  " O primeiro número é o maior " ;
        }

            if ( $n2 > $n1  and  $n2 > $n3 and $n2>$n4 and $n2>$n5 ){
            print  " O segundo número é o maior " ;
        }

            if ( $n3 > $n1  and  $n3 > $n2 and $n3>$n4 and $n3>$n5){
            print  " O terceiro número é o maior " ;
        }

        if ( $n4 > $n1  and  $n4 > $n2 and $n4>$n3 and $n4>$n5 ){
            print  " O quarto número é o maior " ;
        }

        if ( $n5 > $n1  and  $n5 > $n2 and $n5>$n3 and $n5>$n4 ){
            print  " O quinto número é o maior " ;
        }