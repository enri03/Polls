<?php 
session_start();
 require 'includes/database.php'; 
  ?>

<html>
<head>
<title> ADMIN </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="css/admin.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
@media screen and (max-width: 550px) and (min-width: 325px)
  {
    .kerkesat
    {
      width:90%;
    
    }
    .fshirja
    {
      width:90%;
      margin-top:8%;
      margin-right:8%;
    }
  }

  </style>
</head>
</head>
<body>
<nav class="navbar navbar-inverse"> 
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
      <a class="navbar-brand"> <img src="imazhe/logo.png" style="width:150px; height: 40px; margin-top:-6%"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right"> 
      <li> <a href="includes/admin_logout.php"><span class="glyphicon glyphicon-log-out"> Dil</span> </a></li>
      
      </ul>
    </div>
  </div>
</nav>
<div class="kerkesat">
<p> Kerkesat per aprovim </p>

<?php
// ushtua adm check per te hequr nga admini te gjitha kerkesat mbi te cilat eshte ndermarr nje veprim i caktuar
   $result= $conn->query("SELECT * FROM questions where isVerifed=0 and is_deleted=0 and adm_check=0") or die($conn->error);
 ?>
    <?php
if(isset($_SESSION['mesazhi'])):?>
<div class="alert alert-<?=$_SESSION['type']?>">  
<?php echo $_SESSION['mesazhi'];
      unset($_SESSION['mesazhi']);
?>
</div>
<?php endif; ?>
   <table>
  <thead>
    <tr>
      <th>Pyetja </th>
      <th colspan="2">Veprimet</th>
      
    </tr>
  </thead>
  <tbody>

   <?php while($row=$result->fetch_assoc()): ?> 

 
    <tr>
      <td><?php echo $row['Qcontent'] ?></td>
      <td>
        <a href="veprime/admin-veprime.php?prano=<?php echo  $row['Pid']; ?> ">
        <i class="fa fa-check" aria-hidden="true" style=" font-size:20px;"></i>
      </a>
    </td>
      <td>
      <a href="veprime/admin-veprime.php?refuzo=<?php echo  $row['Pid']; ?>"><i class="fa fa-times" aria-hidden="true" style=" font-size:20px;"></i></a>
      </td>
    </tr>

  


<?php endwhile; ?>
</tbody>
</table>
<br>

 


<br>
</div>

<div class="fshirja">
<p> Kerkesat e aprovuara </p>
<?php
// ushtua adm check per te hequr nga admini te gjitha kerkesat mbi te cilat eshte ndermar nje veprim i caktuar
   $result1= $conn->query("SELECT * FROM questions where isVerifed=1 and is_deleted=0 and adm_check=1") or die($conn->error);
 ?>
    <?php
if(isset($_SESSION['mesazhi2'])):?>
<div class="alert alert-<?=$_SESSION['type']?>">  
<?php echo $_SESSION['mesazhi2'];
      unset($_SESSION['mesazhi2']);
?>
</div>
<?php endif; ?>
   <table>
  <thead>
    <tr>
      <th colspan="2">Pyetja </th>
      <th>Veprimet</th>
      
    </tr>
  </thead>
  <tbody>

   <?php while($row=$result1->fetch_assoc()): ?> 

 
    <tr>
      <td colspan="2"><?php echo $row['Qcontent'] ?></td>
      <td>
        <a href="veprime/admin-veprime.php?delete=<?php echo  $row['Pid']; ?> ">
        Fshij
      </a>
    </td>
    </tr>

  


<?php endwhile; ?>
</tbody>
</table>
<br>
<br>
</div>

</body>
</html>
