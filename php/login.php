<?php
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
   
    $main_file = array_map('str_getcsv', file('../storage/users.csv'));

        $verify_email = array_column($main_file, 1);
        $verify_password = array_column($main_file, 2);


        $search_for_email = array_search($email, $verify_email);
        $search_for_password = array_search($password, $verify_password);


        if (($search_for_email = array_search($email, $verify_email)) !== FALSE) {
            if (($search_for_password = array_search($password, $verify_password)) !== FALSE){

                $data = ($main_file[$search_for_email]);

                $a = $data[0];

                $_SESSION['username'] = $a;

                header('location: http://localhost/mycode.php/userAuth/dashboard.php');
        
        }

        else {    
            echo "<script> alert ('Either email or password is wrong'); 
            window.location = 'http://localhost/mycode.php/userAuth/forms/login.html'; </script>";    }
    }

        else {    
            echo "<script> alert ('Either email or password is wrong'); 
            window.location = 'http://localhost/mycode.php/userAuth/forms/login.html'; </script>";    }

        $task = fopen('../storage/users.csv', 'r');    
        
        foreach ($main_file as $value) 
        {    
            fgetcsv($task, $value);   
            
        }

        fclose($task);
                
}


// }

// echo "HANDLE THIS PAGE";
?>

