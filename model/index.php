<?php 
$GETUSERS = "SELECT * FROM `usuarios`";
$GETNEWSLIST = "SELECT * FROM `noticias`";

function SQLQuery($query){ // Llamar SQLQuery("COMANDO SQL", DATOS QUE SE NECESITAN)
    $server = "localhost";
    $usuario = "root";
    $password ="";
    $db = "inter_news";
    $conn =  mysqli_connect($server,$usuario,$password,$db) or die("Error connecting");
    $stmt = mysqli_prepare($conn,$query);
        mysqli_stmt_execute($stmt);
        $result = $stmt->get_result();
        $resultarray = array();
        $articulos = array();
    if(mysqli_num_rows($result) > 0){
	       while ($resultarray = mysqli_fetch_assoc($result)) {
             array_push($articulos,$resultarray);
		      
	       }
	
    }
    return $articulos;
    mysqli_close($conn);

}








function getNews(){
    
            $articleGroup = array();
            $singleArticle = array();
            $results =array();
            $results =  SQLQuery("SELECT * FROM `noticias`","ALL");

        foreach($results as $arrays){
    
        
                        $json = 'model/Descriptions/'.$arrays['descJson'].'.json';
                        $string = file_get_contents($json);

                        $jsonIterator = new RecursiveIteratorIterator(new RecursiveArrayIterator(json_decode($string, TRUE)),
                            RecursiveIteratorIterator::SELF_FIRST);

            foreach ($jsonIterator as $key => $val) {
                if($key == "img"){
        
                        array_push($singleArticle ,"model/Descriptions/thumb/$val");
                
                }else{
                        array_push($singleArticle,$val);
                }
        
   
    
            }array_push($articleGroup,$singleArticle);
                unset($singleArticle);  
                $singleArticle = array();
                        //segundo foreach

        }return $articleGroup;//primer foreach

}









function getArticle($noticiaURL){
     $articleGroup = array();
            $singleArticle = array();
            $results =array();
          
    
        
                        $json = 'model/Noticias/'.$noticiaURL.'.json';
                        $string = file_get_contents($json);

                        $jsonIterator = new RecursiveIteratorIterator(new RecursiveArrayIterator(json_decode($string, TRUE)),
                            RecursiveIteratorIterator::SELF_FIRST);

            foreach ($jsonIterator as $key => $val) {
                if($key == "img"){
        
                        array_push($singleArticle ,"model/Noticias/img/$val");
                
                }else{
                        array_push($singleArticle,$val);
                }
        
   
    
            }
                        //segundo foreach

        return $singleArticle;//primer foreach



}



?>
