<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    //open file and check if the username exist inside
    //if it does, replace the password
        $main_file = array_map('str_getcsv', file('../storage/users.csv'));

        $email_verify = array_column($main_file, 1);

        $search_for_item = array_search($email, $email_verify);

        if (($search_for_item = array_search($email, $email_verify)) !== FALSE){

         $new_item = ($main_file[$search_for_item]); 
           
         $new_item[2] = $newpassword;

         $data = $new_item ;

         $main_file[$search_for_item] = $data;    
         
         echo "<script> alert ('Your Password has been changed'); 
         window.location = 'http://localhost/mycode.php/userAuth/forms/login.html'; </script>";  
        
        }

        else {    
            echo "<script> alert ('User does not exist'); 
            window.location = 'http://localhost/mycode.php/userAuth/forms/resetpassword.html'; </script>";    }

        $task = fopen('../storage/users.csv', 'w');    
        
        foreach ($main_file as $value) 
        {    
            fputcsv($task, $value);   
        }

        fclose($task);

    }
//echo "HANDLE THIS PAGE";
