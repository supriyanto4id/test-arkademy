<?php 

function fungsiArray(){
    $angka=array();
    $sumBilanganGanjil =array();
    $n=1;
    $a=0;
   for($i=0; $i<=9 ; $i++){ //<<< membuat angka 1 sampai 10
            
     $bilangan= $angka[$i] =$n++; // << masukan dalam array angka

        if($bilangan%2==1){       //<< mencari bilangan ganjil
          echo " $bilangan \n"; 
             $sumBilanganGanjil[$a] = $bilangan; //<< memasukan bilangan ganjil kedalam array
            $a++;   
        }     
   }
        echo "Sum =  ";
        echo array_sum($sumBilanganGanjil); // menampilkan total dari bilangan ganjil
        echo "\n";
}

fungsiArray();

?>