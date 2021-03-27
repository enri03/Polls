<?php
session_start();
if(isset($_POST['login'])){

    require 'database.php';
    $username=$_POST['username'];
    $pass=$_POST['pass'];
 // kontrolli per fusha boshe

if (empty($username)||empty($pass)){
    header("Location: ../login.php?error=fushboshe");
exit();
}
else{
    $result=$conn->query("SELECT * FROM users WHERE username='$username';") or die($conn->error);
    if($result){
      $row=$result->fetch_assoc();
    $hash=$row['pass'];
    $check=password_verify($pass,$hash);
      if($check==true){
$_SESSION['username']=$row['username'];
$_SESSION['id']=$row['id'];
header("Location: ../user.php?sukses");
exit();
      }  
      else{
        header("Location: ../login.php?error=pasword_error");
        exit();
      }
    }
  
    else{
        header("Location: ../login.php?error=nouserwiththisusername");
        exit();
    }
}

}
