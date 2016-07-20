<?php
include('../../model/index.php');
session_start();
if(isset($_SESSION['USER']) && isset($_SESSION['ALLOW'])){
	if($_SESSION['ALLOW'] == 'dEv*3LZEN(3p4MOKUxh4q)yn5ardOq4PkANy'){
		echo $_GET['title'].' '.$_GET['body'].' '.$_GET['author'];


				$JsonNoticia = array(
                                "Titulo"=>$_GET['title'],
                                "img"=>"none",
                                "Cuerpo"=>$_GET['body'],
                                "Autor"=>$_GET['author']


                            );
                            $JsonDescription = array(
                                "Titulo"=>$_GET['title'],
                                "Description"=>$_GET['lead'],
                                "Autor"=>$_GET['author']


                            );
				$length = 5;
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    				$charactersLength = strlen($characters);
    				$randomString = '';
    				for ($i = 0; $i < $length; $i++) {
        				$randomString .= $characters[rand(0, $charactersLength - 1)];
    				}
     				$url = $randomString.'.json';
                            $thumb = "none";
                  //   file_put_contents('../../model/Noticias/'.$url,json_encode($JsonNoticia));
                    // file_put_contents('../../model/Descriptions/'.$url,json_encode($JsonDescription));
                     Insert('INSERT INTO `noticias` (`thumb`, `ID`, `noticiaJson`, `descJson`, `autor`, `fecha`) VALUES ("'.$thumb.'", NULL,   "'.$url.'", "'.$url.'","'.$_GET['author'].'", CURRENT_TIMESTAMP);');
                    $_SESSION['ALLOW'] = 'SHWTHD';

	}else{
		echo ' <audio autoplay>
  <source src="nosirve.ogg" type="audio/ogg">
  
Your browser does not support the audio element.
</audio> ';
	
	}

}else{

	echo 'HOla';
}
	
    
?>