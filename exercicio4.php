<?php
//para ler letras: "fgetc"

print "Informe uma letra: ";
$letra = ( string ) fgetc ( STDIN );

//$a =  " A " ; 
//$e =  " E " ; 
//$i =  " I " ; 
//$o =  " O " ; 
//$u =  " U " ;

if  ( ($letra = "A") or ($letra = "E") or ($letra = "I") or ($letra = "O") or ($letra = "U")){
	print  "A letra $letra é uma vogal \n ";

}else{ 
	print  " A letra $letra é uma consoante: \n " ;
	}