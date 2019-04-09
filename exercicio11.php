<?php

print  " Informe um número inteiro menor que 1000: ";
$numero = ( int ) fgets ( STDIN );

$centena = ( int ) ( $numero / 100 ) % 100 ;

$dezena = ( int ) ( $numero / 10 ) % 10 ;

$unidade = ( int ) ( $numero % 100 ) % 10 ; 


if ( $centena == 1 ){
        if ( $centena == 1  and  $dezena == 1 ){
            if ( $centena == 1  and  $dezena == 1  and  $unidade == 1 ){ 
                print  " $numero = $centena centenas, $dezena dezenas e $unidade unidades " ;
            } 

            print  " $numero = $centena centenas, $dezena dezenas e $unidade unidades " ;
            }

             if ( $centena == 1  and  $unidade == 1 )
            { print  " $numero = $centena centenas, $dezena dezenas e $unidade unidades " ;
}    
            
            print  " $numero = $centena centenas, $dezena dezenas e $unidade unidades " ;
}   

if ( $dezena == 1 )
                {
                    if ( $dezena == 1  and  $centena == 1 )
                        {    if ( $dezena == 1  and  $centena == 1  and  $unidade == 1 )
                                { print  " $numero = $centena centenas, $dezena dezenas e $unidade unidades " ;
                                }                
                        print  " $numero = $centena centenas, $dezena dezenas e $unidade unidades " ;
                            }
            
                         if ( $dezena == 1  and  $unidade == 1 )
                        { print  " $numero= $centena centenas, $dezena dezenas e $unidade unidades " ;
                            }    
                        
                            print  " $numero = $centena centenas, $dezena dezenas e $unidade unidades " ;
                            }  
                            
                            
if ( $unidade == 1 )
                            {
                                if ( $unidade == 1  and  $dezena == 1 )
                                    {    if ( $centena == 1  and  $dezena == 1  and  $unidade == 1 )
                                            { print  " $numero =$centena centenas, $dezena dezenas e $unidade unidades " ;
                                                }                
                                    print  " $numero = $centena centenas, $dezena dezenas e 
                                    $unidade unidades " ;
                                        }
                        
                                     if ( $centena == 1  and  $unidade == 1 )
                                    { print  " $numero = $centena centenas, $dezena dezenas e $unidade unidades " ;
                                       }    
                                    
                                        print  " $numero = $centena centenas, $dezena dezenas e $unidade unidade " ;
                                        }   
else { 
    print  " $numero = $centena centenas, $dezena dezenas e $unidade unidades " ;
}   