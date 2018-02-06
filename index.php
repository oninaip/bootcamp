<?php
session_start();

if (isset($_SESSION['access']) && $_SESSION['access'] === true){
    header("Location: page1.php");
    
}; 

?>
    
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8"> <!-- utf-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bažnyčios Biblijos kelias šlovinimo grupė</title>    
    <meta name="description" content="Bažnyčios Biblijos kelias šlovinimo grupė">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="js/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>
    
    <body>
        
    <div class="section-1">
        <div class="section-1-a">
            <div class="section-a">
                <div class="section-a-a"><a href="index.php">Biblijos kelias</a></div>
                <div class="section-a-b">
                    <a >Apie mus</a>
                    <a >Dainos</a>
                    <a >Kontaktai</a>
                    <a >Kalendorius</a>
                
                </div>
                <div class="section-a-c"> Sveiki atvykę į mūsų puslapį!</div>
                <div class="href"><a class="hrefiei">prisijungti</a></div>
            </div>
        
        <div class="ieiti">
          
             <div class="error">Neteisingas login'as arba slaptažodis</div>
            <form class="ieiti2" name="ieiti2"  method="post"> 
            <input type="text" class="login" placeholder="login" required  name="login">
            <input type="password" class="pass" required placeholder="slaptažodis" name="pass">
            <div class="href2"><input type="submit" class="href3" value="Įeiti"></div>
                          
                <?php
  			if(!empty($_POST['pass']) && $_POST['pass']== "123" && $_POST['login'] == "admin"){
				 $_SESSION['access']=true;
				 header("Location: page1.php") ;
    			}
                	elseif(!empty($_POST['pass'])){
                    		?> <script type="text/javascript"> 
                		$(document).ready(function(){
					    $('.ieiti').css("display","block");
					    $('.section-a-c, .href ').css("display","none");
					    $('.error').css('display','block');
					    $('.href3').css('top','120px');
					});
                 			</script><?php
                			}; 
    					?>
            </form>
            
            </div>
            
        </div>
    </div>
     
	<script src="js/main.js"></script>
    </body>
    
</html>
