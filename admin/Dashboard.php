               <?php
session_start();
if(isset($_SESSION['USER'])){
                 
                                  
}else{
    
    header("Location: http://localhost/admin/");
exit();

}
?>  
<!DOCTYPE html>
<html>
<title>Write</title>
    <link rel="stylesheet" type="text/css" href="extras/styleDashboard.css"/>
    <link rel="stylesheet" type="text/css" href="extras/bootstrap.min.css"/>
<head>
</head>
    
    
<body>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
        new nicEditor().panelInstance('text1');
            
            	new nicEditor({buttonList : ['image']}).panelInstance('photo');
        })
        ;</script>
    <script src="extras/jquery.min.js"></script>
    <script src="extras/bootstrap.min.js"></script>

    <div class="container" style="margin-top:20px;">
        <div class="row">
        <div class="col-lg-2">
       
            <?php
                echo '<img src="../model/Perfiles/'.$_SESSION['USER'].'/pp.jpg" height="100" width="100"/><br/>';
                    echo '<h2 style="padding-left:20px;">'.$_SESSION['USER'].'</h2>';
                       echo '<button type="button" class="btn btn-default btn-lg"><a href="modal/logout" style="text-align:;">Log                          Out</a></button>';
                     
            
            ?>
        </div>
       
    
  <div class="col-lg-10">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Roga</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Articulos Publicados</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Escribir Articulo</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Articulos Guardados</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">lakjsdhfklajsdhfkasdf</div>
    <div role="tabpanel" class="tab-pane" id="profile">
     
    
      </div>
    <div role="tabpanel" class="tab-pane" id="messages">
      <form id="form" action="index.php" method="post">
        <textarea id="photo" stlye="height:500px;"></textarea>
        <textarea  id="text1" style="height:500px;"></textarea>
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
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">asdfasd...</div>
  </div>

</div>
        </div> </div>
    <script>
        $('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
        var w = $(".col-lg-10").width()+"px";
        var w2 = $(".col-lg-10").width()/5+"px";
   $("#text1").css('width',w);
        $(".nicEdit-buttonContain").addClass("buttonEnabled");
        $("#photo").css('width',w);
    </script>
</body>
</html>
