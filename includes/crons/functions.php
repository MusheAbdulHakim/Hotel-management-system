<?php 
    //checking to verify login session
     function Is_Login(){
        if(strlen($_SESSION['userlogin'])==0){
            header('location:login.php');
        }
    }

?>