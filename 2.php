<?php

function usernameValidity($username){
   //"/^\d[a-z]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{5,12}$/" mencocokan email
    if(preg_match("/^(?=[a-z])^(?=.*[\_])(?=.*[a-zA-Z0-9]).{5,12}$/", $username)){
        echo "username input true\n";
        
    }else{
        echo "Username harus diawali huruf kecil, tidak boleh menggunakan 
               special character kecuali ‘_’, 
             minimal 5 karakter dan maksimal 12 karakter \n ";
    }
function passwordValidity($password){
    
    if(preg_match("/(?=.*[0-9])(?=.*\W)(?=.*[A-Z]).{7,}/",$password)){
        echo "password input true\n";
    }else{
        echo "Password merupakan 7 digit karakter dengan kombinasi 1 simbol, 1 angka dan 5 huruf besar.";
    }
}
}
usernameValidity("friska_putri");
passwordValidity("1WORLD!");


  

?>

