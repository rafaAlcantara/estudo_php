<?php

 //laço de repetição for

 /*for( $i=1 ; $i<100 ; $i+=2){
//   inicial  compara    saida

    echo "<br>1 = " . $i;
    if($i == 11){
       // break;  interrompe o laço
       $i = 100;
    }
 }
*/

 for( $i=1 ; $i<=10 ; $i++ ){
//   inicial  compara    saida

        if($i == 5 || $i == 8){
           // break;  //  INTERROMPE O LAÇO
           //$i = 100;
           continue; //  VOLTA PARA O INICIO DO FOR.
           //echo "<br>TESTE = " . $i;    DEPOIS DO CONTINUE NAO EXECUTA.
        }else{
            echo "<br>1 = " . $i;
        }
     }

?>