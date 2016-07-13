<?php
session_start();

if (isset($_SESSION['USER'])){
header("Location: http://localhost/InterNews/admin/Dashboard");
    exit();
}else{
    session_unset();
    session_destroy();
    
}
  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../view/InterNews/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../view/InterNews/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
        
         <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>    
        <input type="text" id="user" class="form-control" placeholder="Usuario" required autofocus>
        <br/>
        <input  type="password" id="pass" class="form-control" placeholder="Password" required>
        <input type="button" value="Sign In" class="btn btn-lg btn-primary btn-block" onclick="validate()"/>
        <br/>
        <div id="ops" class="alert alert-warning alert-dismissible" role="alert">
            <strong>Ops!</strong> Te equivocaste ; __ ;
             
        </div>
      </form>
<div id="txtHint"></div>


 </div> <!-- /container -->
 <script>
     window.onload = function(){
      document.getElementById("ops").style.display = 'none';   
         
     }
function validate() {
var user = document.getElementById("user");
var pass = document.getElementById("pass");
var ops = document.getElementById("ops");
if(user.value == null || user.value == "" || pass.value == null || pass.value == ""){
   document.getElementById("ops").style.display='block';
   return null ;
}else{
     document.getElementById("ops").style.display='none';
      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  
                   if( xmlhttp.responseText == 'Success'){
                     
                                              window.location = "http://localhost/InterNews/admin/Dashboard";

                   }else{
                    document.getElementById("txtHint").innerHTML = '<div class="alert alert-danger" role="alert">Contrese&ntildea o Usuario Incorrectos</div>';
                       
                       
                   }
            }
        };
       
        xmlhttp.open("GET","validate.php?username="+user.value.trim()+"&&pass="+pass.value.trim(),true);
        xmlhttp.send();
    
}
      
}
</script>
  </body>
</html>

