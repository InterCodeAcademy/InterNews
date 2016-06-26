<?php
if(isset($_GET['a'])){
    $articleId = trim($_GET['a']);
    include('model/index.php');
    include('view/index.php');

    displaySingleArticle(getArticle($articleId));
    
}else{
    echo 'no entra nada';
}




?>