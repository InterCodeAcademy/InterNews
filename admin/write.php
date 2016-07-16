<?php
session_start();
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
    <script src="extras/jquery.min.js"></script>
    <script src="extras/modal.js"></script>
  </head>

  <body>

    <div class="container">

<?php
if(isset($_SESSION['USER'])){
                        echo '<a href="modal/logout.php">Log Out</a>';
                        echo '<br/><img src="../model/Perfiles/'.$_SESSION['USER'].'/pp.jpg" height="100" width="100"/> <br/><br/>';
                        

                                    echo 
                                    '<form class="form-group">
                                    <input type="text" value="'.$_SESSION['USER'].'" id="author" style="display:none;"/>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Titulo" required autofocus>
                                    <br/>
                                    <textarea class="form-control" id="body" rows="20" name="text" required></textarea>
                                    <br/>
                                   <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#myModal">Publicar</button>
                                    </form>
                                    
                                    <div id="txtHint"></div>';
                                  
/*                            echo'<div class="alert alert-success" role="alert"><h3>Noticia Creada!</h3></div>';
                            $array = array(
                                "Titulo"=>$_GET['title'],
                                "img"=>"none",
                                "Cuerpo"=>$_GET['text']


                            );
                            file_put_contents('hola.json',json_encode($array));
    
//*/

    
        


    
}else{
    
header("Location: http://localhost/InterNews/admin/");
exit();

}
?>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Estas seguro/a???</h4>
      </div>
      <div class="modal-body" style="text-align: center;">
            <div id="ops" class="alert alert-warning alert-dismissible" role="alert" style="display: inline-block;">
            <strong>Ops!</strong> Te falto algo ; __ ;
            </div>
         
         <input type="button" value="Zi" class="btn btn-warning" onclick="publishArticle()"/>
        <button type="button" class="btn btn-default" data-dismiss="modal">No, me achique</button>
      </div>
   
    </div>
  </div>
</div>

<script>
 window.onload = function(){
      document.getElementById("ops").style.display = 'none';   
    
         
     }
function publishArticle(){
    
    var title = document.getElementById("title");
    var body = document.getElementById("body");
    var author = document.getElementById("author");  
       if(title.value == null || title.value == "" || body.value == null || body.value == ""){
   document.getElementById("ops").style.display='block';
   return null ;
}else{
    if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
 

        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                     
                // document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                window.location = "http://localhost/InterNews/admin/Dashboard";
            }
        };
         var tit = title.value;
         var bod = body.value;
         bod = bod.replace(/\r?\n/g, '<br />');
         <?php 
         $_SESSION['ALLOW'] = 'dEv*3LZEN(3p4MOKUxh4q)yn5ardOq4PkANy';
         ?>
        xmlhttp.open("GET","modal/publishArticle.php?author="+author.value+"&&title="+tit+"&&body="+bod,true);
        xmlhttp.send();
    
}
}

    

</script>
<script type="text/javascript">
    
$('#myModal').on('shown.bs.modal', function () {
      document.getElementById("ops").style.display = 'none';   
 
  $('#myInput').focus();
})
</script>
  </body>
</html>

