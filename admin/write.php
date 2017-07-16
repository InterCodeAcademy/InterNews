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
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
      
  </head>

  <body>

    <div class="container">

<?php
if(isset($_SESSION['USER'])){
       if(isset($_POST['submit'])){
            if($_SESSION['PUBLISH']){
              
                include('upload.php');
             if($uploadOk == 0){
              echo '<a href="modal/logout.php">Log Out</a>';
        echo '<br/><img src="../model/Perfiles/'.$_SESSION['USER'].'/pp.jpg" height="100" width="100"/> <br/><br/>';
                        
        echo' <form class="form-group"  id="uploadForm" action="write.php" method="post" enctype="multipart/form-data">


<div id="uploadFormLayer">
 <input type="file" name="fileToUpload" id="fileToUpload" required>
 <br/>
<input type="text" value="'.$_SESSION['USER'].'" id="author" name="author" style="display:none;"/>

<input type="text" name="title" value="'.$_POST['title'].'" id="title" class="form-control" placeholder="Titulo" required autofocus>
<br/>
<textarea placeholder="Descripcion o Entradilla" class="form-control" id="lead" rows="5" name="lead" required>'.$_POST['lead'].'</textarea>
<br/>
<textarea placeholder="Cuerpo"  class="form-control" id="body" rows="20" name="body" required>'.$_POST['body'].'</textarea>
<br/>
<button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#myModal">Publicar</button>
                </form>
                                    
                <div id="txtHint"></div>';
                                     
             }else{
                include('modal/publishArticle.php');
            }}
        }else{
        echo '<a href="modal/logout.php">Log Out</a>';
        echo '<br/><img src="../model/Perfiles/'.$_SESSION['USER'].'/pp.jpg" height="100" width="100"/> <br/><br/>';
                        
        echo' <form class="form-group"  id="uploadForm" action="write.php" method="post" enctype="multipart/form-data">

<div id="targetLayer">No Image</div>
<div id="uploadFormLayer">
 <input type="file" name="fileToUpload" id="fileToUpload">
 <br/>
<input type="text" value="'.$_SESSION['USER'].'" id="author" name="author" style="display:none;"/>

<input type="text" name="title" id="title" class="form-control" placeholder="Titulo" required autofocus>
<br/>
<textarea placeholder="Descripcion o Entradilla" class="form-control" id="lead" rows="5" name="lead" required></textarea>
<br/>
<textarea placeholder="Cuerpo" class="form-control" id="body" rows="20" name="body" required></textarea>
<br/>
<button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#myModal">Publicar</button>
                </form>
                                    
                <div id="txtHint"></div>';
                                     
       }}else{
    
//header("Location: http://localhost/InterNews/admin/");
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
    
         <input type="submit" name="submit" value="Zi" class="btn btn-warning" onclick="publishArticle()"/>
        <button type="button" class="btn btn-default" data-dismiss="modal">No, me achique</button>
      </div>
   
    </div>
  </div>
</div>


<scrip>
    
    function publishArticle() {
    s
    
    }
        </scrip>

  </body>
</html>

