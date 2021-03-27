<?php 
include '../includes/database.php';
if(isset($_POST['shto_pyetje'])){
    $pyetja=$_POST['pyetja'];
    $user_id=$_POST['userID'];
    $current_date=date("Y-m-d");
    $finish_data_format1=$_POST['time'];
    $finish_data_format2= date("Y-m-d", strtotime($finish_data_format1));
    
 $pergjigjet=$_POST['pergjigje'];
  // queriiiiiiiiii per futjen e pyetjes ne tabelen perkatese ne db 
  
  $query="INSERT INTO questions VALUES('','$pyetja',0,0,'$current_date','$finish_data_format2',$user_id,0);";

  $query_run=mysqli_query($conn,$query);
  // pra pyetja eshte insertuar ne db 
  if($query_run){
   
    $id_e_pyetjes_se_fundit = mysqli_insert_id($conn);
    // pyetjes se fundit qe shtohet i bashkangjiten pergjigjet perkatese
    foreach($pergjigjet as $Acontent){
   // $query1="INSERT INTO answers VALUES('',$id_e_pyetjes_se_fundit,);";
   $query1="INSERT INTO answers VALUES('',$id_e_pyetjes_se_fundit,'$Acontent',0);";
   $query_run=mysqli_query($conn,$query1);
   header('Location: ../user.php?pollsSuccess');
}
  }
}