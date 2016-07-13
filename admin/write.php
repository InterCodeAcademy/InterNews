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
  </head>

  <body>

    <div class="container">

<?php
if(isset($_SESSION['USER'])){
                        echo '<a href="logout.php">Log Out</a>';
    

                                    echo 
                                    '<form class="form-group" action="write" method="GET">
                                    <input type="text" name="title" id="inputEmail" class="form-control" placeholder="Titulo" required autofocus>
                                    <br/>
                                    <textarea class="form-control" rows="20" name="text" id="body" required></textarea>
                                    <br/>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                                  </form>';
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

 </div> <!-- /container -->


  </body>
</html>

