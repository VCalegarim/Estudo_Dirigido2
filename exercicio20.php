<?php

for ($g=1; $g <= 8; $g++) { 
    for ($h=1; $h <= 8; $h++) { 
        print "*  ";   
    }
    print " \n"; #linha

}

print "===================================\n";


for ($i=1; $i <= 8; $i++) { 
    
    for ($j=1; $j <= $i; $j++) { 
        print "*  ";
    }
    
    print " \n"; #linha

}

print "===================================\n";

//imprime as linhas
for ($i=1; $i <= 8; $i++) { 

    //imprime os espaços
    for ($k=1; $k <= 8 - $i; $k++) { 
        print '   ';
    }
    
    //imprime as colunas
    for ($j=0; $j < $i; $j++) { 
        print "*  ";
    }
    
    print " \n"; #linha

}

