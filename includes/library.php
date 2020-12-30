<?php 
	require_once __DIR__ .'/config.php';

	class HotelLib{

    public function error_message($message){
      echo $message;
     }
			/*
       * Login
       *
       * @param $username, $password
       * @return $mixed
       * */

       /*
    * Login
    *
    * @param $username, $password
    * @return $mixed
    * */  
     public function Login($username,$password){
         global $wrongpassword,$wrongusername;
         try {
           $db = DataBase();
           $sql ="SELECT UserName,Password FROM tbladmin WHERE (UserName=:usname)";
           $query= $db -> prepare($sql);
           $query-> bindParam(':usname', $username, PDO::PARAM_STR);
           $query-> execute();
           $results=$query->fetchAll(PDO::FETCH_OBJ);
           if($query->rowCount() > 0)
           {
             foreach ($results as $row) {
               $hashpass=$row->Password;
             }
            if(!empty($_POST["remember"])) {
            //COOKIES for username
            setcookie ("user_login",$username,time()+ (10 * 365 * 24 * 60 * 60));
            //COOKIES for password
            setcookie ("userpassword",$password,time()+ (10 * 365 * 24 * 60 * 60));
            } else {
          if(isset($_COOKIE["user_login"])) {
              setcookie ("user_login","");
              if(isset($_COOKIE["userpassword"])) {
                setcookie ("userpassword","");
              }
            }
        }
             //verifying Password
             if(password_verify($password, $hashpass)) {
                 $session=$username;
                 echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
               } else {
                 echo "<script>alert('You entered wrong password')</script>";

               }
           }
           //if username or email not found in database
           else{
             echo "<script>alert('User not registered with us')</script>";
           }
       } catch (PDOException $e) {
           exit($e->getMessage());
       }
     }
     public function user_session(){
      if (isset($_SESSION['userlogin']))
        return true;
    }
    

	}

?>
