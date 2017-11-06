<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="utf-8"> <!-- utf-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bažnyčios Biblijos kelias šlovinimo grupė</title>   
    <meta name="description" content="Bažnyčios Biblijos kelias šlovinimo grupė">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
  <meta http-equiv="refresh" content="1;page1.php">
   
</head>
    
    <body>
      <?php include 'conect.php';?>

                                        <?php 
        function clear($text) {
            return str_replace("'", '"', $text);
        }
                                          $pavadinimas = clear($_POST['pavadinimas']);
                                          $kalba = clear($_POST['kalba']);
                                          $tekstas = clear($_POST['tekstas']); 
                                          $akkordai = clear($_POST['akkordai']); 
                                          $youtube = clear($_POST['youtube']);
                                       
                                        $query = "INSERT INTO dainos SET pavadinimas = '$pavadinimas', kalba = '$kalba', tekstas = '$tekstas', akkordai = '$akkordai', youtube = '$youtube';";
        
                                       $db->query($query);
                                          
                                        ?>
        <div class="page1">
            <div class="page1-a">
                <!--Navigacija-->
               <div class="page1-a-a">
                   <div class="home1"> 
                       <div class="home"><a href="index.php">Biblijos kelias</a></div>
                   </div>
                   
                   <div class ="nav">
                        <a  class="hrefAbout">
                            <div class="about" data-icon="&#xe972;">
                            Apie mus

                            </div>
                       </a>
                        <a >
                            <div class="songs" data-icon="&#xe911;">
                            Dainos

                            </div>
                       </a>
                        <a >
                            <div class="contakt" data-icon="&#xe944;">
                            Kontaktai

                            </div></a>
                        <a >
                            <div class="calen" data-icon="&#xe953;">
                            Kalendorius

                            </div></a>
                    </div>
                    <div class="navAp">

                            <div class="about1">Kas mes, apie mūsų bažnyčią, kaip mus rasti</div>
                            <div class="about1">Dainų žodžiai rusų, lietuvių, lenkų kalbomis ir akordai  prie jų.</div>
                            <div class="about1">Telefonų numeriai tų, kurie groja, dainuoja, rodo  žodžius, operatorių.</div>
                            <div class="about1">Repeticijų laikas, kas groja, kokios dainos išrinktos.</div>
                    </div>
                </div>
                <!--tuscias div'as-->
                <div class="page1-a-a-a"></div>

              <div class="body_aa">
                    <div class="body_ab">
                        <div class="body_ac">
                            <h2>Ačiū!</h2>
                            Daina sėkmingai išsaugota!

                            </div>
                        </div>
                     </div>
                </div>
            
<div class="footer">
                    <div class="footer1">
                        <ul>
                            <li>  <a href="page1.php">Pagrindinis</a></li> 
                           <li>  <a class="fabout">Apie mus</a></li> 
                           <li>  <a class="fdainos">Dainos</a></li> 
                           <li>  <a class="finfo">Informacija</a></li> 
                           <li>  <a class="fcal">Kalendorius</a></li> 
                           <li>  <a class="fkont">Kontaktai</a></li> 
                           <li>  <a href="https://www.facebook.com/BiblijosKelias/" target="_blank" class ="ico" data-icon="&#xea90;"></a></li> 
                         </ul>   
                       
                    </div>
                </div>
                 <div class="footer3">
                    <div class="footer4">
                        &copy; 2017 Bažnyčios "Biblijos kelias" šlovinimo grupė
                    </div>
                </div>
            </div>
            
        
        
        <script src="js/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	   <script src="js/main.js"></script>
        
    </body>
    
</html>







                                    
