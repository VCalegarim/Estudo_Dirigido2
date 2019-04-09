<?php

print "Digite a primeira nota:";
$n1 = (float) fgets(STDIN);

print "Digite a segunda nota:";
$n2 = (float) fgets(STDIN);

    $media_parcial = ($n1+$n2)/2;
    
    if ($media_parcial == 10){
        print "Aluno Aprovado com Distinção";
    }

 	elseif ($media_parcial >= 7 and $media<10){
        print "Aluno Aprovado";
 	}

    
	elseif ($media_parcial < 7){
	 print "Aluno Reprovado";
	}