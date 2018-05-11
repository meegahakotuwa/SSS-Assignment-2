<?php

$add_email = $_POST['add_email'];
$add_password = $_POST['add_password'];
$add_token = $_POST['add_token'];


        
   
            if ($add_token == $_COOKIE["cookie_token"]){
               
                 /* Valid Token */
     echo "Valid Token <br>";
     
       
     
    
    if($add_email == "meegahakotuwa@gmail.com" && $add_password == "nadeesha1234"){
        
        
         echo "Valid Email & Password";
        
        
        
    }else{
        
        
         echo "Invalid Email & Password";
        
        
        
    }
    
                
            }
       
     else {
        
         
         
         
     /* Invalid Token */
    
    echo "Invalid Token";
    
    
    
    }
    ?>