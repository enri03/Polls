<?php
session_start();
?>
<?php
if(isset($_POST['submit'])){
    //lidhja me databazen 
    require "database.php";
    
    $username=$_POST['username'];
    $emri=$_POST['emri'];
    $mbiemri=$_POST['mbiemri'];
    $email=$_POST['email'];

    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $pass=$_POST['pass'];

    if(empty($username) ||empty($emri) ||empty($mbiemri) ||empty($email) ||empty($pass)||empty($age)||empty($gender)){
        header("Location: ../register.php?error=fusha_boshe");
        
        exit();
        }

        /* fushat jane plotesuar */
        else{

            $sql="SELECT username FROM users WHERE username=?";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header('Location: ../register.php?error=sqlerror');
            }
            /* nuk kemi error ne sql*/
            else{
                mysqli_stmt_bind_param($stmt,'s',$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $rowcount=mysqli_stmt_num_rows($stmt);
            }
            if($rowcount>0){
                header('Location: ../registerB.php?error:perdorusiekziston');
            }
            else{
                $sql='INSERT INTO users(username,emri,mbiemri,email,pass,age,gender) VALUES (?,?,?,?,?,?,?)';
                $stmt=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header('Location: ../registerB.php?error=sqlerror');
                }
                else{
                    $hashpass=password_hash($pass,PASSWORD_DEFAULT);
                   
                    mysqli_stmt_bind_param($stmt,'sssssss',$username,$emri,$mbiemri,$email,$hashpass,$age,$gender);
                mysqli_stmt_execute($stmt);
                $_SESSION['mesazhi_rregjister']="Regjistrimi u krye me sukses!! Mirësevini!";
                $_SESSION['type']="success";
                 $_SESSION['username']=$username;
                 
                header('Location: ../login.php?sukses=regjistrim_i_suksesshem');
               
        
                }
            }


        }

}