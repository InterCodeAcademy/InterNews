<?php
session_start();
if(isset($_SESSION['USER'])){
                    echo '<a href="modal/logout" style="text-align:;">Log Out</a><br/>';
                    echo '<img src="../model/Perfiles/'.$_SESSION['USER'].'/pp.jpg" height="100" width="100"/> <br/>';
                    echo '<a href="write">Write</a>';
                    

                        
                        
}else{
    
    header("Location: http://localhost/InterNews/admin/");
exit();
}
     
    $server = "localhost";
    $usuario = "root";
    $password ="";
    $db = "inter_news";
    $conn =  mysqli_connect($server,$usuario,$password,$db) or die("Error connecting");
    $results =  SQLQuery("SELECT * FROM `noticias`","Titulos");
     
    mysqli_close($conn);



?>
