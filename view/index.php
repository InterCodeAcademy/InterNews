<?php 
function displayNewsList($arrayR){
   echo '<div class="container">';  
     
   

  
    foreach($arrayR as $itemArray){
        echo'<div class="content">
                <img class="thumb" src='.$itemArray[2].' alt="" width="100%"/>
                <h2><a href="read?a='.$itemArray[3].'"><strong>'.$itemArray[0].'</strong></a></h2>
                <p>'.$itemArray[1].'</p>
            </div>';
           

    }
    echo '</div>
    <div class="footer">
  </div>
    ';
}


function displaySingleArticle($array){
         echo'<div>
                <img src='.$array[1].' alt="" height="250" width="500"/>
                <h1>'.$array[0].'</h1>
                <p>'.$array[2].'</p>
            </div>';
        


}

?>