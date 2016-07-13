<?php
                    include('../model/index.php');
                    $get = $GETUSERS." WHERE `username`='".$_GET['username']."'";
                    $compare = array();
                    $compare = SQLQuery($get);
                     
            if(count($compare) != 0){       
                    foreach($compare as $array){
                            $username =  $array['username'];
                            $pass = $array['passw'];
                    }



                        //Usuario y contraseña correctas
                        if($pass == trim($_GET['pass'])){
                                echo 'Success';    
                              session_start();
                                $_SESSION['USER'] = $_GET['username'];
                                exit();
                                 



                        //Contraseña incorrecta    
                        }
            }else{
                
                
                echo 'Sin resultados';
                
                
            }   
            
?>