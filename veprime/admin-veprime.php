<?php
session_start();
require '../includes/database.php';

// prano kerkesen
if(isset($_GET['prano'])){
   
    $id=$_GET['prano'];
    $result=$conn->query("UPDATE questions SET isVerifed=1 ,adm_check=1 WHERE Pid=$id") or die($conn->error);
    if($result){
        $_SESSION['mesazhi']="Kërkesa u pranua me sukses!!!";
        $_SESSION['type']="success";
        header('Location: ../admin.php?kërkesa_u_pranua ');
    }
    else{
        header('Location: ../admin.php?kërkesa_error ');  
    }
    }

    // refuzo kerkesen 

    if(isset($_GET['refuzo'])){

        $id=$_GET['refuzo'];
        $result1=$conn->query("UPDATE questions SET  adm_check=1 WHERE Pid=$id") or die($conn->error);
        if($result1){
            $_SESSION['mesazhi']="Kërkesa u refuzua!!!";
            $_SESSION['type']="warning";
            header('Location: ../admin.php?kerkesa_u_refuzua ');
        }
        else{
            header('Location: ../admin.php?kerkesa_error ');  
        }

    }

    // fshi kerkesen

    if(isset($_GET['delete'])){
      
            $id=$_GET['delete'];// ruajme id e elementit te klikur per tu fshire nga admini
            $result2=$conn->query("UPDATE questions SET is_deleted=1 WHERE Pid=$id") or die($conn->error);
        if($result2){

           $_SESSION['mesazhi2']="Anketa u fshi me sukses!!!";
        $_SESSION['type']="danger";

            header('Location: ../admin.php?pollsdelete ');
        }
        else{
            header('Location: ../admin.php?delete_error ');  
        }
        
        }
    


