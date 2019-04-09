<?php

print  " Digite a: " ;
$a = ( float ) fgets ( STDIN );

	if ( $a == 0 )
    print  " A equação é de 2º grau \n " ;
   
print  " Digite b: " ;
$b = ( float ) fgets ( STDIN );

print  " Digite c: " ;
$c = ( float ) fgets ( STDIN );


	$delta = ( $b ** 2 ) - ( 4 * $a * $c );

	$x1  = ( - $b - sqrt ( $delta )) / ( 2 * $a );

	$x2  = ( - $b + sqrt ( $delta )) / ( 2 * $a );

	$xsemdelta = ( - $b ) / ( 2 * $a );


if ( $delta == 0 ){
  print  " A equação possui uma raíz real, o resultado é: $xsemdelta \n " ;
}

if ( $delta < 0 ){
  print  " A equação não possui raízes reais, pois o delta é negativo \n " ;
}

if ( $delta > 0 ){
  print  " A equação possui duas raízes: \n X = $x1 \n X = $x2 \n " ;
}
