<?php
session_start();
?>

<html>
<head>
<title> Regjistrohu </title>
<meta charset="utf-8">
<link href="css/register.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>

body{
        background-image:url(imazhe/69.jpg);
        background-repeat: no-repeat;
  background-size: auto;
   /* Full height */
   height: 100%;

/* Vendosja e background-it ne mes dhe te mos perseritet */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
      }
</style>
</head>
<body>

<div class="total">
<header>
  <a link href=" faqja1.html" ><i class="fa fa-arrow-circle-left"  id="exit"> </i> </a>
Regjistrohu
</header>
<div class="trupi" >

 <form id="form" class="form"  method="POST" action="includes/register-inc.php">
  <div class="form-control ">
   <label for="email">Email</label>
   <input type="email" placeholder=" info@pollbear.al"  name="email" id="mail" onchange="ValidateEmail(this)" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" required  />
    
  </div>
<div class="form-control ">
  <label for="emri">Emri</label>
 <input  type="text" placeholder="Pollbear"  name="emri" onchange="ValidateName(this)" pattern="[A-Za-z]{3,20}" required  />
</div>
<div class="form-control ">
  <label for="emri">Mbiemri</label>
 <input  type="text" placeholder="Pollbear"  name="mbiemri" onchange="ValidateSurname(this)" pattern="[A-Za-z]{3,20}" required/>
</div>
<div class="form-control ">
  <label for="username">Username</label>
 <input  type="text" placeholder="pollbear01"  name="username"  onchange="ValidateUsername(this)" pattern=".{3,30}" required/>
</div>

<div class="form-control ">
  <label for="age">Mosha</label>
 <input  type="text" placeholder="xx"  name="age" onchange="ValidateAge(this)" pattern="[0-9]{1,2}" required/>
</div>
<div class="form-control ">
  <label for="password">Fjal&euml;kalimi</label>
  <input  type="password" placeholder="***********" name="pass" id="psw"  onchange="ValidatePass(this)" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$" required title="Fjalekalimi duhet te kete patjeter  nje shkronj te madhe nje shkronj te vogel nje numer dhe te jete mbi 8 karaktere!"/>
 
</div>

<div class="form-control ">
  <label for="password">Rivendosni fjal&euml;kalimin</label>
  <input  type="password" placeholder="***********" id="password2" onchange="configPass(this)" />
</div>
<div class="form-control">
  <label class="radio">
  <input type="radio"  id="male" name="gender" value="mashkull" checked >
  mashkull
  <span></span>
</label>
<label class="radio">
  <input  type="radio" name="gender" value="femër" >
  femer
  <span></span>
</label>
  </div>



<p style="color:blue">Duke krijuar llogarin&euml; tuaj ju pranoni <a href="#">Termat e siguris&euml;</a></p>
<div class="prov">

<button type = "submit"  id="bt" name="submit" > Regjistrohu </button>

</div>
</form>
<br>
<br>
</div>
</div>

<script>



function ValidateEmail(inputText)
{
var mailformat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
if(inputText.value.match(mailformat))
{

return true;
}
else
{
alert("Email-i i vendosur nuk është në formatin e duhur!");    // Mesazhi pop-up qe tregon gabime ne email
document.getElementByID("bt").click(function(event)
  {
    event.preventDefault(); // cancel default behavior

    //... rest of remove last logic
  });
return false;
}
}

//validimi i emrit
function ValidateName(inputText)
{
var mailformat = /^[A-Za-z]{3,20}$/g;
if(inputText.value.match(mailformat))
{

return true;
}
else
{
alert("Formati i vendosur për emrin është i pasaktë!");    
document.getElementByID("bt").click(function(event)
  {
    event.preventDefault(); // cancel default behavior

    //... rest of remove last logic
  });
return false;
}
}
// validimi i mbiemrit
function ValidateSurname(inputText)
{
var mailformat = /^[A-Za-z]{3,20}$/g;
if(inputText.value.match(mailformat))
{

return true;
}
else
{
alert("Formati i vendosur për mbiemrin është i pasaktë!");    
document.getElementByID("bt").click(function(event)
  {
    event.preventDefault(); // cancel default behavior

    //... rest of remove last logic
  });
return false;
}
}

// validimi i username
function ValidateUsername(inputText)
{
var mailformat = /.{3,30}$/g;
if(inputText.value.match(mailformat))
{

return true;
}
else
{
alert("Formati i vendosur për username është i pasaktë!");    
document.getElementByID("bt").click(function(event)
  {
    event.preventDefault(); // cancel default behavior

    //... rest of remove last logic
  });
return false;
}
}

// validimi i moshës
function ValidateAge(inputText)
{
var mailformat = /^[0-9]{1,2}$/g;
if(inputText.value.match(mailformat))
{
 
document.form1.text1.focus();
return true;
}
else
{
alert("Kjo fushë duhet plotësur vetëm me karaktere  si numra!");    
document.getElementByID("bt").click(function(event)
  {
    event.preventDefault(); // cancel default behavior

    //... rest of remove last logic
  });
return false;
}
}


// validimi i pass
function ValidatePass(inputText)
{
var mailformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/g;
if(inputText.value.match(mailformat))
{
;
return true;
}
else
{
alert("Fjalëkalimi i vendosur  duhet të ketë patjetër: 1 shkronjë të madhe; 1 shkronjë të vogël; 1 numër dhe të jetë mbi 8 karaktere!");    
document.getElementByID("bt").click(function(event)
  {
    event.preventDefault(); // cancel default behavior

    //... rest of remove last logic
  });
return false;
}
}
 
 function configPass(inputText){

if(document.getElementById("psw").value!=inputText.value){

  alert("Fjalëkalimet e vendosura nuk përputhen!");    
document.getElementByID("bt").click(function(event)
  {
    event.preventDefault(); // cancel default behavior

    //... rest of remove last logic
  });
return false;
}
else{

  return true;
}
}




 




</script>
</body>
</html>