


<html>
<head>
<title> Hyr </title>
<meta charset="utf-8">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<body style="background-color:#ECF2F4">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
      body {
  background-image: url(imazhe/69.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  margin: 0;
  padding: 0;
}
#container {
  width: 400px;
  margin-top: 5%;
  margin-left: 33%;
  margin-right: 35%;
  height: 100px;
}
header {
  background-color: white; /*Ngjyra e te backroundit te pjeses Login */
  opacity: 0.8;
  color: blue; /* Ngjyra e tekstit brenda */
  text-align: center;
  margin-top: 0px;
  margin-bottom: 0px;
  font-size: 30px;
}
#exit {
  font-size: 35px;
  color: gray;
  border: none;
  cursor: pointer;
  padding-right: 90%;
}
#exit:hover {
  font-size: 35px;
  color: #424040;
}
.content {
  padding: 10px;
  background-color: white;
  opacity: 0.8;
  text-align: center;
}
.form {
  padding: 30px 40px;
}

.form-control {
  margin-bottom: 10px;
  padding-bottom: 15px;
  position: relative;
}

.form-control label {
  display: inline-block;
  margin-bottom: 5px;
  color: blue;
  font-weight: 700;
}

.form-control input {
  border: 2px solid #f0f0f0;
  border-radius: 4px;
  display: block;
  font-family: inherit;
  font-size: 14px;
  padding: 10px;
  width: 100%;
}

.form-control i {
  position: absolute;
  top: 40px;
  right: 10px;
  visibility: hidden;
}
.form-control i.fa-eye {
  visibility: visible;
}
.form-control i.fa-eye:hover {
  cursor: pointer;
}
.form-control.success i.fa-eye {
  visibility: hidden;
}
.form-control.error i.fa-eye {
  visibility: hidden;
}

#bt2 {
  text-decoration: underline;
  background-color: blue;
  color: white;
  font-size: 17px;
  font-family: MyFont;
  width: 100%;
  padding: 6px;
}
#bt2:hover {
  cursor: pointer;
  text-decoration: underline;
  font-size: 15px;
  border-radius: 5px;
  padding: 5px 5px;
  background-color: rgb(196, 189, 189);
  color: blue;
  font-weight: 700;
}
::placeholder {
  color: black;
  font-weight: 700;
}
#chbox {
  margin-left: -40%;
  cursor: pointer;
}
a {
  font-family: MyFont;
}
p {
  font-family: MyFont;
  margin-bottom: -7%;
  margin-top: 0;
}
@media screen and (max-width: 320px) {
  #container {
    width: 250px;
    margin-top: 10%;
    margin-left: 12%;
    margin-right: 15%;
    height: 500px;
  }
  header {
    font-size: 25px;
  }

  #chbox {
    margin-left: -15%;
  }
  #bt2 {
    font-size: 17px;
    font-family: MyFont;
    width: 150px;
    height: 30px;
  }
}
@media only screen and (max-width: 770px) and (min-width: 330px) {
  #container {
    margin-top: 0;
    margin-left: 25%;
  }
}
@media only screen and (max-width: 550px) and (min-width: 330px) {
  #container {
    margin-top: 10%;
    margin-left: 10%;
    width: 300px;
  }
  header {
    font-size: 25px;
  }

  #chbox {
    margin-left: -15%;
  }
  #bt2 {
    font-size: 17px;
    font-family: MyFont;
    width: 150px;
    height: 30px;
  }
}

@media screen and (min-width: 2560px) {
  #container {
    width: 600px;
    margin-left: 37%;
  }
}
</style>
</head>
<body>


<div id="container">
<header>
<a link href=" faqja1.php" ><i class="fa fa-arrow-circle-left"  id="exit"> </i> </a>

<center>Hyr <br>
<?php
if(isset($_SESSION['mesazhi_rregjister'])):?>
<div style="background:green; color:white;margin-top:20px;">  
<?php echo $_SESSION['mesazhi_rregjister'];
      unset($_SESSION['mesazhi_rregjiter']);
?>
</div>
<?php endif ?>
</center>
</header>
<div class="content">
                               
    <form id="form" class="form" action="includes/login-inc.php" method="POST">
		<div class="form-control ">
            <label for="username">Username</label>
            <input type="text" placeholder="Vendosni username-in" name="username" />
		</div>
            <div class="form-control">
                <label for="username">Fjalekalimi</label>
                <input type="password" placeholder="******" name="pass" id="password"  />
               
                <i id="prova"class="fa fa-eye" onclick="myFunction()"></i>
                </span>
        
            </div>
<br>
<button type="submit" name="login" id="bt2" > Hyr</button>
</form>
 <br><br>
<p>Jeni t&euml; rinj n&euml; website?</p> <br> <br>
<a id= "linku" href="register.php"> Regjistrohu
</a>
<br>
</div>
</div>
<script>
  function myFunction()
{   
    var x=document.getElementById("password");
    var y=document.getElementById("prova");
    if(x.type ==='password'){
        x.type ="text";
        y.style.display="block";
    }
    else
    {
        x.type ="password";
        y.style.display="block";

    }

}

</script>
</body>
</html>