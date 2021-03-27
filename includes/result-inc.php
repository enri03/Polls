<?php

include 'database.php';
if(isset($_GET['pyetja'])){
$pid=$_GET['pyetja'];
$result= $conn->query("SELECT * FROM user_answers where Pid=$pid") or die($conn->error);
$num_rows=mysqli_num_rows ( $result ); // numri i pywtjwvw mw id e pyetjes aktuale 



}?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<title>Document</title>
</head>
<body>
<div class="container"  style="margin:10% auto 0 auto">
<?php $result= $conn->query("SELECT * FROM questions where Pid=$pid") or die($conn->error); 
?>

<?php while($row=$result->fetch_assoc()): ?>
<center><?php echo $row['Qcontent']; ?></center>

<?php $result1= $conn->query("SELECT * FROM answers where Pid=$pid") or die($conn->error); 
?>

<?php while($row=$result1->fetch_assoc()): ?>
<?php
if($num_rows==0){
    $num_rows=1;
    echo '<center style="color:red">'.'Ne kete ankete nuk ka votuar askush'.'</center>';
}
$votePercent = round(($row['vote']/$num_rows)*100);

 ?>

<div class="progress" style="margin-top:20px">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $votePercent; ?>%" aria-valuenow="<?php echo $votePercent; ?>" aria-valuemin="0" aria-valuemax="100"  ><?php echo $row['content']; ?> me  <?php echo $votePercent; ?>% te votave</div>
</div>
<?php endwhile; ?>
</div>
<?php if(isset($_GET['userid'])): ?>
<center style="margin-top:20px"><a href="../user.php#<?php echo $pid; ?>" >Kthehu tek votimi</a></center>
<?php else: ?>
  <center style="margin-top:20px"><a href="../faqja1.php#sondazhet<?php echo $pid; ?>" >Kthehu tek kreu</a></center>
  <?php endif; ?>
<?php endwhile; ?>

</div>
</body>
</html>