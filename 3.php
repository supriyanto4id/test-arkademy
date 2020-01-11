<?php
function inputSatu($inputData, $argumenSatu, $argumenDua ){
    $dataArgumen =array("Arkademian","Fighter!");
   
        echo "$inputData $dataArgumen[$argumenSatu], $dataArgumen[$argumenDua] \n " ;   
}

function inputDua($inputData, $argumenSatu){
    $dataArgumen =array("Halangan","Rintangan!", "Exercise");
    
        echo "$inputData, $dataArgumen[$argumenSatu]\n " ;   
}

inputSatu("Hello", 0, 1);
inputDua("This is an", 1)

?>