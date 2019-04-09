<?php

print  " Primeiro número: " ;
$n1 = ( float ) fgets ( STDIN );

print  " Segundo número: " ;
$n2 = ( float ) fgets ( STDIN );

print  " Terceiro número: " ;
$n3 = ( float ) fgets ( STDIN );


if ( $n1 > $n2  and  $n1 > $n3  and  $n2 > $n3 ) {
    print  " $n1 \n " ;
    print  " $n2 \n " ;
    print  " $n3 \n " ;
}

if ( $n2 > $n1  and  $n2 > $n3  and  $n3 > $n1 ) {
    print  " $n2 \n " ;
    print  " $n3 \n " ;
    print  " $n1 \n " ;
}

if ( $n3 > $n1  and  $n3 > $n2  and  $n2 > $n1 ) {
    print  " $n3 \n " ;
    print  " $n2 \n " ;
    print  " $n1 \n " ;
}

if ( $n1 > $n2  and  $n1 > $n3  and  $n3 > $n2 ) {
    print  " $n1 \n " ;
    print  " $n3 \n " ;
    print  " $n2 \n " ;
}

if ( $n2 > $n1  and  $n2 > $n3  and  $n1 > $n3 ) {
    print  " $n2 \n " ;
    print  " $n1 \n " ;
    print  " $n3 \n " ;
}

if ( $n3 > $n1  and  $n3 > $n2  and  $n1 > $n2 ) {
    print  " $n3 \n " ;
    print  " $n1 \n " ;
    print  " $n2 \n " ;
}