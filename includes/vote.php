<?php
session_start();
if(isset($_POST['poll_option']) && isset($_POST['pyetja']) ){
    //lidhja me databazen 
    require "database.php";
$pergjigja=$_POST['poll_option'];
$pyetja=$_POST['pyetja'];
$userid=$_GET['userid'];
    echo 'perdorusi  '.$userid.' ka votuar pergjigjen '.$pergjigja.' ne pyetjen me id '.$pyetja;

 /* fushat jane plotesuar */
 

    $sql="SELECT * FROM user_answers WHERE  Uid=? and Pid=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('Location: ../user.php?error=sqlerror');
    }
    /* nuk kemi errore sql*/
    else{
        mysqli_stmt_bind_param($stmt,'ss',$userid,$pyetja);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rowcount=mysqli_stmt_num_rows($stmt);
    }
    if($rowcount>0){
        header('Location: ../user.php?error:perdorusiekziston');
        $_SESSION['mesazhi']="Ju nuk mund te votoni me shume se 1 here ne nje pyetje!!";
        $_SESSION['type']="warning";
    }
    else{
        $sql='INSERT INTO user_answers(Uid,Pid,Aid) VALUES (?,?,?)';
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header('Location: ../user.php?error=sqlerror');
        }
        else{
            $result= $conn->query("Update answers
            Set vote = vote + 1
            Where id=$pergjigja") or die($conn->error);
           if($result){
            mysqli_stmt_bind_param($stmt,'sss',$userid,$pyetja,$pergjigja);
        mysqli_stmt_execute($stmt);
        
        $_SESSION['mesazhi']="Vota u rregjistrua me sukses!!";
        $_SESSION['type']="success";
        header('Location: ../user.php?sukses=rregjistrimi_i_suksesshem');
           }

        }
    }


}



else{
    echo 'not set ';
}