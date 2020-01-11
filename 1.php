<?php
function biodata ($name , $age ){
   
   $address = "Jl. Raya jetis gg. sido damai, Kota Malang";
   $hobbies = array("Swiming","traveling");
   $is_married= FALSE;
   $list_school= [
          [
           "name" => "Universitas Muhammadiyah Malang",
           "year_in" => "2013",
           "year_out"=>"2019"
          ],
          [
           "name" => "SMK TI Airlangga Samarinda",
           "year_in" => "2010",
           "year_out"=> "2013"
          ]
        ];
   $skill= [
          [
           "skil_name" => "PHP Fremwork Codeigniter",
           "level" => "beginer"
          ],
          [
           "skil_name" => "IoT with ESP8266, arduino and raspbery pi, and C",
           "level" => "beginer"
          ]
        ]; 
   $interest_in_coding= TRUE;  
   
   $biodata =array(
       'name'=> $name,
       'age'=> $age,
       'address' =>$address,
       'hobbies'=>$hobbies,
       'is_married'=>$is_married,
       'list_school' =>$list_school,
       'skill' =>$skill,
       'interest_in_coding'=>$interest_in_coding
       );
       //membuat format json
      echo json_encode($biodata);
       
}

biodata("Supriyanto",25);