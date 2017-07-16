<?php
include('../model/index.php');

if(isset($_SESSION['USER'])){
	
	try{
    $length = 5;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $url = $randomString.'.json';
                            $thumb = "none";

				$JsonNoticia = array(
                                "Titulo"=>$_POST['title'],
                                "img"=>$newfilename,
                                "Cuerpo"=>$_POST['body'],
                                "Autor"=>$_POST['author']


                            );
                            $JsonDescription = array(
                                "Titulo"=>$_POST['title'],
                                "Description"=>$_POST['lead'],
                                "img"=>$newfilename,
                                "id"=>$randomString,
                                "Autor"=>$_POST['author']


                            );
		
                     file_put_contents('../model/Noticias/'.$url,json_encode($JsonNoticia));
                     file_put_contents('../model/Descriptions/'.$url,json_encode($JsonDescription));
    }catch(Exception $e){
            echo $e;
        return null;
    }
Insert('INSERT INTO `noticias` (`thumb`, `ID`, `noticiaJson`, `descJson`, `autor`, `fecha`) VALUES ("'.$thumb.'", NULL,   "'.$url.'", "'.$url.'","'.$_POST['author'].'", CURRENT_TIMESTAMP);');
                    
header("Location: http://localhost/admin/");


}else{

	echo 'HOla';
}
	
    
?>