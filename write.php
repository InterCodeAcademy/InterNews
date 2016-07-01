<?php
//Ingreso de algun usuario
if(isset($_GET['pass']) && isset($_GET['username'])){

                    include('model/index.php');
                    $compare = array();
                    $compare = SQLQuery($GETUSERS);


                    foreach($compare as $array){
                            $username =  $array['username'];
                            $pass = $array['passw'];
                    }



                    //Usuario y contraseña correctas
                    if($pass == trim($_GET['pass'])){




                            echo '  <form action="write" method="GET">
                                    <input type="text" name="title" placeholder="Titulo"/></br></br>
                                    <textarea name="text" id="body" rows="30" cols="70"></textarea>
                                    </br>
                                    <input type="submit" value="Publicar"/>
                                    ';





                    //Contraseña incorrecta    
                    }else{
                            echo '<p>Error</p>';
                            echo '<form action="write" method="GET">
                                  <input type="text" placeholder="Usuario" name="username">
                                  <input type="password" placeholder="Contrasena" name="pass">
                                  <input type="submit" value="Iniciar Sesion">
                                  </form>';
                    }



}else if(isset($_GET['text']) && ($_GET['text'] != null) && isset($_GET['title']) && ($_GET['title'] != null)){
    
    echo 'paso algo';
    
//ningun usuario logeado
}else if(isset($_GET['text']) &&($_GET['text'] == null) && isset($_GET['title']) && ($_GET['title'] == null)){
        echo '  <form action="write" method="GET">
                                    <input type="text" name="title" placeholder="Titulo"/></br></br>
                                    <textarea name="text" id="body" rows="30" cols="70"></textarea>
                                    </br>
                                    <input type="submit" value="Publicar"/>
                                    ';


}else{
    
    
            echo '<form action="write" method="GET">
                  <input type="text" placeholder="Usuario" name="username">
                  <input type="password" placeholder="Contrasena" name="pass">
                  <input type="submit" value="Iniciar Sesion">
                  </form>';



}


?>

