<!DOCTYPE html>
<html>
    <head></head>
<body>
    <script src="jquery.min.js"></script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    
    <form action="index.php" method="post">
    <textarea  style="width:1000px;"class="form-control" id="lead" rows="20" name="lead" ></textarea>
    <input type="submit" value="submit"/>
        <div id="html"></div>
    </form>
    
    <?php
    if(isset($_POST['lead'])){
      if(!file_exists("dipshit.html")){
        $createArticle = fopen(
        'dipshit.html', 'w+');
          fwrite($createArticle, $_POST['lead']);
          fclose($createArticle);
      }
    }else{
      if(file_exists("dipshit.html")){  
          include("dipshit.html");
        }
    }
    ?>
    </body>
</html>