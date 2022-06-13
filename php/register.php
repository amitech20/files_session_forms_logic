<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $path = "../storage/users.csv";
    $file = fopen($path, "a");
    $data = array(
         $username,
         $email,
         $password
    );
    $task  = fputcsv($file, $data);
    fclose($file);

    // echo $data['email'];

if ($task) {
    echo "<script> alert ('User Successfully registered'); 
            window.location = 'http://localhost/mycode.php/userAuth/forms/login.html'; </script>";
    
}
else{
    echo "<script> alert ('User registration was not Successfully'); 
    window.location = 'http://localhost/mycode.php/userAuth/forms/register.html';</script>";

}
    
    
}


?>
