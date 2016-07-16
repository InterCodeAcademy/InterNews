<?php
function generateRandomString($length = 5) {
} 
session_start();
if(isset($_SESSION['USER']) && isset($_SESSION['ALLOW'])){
	if($_SESSION['ALLOW'] == 'dEv*3LZEN(3p4MOKUxh4q)yn5ardOq4PkANy'){
		echo $_GET['title'].' '.$_GET['body'].' '.$_GET['author'];


				$array = array(
                                "Titulo"=>$_GET['title'],
                                "img"=>"none",
                                "Cuerpo"=>$_GET['body'],
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
                            file_put_contents($url,json_encode($array));
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