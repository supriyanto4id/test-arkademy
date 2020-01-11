<?php

function findSame(){
    $string1 = array ("cat", "listen", "code", "act", "silent", "tac");
    $string2 =array("try","fire", "dark");
    $panjang = count($string1);

    $randomCheck = array();
    $i=0;
    do{
        foreach (count_chars($string1[$i], 1) as $c => $val) {
                    echo "$i = There were $val instance(s) of \"" , chr($c) , "\" in the string.\n";
                   
              
        }

    $i++; 
    }while($i < $panjang);

    // for( $i=0; $i < $panjang; $i++){
    //    // echo " $string1[$i] \n";

    //     foreach (count_chars($string1[0], 1) as $i2 => $val2) {
    //                 echo "$i = There were $val2 instance(s) of \"" , chr($i2) , "\" in the string.\n";
    //                     //  if(){

    //                     //  }
                    
    //              }
    // }


    // foreach (count_chars($string1 ,1) as $i1 => $val1) {
    //    // echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
    //     foreach (count_chars($string2, 1) as $i2 => $val2) {
    //         //echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
    //         if($i1==$i2){
    //             echo "same \n";
    //         }
    //      }
        
    //  }
   

     
}

findSame();
?>