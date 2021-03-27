


<?php

  require 'includes/database.php';
 







    if(isset($_SESSION['username']) ){
     
        header('Location: user.php');
        
    }
  
    
    
   // $result=  $conn->query("SELECT questions.Pid , Qcontent , answers.id as Aid,content FROM questions INNER JOIN answers ON questions.Pid=answers.Pid") or die($conn->error);
   $result=  $conn->query("SELECT * FROM questions where isVerifed=0 and is_deleted=0") or die($conn->error);
 
    
    ?>
  <?php  session_start(); ?>
<html>
<head>
<title> USER  </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="css/user.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
.main
{
width:75%;
min-height:380px;
text-align: center;
position: relative;
cursor: pointer;
}
.main:hover .service
{
transform: translateY(-50px);
}
.main:hover img
{transform: rotate(360deg);
}
.service
{
background:#fff;
padding:30px;
border-radius: 10px;
position: absolute;
bottom: 0;
z-index:1;
box-shadow: 0 0 20px -15px #030380;
transition: transform .8s;

}
.service-logo
{
width:130px;
height:130px;
border-radius: 50%;
margin:-90px auto 0;
background: #fff;
border:18px solid #E1F0F7;
}
.service-logo img
{
width:70px;
transition: transform 1s;
border-radius: 25px;
margin-top:10px

}
.service h4
{
height:35px;
width:80%;
background: #fff;
margin: 50px auto;
position: relative;
}
.service h4::after
{
content:'';
width:40px;
height:30px;
background: linear-gradient(to right, #fff, #c98bc3);
position: absolute;
right:-5px;
top:-5px;
z-index: -1;
}
.service h4::before
{
content:'';
width:40px;
height:30px;
background: linear-gradient(to right,#007bff, #fff);
position: absolute;
left:-5px;
bottom:-5px;
z-index: -1;
}
.container
{
background:#E1F0F7;
width: 100%;
height:530px;
padding-left:7%;
font-size:18px;
}

*{
padding:0px;
margin:0px;
box-sizing:border-box;}
.sesioni4{ 
height:35vh;
background-image:url(imazhe/bg1.jpg);
background-attachment:fixed;
background-size:cover;}
.sesioni4 h1
{
font-size:20px;}
#paragrafi1
{
font-size:20px;
}
#butoni2
{padding: 10px 20px;
text-align: center;
font-size: 15px;
}
.shprehje
{
  text-align:center;
}

/*Stilimi i modal*/
.modal-title{
    font-weight: bold;
    font-size: 25px;
    background-color: transparent;
    border-bottom: 2px solid #e675da;
    text-align: center;
    padding-bottom: 6%;
}



.modal-body p{
    font-weight: bold;
    font-size: 18px;
    margin-left:3%;
}

.text
{ 
    width:95%;
    padding-top: 2%;
    margin-left:3%
}


.text:focus , .time:focus {
    
    outline: 2px solid #c6e6f5;
    
  }
  .pergjigje{
      padding-top: 2%;
  }
  
  .time{
    margin:0 auto;
  }
.shto{
  margin:10pt auto  0 auto;
}
.shto:hover, .fshi:hover{
  background-color: #4b7ab8;
}
.fshi{
  margin:10pt auto  0 auto;
}

/* Stilimi per Sesionin 5 per features*/
.container1
{
background:#e6e6e6;
width: 100%;
height:450px;
padding-left:15%;
padding-right:12%;
}
.container1:before
{
content: '';
position: absolute;
bottom: 0;
left: 0;
width: 100%;
height: 150px;
background:white;
clip-path: polygon(100% 0,0 100%,100% 100%);

}
.main1
{
width:75%;
min-height:380px;
text-align: center;
position: relative;
cursor: pointer;
margin-top:10%;
}

.service1
{
background:#fff;
height: 400px;
width: 240px;
padding:45px;
border-radius: 10px;
position: absolute;
z-index:1;
box-shadow: 0 0 20px -15px #030380;
}
.service1 h4
{
height:30px;
width:80%;
background: #fff;
margin: 50px auto;
position: relative;

}
.service1 h4::after
{
content:'';
width:40px;
height:30px;
background: linear-gradient(to right, #fff,#c98bc3);
position: absolute;
right:-3px;
top:-3px;
z-index: -1;
}
.service1 h4::before
{
content:'';
width:40px;
height:30px;
background: linear-gradient(to right,#007bff, #fff);
position: absolute;
left:-3px;
bottom:-3px;
z-index: -1;
} 
.service h4::after
{
content:'';
width:40px;
height:30px;
background: linear-gradient(to right, #fff, #c98bc3);
position: absolute;
right:-5px;
top:-5px;
z-index: -1;
}  

/* Stilimi footer */ 

.footer
{background-color:#000033;
height:250px;
display:table;
width:100%;


}
.footer h3 , .footer p
{
color:black;
text-align: center;

}
.footer span, .footer p, .footer h3 
{
color:white;
}
  </style>
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
      <li class="active" data-toggle="modal" data-target="#myModal"><a href="#">Krijo</a></li>
      <li><a href="history.php">Hisoriku</a></li>
      <li><a href="#rethnesh">Rreth Nesh</a></li>
      <li><a href="#kontakto">Kontakt</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
  
      <li><a href="includes/logout-inc.php"><span class="glyphicon glyphicon-log-out"></span> Dil</a></li>
    
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?> </a></li>
    </ul>
  </div>
</nav>



<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="main">
          <div class="service">
            <div class="service-logo">
              <img src="imazhe/create1.png">
            </div>
            <h4> Krijo </h4>
            <p> Krijo sondazhe sipas deshires per tematika te ndryshme </p>
          </div>
        </div>
      </div>
    <div class="col-md-4">
    <div class="main">
          <div class="service">
            <div class="service-logo">
              <img src="imazhe/vote.png">
            </div>
            <h4> Voto </h4>
            <p> Voto ne sondazhe te krijuara prej individeve qe jane te regjistuar  </p>
          </div>
        </div>
      </div>
    
    <div class="col-md-4">
    <div class="main">
          <div class="service">
            <div class="service-logo">
              <img src="imazhe/world.png">
            </div>
            <h4> Shiko rezultatet </h4>
            <p>Shiko dhe kontrollo votimet ne kohe reale qe te informoesh per rezultatet</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <br>
  <br>
  <br>

<center>

<?php


   $result= $conn->query("SELECT * FROM questions where isVerifed=1 and is_deleted=0") or die($conn->error);

while($row=$result->fetch_assoc()):
$Pid=$row['Pid'];
?>
    
<?php if(isset($_SESSION['mesazhi'])):?>
                                  <div class="alert alert-<?=$_SESSION['type']?>">  
                                  <?php echo $_SESSION['mesazhi'];
                                        unset($_SESSION['mesazhi']);
                                  ?>
                                  </div>
                                    <?php endif; ?>
   <div class="poll1" id="<?php echo $Pid; ?>">
                                 
     <form method="post" id="poll_form"  action="includes/vote.php?userid=<?php echo $_SESSION['id']?>">
     
       <div class="prov">
       
      <h4><?php echo $row['Qcontent'] ?></h4>
       </div>
                    <?php  
                    
                    $result1= $conn->query("SELECT * FROM answers where Pid=$Pid ") or die($conn->error); ?>
                  <?php   while($row=$result1->fetch_assoc()):

                    ?>
                    
                    <div class="radio" style="width:100%" >
                    <label><p><input type="radio" name="poll_option" class="poll_option" value="<?php echo $row['id'] ?>" /><?php echo $row['content'] ?></p></label>
                  <input type="hidden" name="pyetja" value="<?php echo $row['Pid'] ;?>">
                
                  <input type="hidden" value="<?php echo $row['id'] ?>" name="ans[]">
                    </div>

                  <?php endwhile; ?>

      <br />
     
      <input type="submit" name="voto" value="Voto" id="poll_button" class="btn btn-primary"/>
      <a href="includes/result-inc.php?userid=<?php echo $_SESSION['id']?>&pyetja=<?php echo $Pid;?>">Rezultati</a>
     </form>
     <br>
</div>

<br><br>
<?php endwhile; ?>




</center>
<!--Krijimi i nje modali per te krijuar nje polls -->
<div class="container2">
 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <form action="veprime/shto_pyetje.php"  method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Krijoni anketen tuaj</h4>
        </div>
        
        <div class="modal-body">
        <center>
        
          <p>Pyetja</p>
          <input type="text" id="pyetja" name="pyetja" />
          <!-- input i fshehur qe ruan id e userit te loguar aktualisht -->
          <input type="hidden" name="userID" value="<?php print_r($_SESSION['id'])?>"> 
          <p class="pergjigje"> Pergjigjet </p>
          <div id="formInput">
          <input type="text" class="text"   name="pergjigje[]" style="margin-top:20px" /> 
          <input type="text" class="text"  name="pergjigje[]" style="margin-top:20px"/> 
          <input type="text" class="text"  name="pergjigje[]" style="margin-top:20px" /> 
          <input type="text" class="text"  name="pergjigje[]" style="margin-top:20px" /> 
          </div>
        
         

 <input type="button" class="btn btn-primary shto "  id="btnok" onclick="addText();" value="Shto fusha" /> 
 <input type="button" class="btn btn-primary fshi "  id="btnok" onclick="removeText();" value="Fshi fusha" /> 
          </center>
<br> <br>
          <center><p> Vendosni kohezgjatjen e anketes </p>
          <input type="date"  class="time" name="time"/> </center>
        </div>
         
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" name="shto_pyetje" >Krijo</button>
        </div>
      </div>
      
    </div>
    </form>
  </div>
  
</div>





<!-- sesioni 3 -->

<br>
<div class="sesioni4">
  <h1 id="shprehje1" > <b> Udhëto, Eksploro, Krijo Kujtime </b> </h1>
  <p id="paragrafi1" > Rezervoni pranë nesh udhëtimet tuaja dhe ne do të sigurohemi t'i shndërrojmë ato në më të bukurat e jetes suaj. </p>
  <center> <input type="button" id="butoni2" value="KRIJO" > </center>
   </div>
   <div class="sesioni4"></div>
  
<br>
  
<br>
<div class="container1" style="background-color:#e6e6e6" id="rethnesh">
  <div class="row">
  <div class="col-md-3">
  <div class="main1">
        <div class="service1">
          <div class="logo">
            <img src="imazhe/save.jpg" style="width:150px; height: 150px;">
          </div>
          <h4 style="margin-top:20%;"> Pa pagese </h4>
          <p style="margin-top:-20%">Krijo, akseso dhe voto ne sondazhe pa asnje kosto shtese</p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="main1">
            <div class="service1">
              <div class="logo">
                <img src="imazhe/dashboard.png" style="width:150px; height:133px;" >
              </div>
              <h4> Paneli </h4>
              <p style= "margin-top:-23%">  Menaxho të gjitha sondazhet në një vend të vetëm duke përdorur panelin e llogarisë. </p>
            </div>
          </div>
        </div>
  
  <div class="col-md-3">
  <div class="main1">
        <div class="service1">
          <div class="logo">
            <img src="imazhe/deadline.jpg" style="width:150px; height: 150px;">
          </div>
          <h4 style="margin-top:20%;"> Afatet kohore </h4>
          <p style="margin-top:-23%;"> Vendos nje kohezgjatje per sondazhin qe ke krijuar</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="main1">
            <div class="service1">
              <div class="logo">
                <img src="imazhe/code.jpg" style="width:150px; height: 150px;" >
              </div>
              <h4 style="margin-top:20%;"> Zhvillim </h4>
              <p style="margin-top:-23%;"> Ne jemi duke punuar vazhdimisht ne shtimin e cilesimeve te reja. Na dergo idete e tua!</p>
            </div>
          </div>
        </div>
  
  </div>
</div>
</div>
<br>


<div class ="footer" id="kontakto">
 <div class="row">
  <div class="col-md-4">
    <h3 style=" border-bottom: 3px solid white;"   > POLLBEAR </h3>
    <p id="teksti" > Faqja e pare dhe e vetme e sondazheve ne Shqiperi. 
      Krijo, voto 
      xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx </p>
  </div>
  <div class="col-md-4">
   <h3> Kontakto </h3>
   <p>
   <span><i class="material-icons" >contact_mail</i></span>
   <span> &nbsp;info@pollbear.al  </span>
  </p>
  <p>
  <span><i class="material-icons">call</i></span>
  <span>&nbsp;  +355 68 20 20 020 </span>
  </p>
  <p>
  <span> <i class="material-icons" >facebook</i><span>
  <span> &nbsp; POLLBEAR </span>
  </p>
  </div>
<div class="col-md-4">
  <img src="imazhe/logo.png" style="width: 50%; margin-left: 15%;">
 <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
   XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p> 
 
</div>

</div>
</div>
<div id="footer1">
  <p> <center> <b> Copyright ©201. All right reserved<b> </center></p>
  </div>
<script>

function addText()
        { 
          input = jQuery('<input type="text" class="text"  name="pergjigje[]" style="margin-top:20px;margin-bottom:10px">');
          jQuery('#formInput').append(input);
        }
        function removeText()
        { 
     
          var select = document.getElementById('formInput');
  select.removeChild(select.lastChild);

        }


</script>
</body>
</html>