<?php

print  " Informe o preço do primeiro produto: " ;
$n1 = ( float ) fgets ( STDIN );

print  "Informe o preço do segundo produto: " ;
$n2 = ( float ) fgets ( STDIN );

print  "Informe o preço do terceiro segundo: " ;
$n3 = ( float ) fgets ( STDIN );


	if ( $n1 < $n2  and  $n1 < $n3 ){
    print  " O preço do primeiro produto é mais barato \n " ;
}

	if ( $n2 < $n1  and  $n2 < $n3 ){
    print  " O preço do segundo produto é mais barato \n " ;
}

	if ( $n3 < $n1  and  $n3 < $n2 ){
    print  " O preço do terceiro produto é mais barato \n " ;
}

	if ( $n1 == $n2  and  $n2 == $n3 ){
    print  " Todos os produtos custam a mesma quantia \n " ;
}