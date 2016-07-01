<?php 
function displayNewsList($arrayR){
  
    foreach($arrayR as $itemArray){
        echo'<div>
                <img src='.$itemArray[2].' alt="" height="50" width="50"/>
                <h3><a href="read?a='.$itemArray[3].'">'.$itemArray[0].'</a></h3>
                <p>'.$itemArray[1].'</p>
            </div>';
           

    }

}


function displaySingleArticle($array){
         echo'<div>
                <img src='.$array[1].' alt="" height="250" width="500"/>
                <h1>'.$array[0].'</h1>
                <p>'.$array[2].'</p>
            </div>';
        


}

?>