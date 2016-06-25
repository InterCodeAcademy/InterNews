<?php
include('model/sql.php');
$results = array();
$results =  SQLQuery($GETNEWSLIST,"ALL");
$json = 'JsonDescriptions/'.$results['descJson'].'.json';
$string = file_get_contents($json);

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($string, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if($key == "img"){
        
        echo '<img src="JsonDescriptions/thumb/'.$val.'" height="250" width="250" />';
        echo $val;
    }else{
        echo $val.'<br/>';
    }
        
    
}
?>
