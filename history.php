<?php 
session_start();
include 'includes/database.php';
$uid = $_SESSION['id'];
$date= date("Y-m-d");
$result=  $conn->query("SELECT * FROM questions where isVerifed=1   and user_id=$uid ") or die($conn->error);

?>


<html>
  <head>
    <title>HISTORIKU</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/history.css" rel="stylesheet" type="text/css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <nav class="navbar avbar-default">
  <div class="container-fluid" style=" padding-left: 0px; padding-right: 0px;">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"> <img src="imazhe/logo.png" style="width:150px; height: 40px; margin-top:-6%"> </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" ><a href="user.php"> Faqja kryesore</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
  
      <li><a href="includes/logout-inc.php"><span class="glyphicon glyphicon-log-out"></span> Dil</a></li>
    
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?> </a></li>
    </ul>
  </div>
</nav>
    <center><h1>Historiku</h1></center>
    <?php while($row=$result->fetch_assoc()):
$Pid=$row['Pid'];

          $result2= $conn->query("SELECT * FROM user_answers where Pid=$Pid") or die($conn->error);
$num_rows=mysqli_num_rows ( $result2 );  


?>
    <div class="anketa">
      <div class="data">
        <h4> <?php echo $row['created_date'] ;?></h4>
      </div>
      <div class="histori" id="histori" style="display: inline-block">
        <h5 > <?php echo $row['Qcontent'] ;?> </5>
        <!-- Do te gjenerohet nga database-->
      <button style="border:none; float:right; margin-top:-4px; background-color:white;color:#4E98D1" onclick="display('<?php echo $Pid ?>')" style="float:right; margin-top:-10px"><i
          class="fa fa-chevron-circle-down"
          aria-hidden="true"
          style="font-size: 20px"
        ></i></button>  
        
          
                                            <?php $result1= $conn->query("SELECT * FROM answers where Pid=$Pid") or die($conn->error); 
                                            ?> 
                                            <!-- rezultatet e pergjigjeve -->
                                            <div class="result" id="<?php echo $Pid; ?>" style="display:none">

                                                            <?php while($row=$result1->fetch_assoc()):
                                                              $votePercent = round(($row['vote']/$num_rows)*100);
                                                              ?>
                                                              
                                                              <div class="progress" style="margin-top:20px;">
                                              <div class="progress-bar" role="progressbar" style="width: <?php echo $votePercent; ?>%" aria-valuenow="<?php echo $votePercent; ?>"  aria-valuemin="0" aria-valuemax="100"  ><?php echo $row['content']; ?> me  <?php echo $votePercent; ?>% te votave</div>
                                            </div>


                                                            
                                                  
                                                    
                                                    
                                                    <?php endwhile; ?> 
                                                    </div>
        <br />
   
      
    </div>
<?php endwhile; ?>
   
     <script>
     function display(pid){ 
     var i=pid;
     document.getElementById(i).style.display="block";
     }
     </script>
  </body>
</html>
