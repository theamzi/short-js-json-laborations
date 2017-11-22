<?php


   $error= "ok";

$num = $_GET['varde'];


if (is_numeric($num)) {
       
    $num = ($num * 2);
   
   
    
    } 
    
    else if ($num == null){
        
        $error= "Du har inte angett värde";
        $num = '';
       
     
           }    
    
   else     
            {    $error = "Du har inte angett ett numeriskt värde";
             $num = '';
    }

$arr[$error] = $num;
echo json_encode($arr);


    
?>