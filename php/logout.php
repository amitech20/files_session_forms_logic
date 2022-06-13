<?php

session_start();
logout();
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/


if ($_SESSION['username']) {
    session_unset();
    session_destroy();
    header('location: http://localhost/mycode.php/userAuth/forms/login.html');

}
    
}