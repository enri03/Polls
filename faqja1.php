<!DOCTYPE html>
</html>
<html>
<head>
<title> Sistem per ndertimin e anketave </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/faqja1.css">
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
    transform: translateY(-30px);
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
    width:80px;
    transition: transform 1s;
    
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
    .footer
{background-color:#000033;
 height:250px;
 display:table;
 width:100%;


}
h3, p
{
    color:black;
    text-align:center;
}
.footer span, .footer p, .footer h3 
{
  color:white;
}
#footer1 {
background-color:#000d1a;
color:white !important;
width:100% ;
height:50px;
padding-top:20px;

}
#footer1 p {
text-align:center;
}
*{
   padding:0px;
   margin:0px;
   box-sizing:border-box;}
   .sesioni4{ 
   height:35vh;
   background-image:url(imazhe/4.png);
   background-attachment:fixed;
   background-size:cover;}
   .sesioni4 h1
{
  padding-top:8%;
	font-size:40px;
text-align: center;
text-shadow: 4px 4px #c98bc3;

}
  #paragrafi1
{
	font-size:25px;
  font-weight: 700;

}
#butoni2
{padding: 15px 25px;
text-align: center;
font-weight: 700;
font-size: 15px;
background-color: #f7ccff;
border-radius: 15%;
}
   
   .container
{
    background:#E1F0F7;
    width: 100%;
    height:530px;
    padding-left:7%;
    font-size:18px;
}
.container h4
{
  font-weight: bold;
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
.swiper-container {
      width: 95%;
      height: 300px;
      background-color:#fff;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background:#E1F0F7;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

 .box 
 {
font-size: 20px;
 border-style: solid;
 border-width: 2px;
    padding: 25px 35px;
    position:absolute;
    border-color:#00004d;
    background:#ebf5fa;
    
 }
 .box p
 {
   color:black;
 }
 

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  
}

.box:hover {
  opacity: 1;
  background-color:white;
  border-color:#00004d;
}
.box:hover p
{
  visibility: hidden;
}

.box:hover .middle {
  opacity: 1;
}
.box:hover .text
{
  opacity: 1;
}

.text {
cursor: pointer;
  color:black;
  font-size: 16px;
  padding: 25px 35px;
  font-weight: bold;
  opacity: 0;
}
#lart
{
font-size:50px;
color:#c98bc3;
  display: none;
  position: fixed;
  bottom: 20px;
  right: 15px;
  z-index: 99;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 30px;
  border-radius: 4px;
   
}
#lart:hover
{
	color:#180115;
}
#logo1
{
  width: 50%; height: 50%; margin-left: 15%;
}
/* Responsiviteti*/
@media screen and (max-width: 550px) and (min-width: 325px)
{
  .container
{
    background:#E1F0F7;
    width: 100%;
    height:100%;
    padding-left:20%;
    font-size:18px;
}
.box 
 {
font-size: 15px;
 border-style: none;
 }
 .sesioni4 h1
{
  padding-top:20%;
	font-size:30px;


}
 #paragrafi1
{
	font-size:20px;

}
.sesioni4{ 
   height:25vh;}
#butoni2
{padding: 13px 20px;
font-size: 12px;
}
.container1
{
    
    width: 100%;
    height:100%;
    padding-left:22%;
}

.service1
{
    height: 355px;
}  
#logo1
{
  margin-left:27%;

}


}
  </style>
  <?php

require 'includes/database.php';



 // $result=  $conn->query("SELECT questions.Pid , Qcontent , answers.id as Aid,content FROM questions INNER JOIN answers ON questions.Pid=answers.Pid") or die($conn->error);
 $result=  $conn->query("SELECT * FROM questions where isVerifed=1 and is_deleted=0") or die($conn->error);

  
  ?>
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
      <li class="active"><a href="#sondazhet">Anketa</a></li>
      <li><a href="#rethnesh">Rreth faqes</a></li>
      <li><a href="#kontakto">Kontakt</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Hyr</a></li>
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Regjistrohu</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="main">
        <div class="service">
          <div class="service-logo">
            <img src="imazhe/create1.png" >
          </div>
          <h4> Krijo </h4>
          <p> Krijo anketa sipas dëshirës për tematika të fushave të ndryshme  </p>
        </div>
      </div>
    </div>
  <div class="col-md-4">
  <div class="main">
        <div class="service">
          <div class="service-logo">
            <img src="imazhe/vote1.png" style="width:100px; height:100px;">
          </div>
          <h4> Voto </h4>
          <p> Voto në anketa të krijuara prej individëve që janë të regjistruar në PollBear </p>
        </div>
      </div>
    </div>
  
  <div class="col-md-4">
  <div class="main">
        <div class="service">
          <div class="service-logo">
            <img src="imazhe/world1.png" style="width:100px; height:90px;">
          </div>
          <h4> Shiko rezultatet </h4>
          <p>Shiko dhe kontrollo votimet në kohë reale që të informoheni rreth rezultateve</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<br>
<br>
<div class="swiper-container" id="sondazhet">
  <div class="swiper-wrapper">
 <?php while($row=$result->fetch_assoc()):
$Pid=$row['Pid'];
?>
    <div class="swiper-slide">
      <div class="box">
        <p><?php echo $row['Qcontent'] ?></p>
        <div class="middle">
          <div class="text"><a href="includes/result-inc.php?pyetja=<?php echo $Pid;?>">
            Shiko rezultatet </a></div>
        </div>
      </div>
    </div>

    <?php endwhile;?>



  
   
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Arrows -->
  <div class="swiper-button-next" style="color:#00004d"></div>
  <div class="swiper-button-prev" style="color:#00004d"></div>
</div>
<br><br>

<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>



<br>
<div class="sesioni4">
  <h1 id="shprehje1" > <b>  Do it with PollBear or not at all ! </b> </h1>
  <p id="paragrafi1" > Create your own poll now! </p>
  <center> <a href="login.php"><input type="button" id="butoni2" value="KRIJO"  ></a> </center>
   </div>
   <div class="sesioni4"></div>
  
<br>
<div class="container1" style="background-color:#e6e6e6" id="rethnesh">
  <div class="row">
  <div class="col-md-3">
  <div class="main1">
        <div class="service1">
          <div class="logo">
            <img src="imazhe/save.jpg" style="width:150px; height: 150px;">
          </div>
          <h4 style="margin-top:20%;"> Pa pagesë </h4>
          <p style="margin-top:-20%">Krijo, akseso dhe voto në anketa pa asnjë kosto shtesë</p>
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
              <p style= "margin-top:-23%"> Menaxho të gjitha anketat në një vend të vetëm duke përdorur panelin e llogarisë </p>
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
          <p style="margin-top:-23%;"> Vendos një kohëzgjatje për cdo anketë të krijuar</p>
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
              <p style="margin-top:-23%;"> Ne jemi duke punuar vazhdimisht në shtimin e cilësimeve të reja. Dërgo idetë e tua!</p>
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
    <p id="teksti" > Faqja e parë dhe e vetme e krijimit të anketave në Shqipëri. 
      Në faqen tonë të internetit ju do të mund të shikoni rezultatet
      e anketave të ndryshme që janë krijuar nga përdoruesit tanë të
      cilët posedojnë llogarinë e tyre në faqe.
       </p>
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
  <img src="imazhe/logo.png" id="logo1">
 <p style=" text-shadow: 2px 1px #c98bc3; font-size: 25px;">Leave your mark, watch the track</p> 
   <span><i class="material-icons" onclick="topFunction()" id="lart"> arrow_circle_up</i> </span> 
</div>

</div>
</div>

<div id="footer1">
  <p> <center> <b> Copyright ©201. All right reserved<b> </center></p>
  </div>

  <script>
    //Get the button
    var mybutton = document.getElementById("lart");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    $(document).ready(function() {
        $('#autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
        });  
      });
    </script>
</body>
</html>