<!DOCTYPE html>

    <?php 
        session_start();
        if(!isset($_SESSION['access']) || $_SESSION['access']!=true){
            header("location:index.php");}
        else{ ?>
<html lang="lt">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bažnyčios Biblijos kelias šlovinimo grupė</title>   
    <meta name="description" content="Bažnyčios Biblijos kelias šlovinimo grupė">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
  
   
</head>
    
    <body>
       <?php include 'conect.php';?>
        <div class="page1">
            <div class="page1-a">
                <!--Navigacija-->
               <div class="page1-a-a">
                   <div class="home1"> 
                       <div class="home"><a href="index.php">Biblijos kelias</a>
                           <div class="logoff"><a href="logoff.php"><img src="image/power.png"></a>
                           </div>
                       </div>
                   </div>
                   
                   <div class ="nav">
                        <a  class="hrefAbout">
                            <div class="about" data-icon="&#xe972;">
                            Apie mus

                            </div>
                       </a>
                        <a href="daina.php" target="daina">
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

                <!--pradinis-->
                
                <div class="body_a">
                    <div class="body_s">
                        <div class="left">
                            <div class="img"><img src="image/inform2.jpg" alt="informacija"></div>
                            <div class="inf">Informacija Nr1</div>
                            <div class="text">(čia bus parasyta paskutinė, svarbi informacija)</div>
                            <div class="link"><a class="infol">Skaityti</a></div>
                        </div>
                        <div class="center">
                            <div class="img"><img src="image/info2.jpg" alt="informacija"></div>
                            <div class="inf">Informacija Nr2</div>
                            <div class="text">(čia bus parasyta paskutinė, svarbi informacija)</div>
                            <div class="link"><a class="infol">Skaityti</a></div>
                        </div>
                        <div class="right">
                            <div class="img"><img src="image/inform.jpg" alt="informacija"></div>
                            <div class="inf">Informacija Nr3</div>
                            <div class="text">(čia bus parasyta paskutinė, svarbi informacija)</div>
                            <div class="link"><a class="infol">Skaityti</a></div>
                        </div>

                    </div>
                </div>
                
                <!--apie mus-->
                  <div class="aboutus">
                     <div class="aboutus1">
                        <div class="aboutus2">
                            <h2>Apie mus</h2>
                            <div class="apie">
                                <img src="image/slovinimas.jpg" >
                            </div>
                            <div class="pp">
                                <p>Sekmininkų bažnyčia "Biblijos kelias" yra vienoje judriausių Vilniaus miesto dalių - prie Ukmergės plento, priešais parduotuvę "Maxima". Bažnyčią supa daugiabučiai gyvenamieji namai ir stambūs bei smulkūs prekybos centrai. </p><p>Adresas: Ukmergės g. 263.</p>
                                <p>Mes tikime į Dievo Trejybę – Tėvą, Sūnų ir Šventąją Dvasią, Dangaus ir Žemės, viso kas matoma ir nematoma Sukūrėją (Kol. 1,16-17; 1Kor. 8.6; Mato 3,16-17).</p>
                                <p>Dievas myli žmones. Dievo valia yra tokia, kad visi žmonės susitaikytų su Dievu, per gimimą iš naujo (dvasinį gimimą nuo Dievo, priimant Jėzų į savo širdį, išpažinus savo Viešpačiu) taptų Jo vaikais (Jono 1, 12-13; 1Tim. 2, 3-4; 2Kor. 5, 18-21).
                                </p><p>Dievo Sūnus Jėzus Kristus, kuris Esąs dar prieš Žemės sukūrimą, tapo žmogumi, užgimęs per Šventąją Dvasią Marijos įsčiose, pamokslavo išsigelbėjimo Evangeliją, gydė ligonius, išvarinėjo demonus, prikeldavo mirusius, buvo nukryžiuotas, mirė, buvo palaidotas, trečią dieną prisikėlė, buvo paimtas į Dangų ir Dievo prašlovintas (Fil. 2, 6-11; Kol. 1, 13-15; Mato 4, 23-24; 1 Kor. 15, 3-6; 1Tim. 2, 5-6).
                                </p><p>Šventoji Dvasia - kiekvieno asmens Guodėja, Dievo pažadas, kuris priklauso kiekvienam įtikėjusiam į Jėzų Kristų. Šventoji Dvasia yra Dievo antspaudas ir liudytoja (Ap.d. 5, 31-32; Ap.d. 2, 38-39; Rom. 8, 14-16; 2Kor. 1, 21-22).
                                </p><p>Šventasis Raštas susideda iš 66 Kanono knygų: Senojo ir Naujojo testamento. Šios knygos parašytos Dievo įkvėpimu. Dievas išreiškia Savo valią žmonėms (2 Tim. 3, 15-17; 2Petro 1, 19-21; Apr.1, 3; Apr. 22, 18-19).
                                </p><p>Žmogaus išsigelbėjimas nuo bausmės už nuodėmę per atgailą, tikėjimą į Jėzų Kristų ir paklusnumą Dievo Žodžiui – tai Dievo malonė (Ef. 2, 8-9; Ap.d. 17, 30-31; Ap.d. 16,31; Fil. 1, 27-29).
                                </p><p>Vandens Krikštas priimamas tikėjimu į Jėzų Kristų (Ap.d. 8, 36-38; Mato 28, 18-20; Morkaus 16, 15-16).
                                </p><p>Šventosios Dvasios krikštas pasireiškia kitų kalbų dovana (Ap.d. 1, 5; Ap.d. 2, 1-4; Ap.d. 10, 44-47; Ap.d. 19, 2-7).
                                </p><p>Visuotinę Dievo Bažnyčią sudaro visų amžių tikintieji į Jėzų Kristų, gimę iš aukšto. Jėzaus Kristaus Bažnyčia žemėje susidaro iš vietinių bažnyčių (Ef.1, 19-23; 1Kor. 12, 12-14; 1Kor.6, 15-17; Apr. 7, 9-10; Rom. 16,16).
                                </p><p>Šventoji Dvasia veikia per dovanas, kurias duoda Kristus tikintiesiems Savo Kūno nariams (Bažnyčiai) tarnauti (1Kor. 12, 7-11; Morkaus 16, 17-18) ir Evangelijos pamokslai Šventosios Dvasios jėgoje (Morkaus 16, 15-20; Apaštalų darbai 1, 8; Mato 24, 14).
                                </p><p>Šventas gyvenimas realus ir būtinas visiems tikintiesiems į Jėzų Kristų, sekant Jo pavyzdžiu, gyvenant remiantis Evangelija (1Petro 2, 11-21; 1Fes.4, 1-7; Tit.2, 11-14).
                                </p><p>Mes tikime į mirusiųjų prisikėlimą (teisiųjų ir pasmerktų) (Jono 5, 28-29; 1Kor.15, 51-55; Apr. 20, 4-6; Dan. 12, 2).
                                </p><p>Mes tikime į antrąjį Kristaus atėjimą su Jo Bažnyčia ir Dievo karalystės būvimą Danguje ir Žemėje (Hebr.9, 28; Ap.d. 1, 10-11; Apr. 1, 7; Fil.3, 20-21; 1Fes.4, 15-17; Kol.3, 4).
                                </p><p>Mes tikime į teisingą Dievo Teismą. Jis atlygins kiekvienam pagal jo darbus, amžinu išteisinimu arba amžinu pasmerkimu (Apr.22, 10-15; Apr.20, 10-15; Rom. 2, 4-16).</p>
		
                            </div>
                        </div>
                     </div>
                </div>
                
                <!--dainos-->
                <div class="dainos" >
                    
                    <div class="dainos1">
                        <div class="dainos2">
                            
                <iframe src="daina.php" name="daina" id="iframe"  frameborder="0" scrolling="no">    </iframe>
                </div>
                    </div>
                </div>
                <!-- kontaktai-->
                
                <div class="cont">
                    <div class="cont1">
                        <div class="cont2">
                            <div class="tit"> <h2>Kontaktai</h2></div>
                            <div class="cont3"> 
                                 <div class="people">
                                    <div class="photo"> <img src="image/jekaterina.jpg"></div>
                                    <div class="photo-hover"> <p>Jekaterina Mys</p><p>Pianistė,bosistė</p>
                                       <a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                
                                  <div class="people">
                                    <div class="photo"> <img src="image/paulina.jpg"></div>
                                    <div class="photo-hover"> <p>Paulina</p><p>Vokalistė</p>
                                        <a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                <div class="people">
                                    <div class="photo"> <img src="image/akob.jpg"></div>
                                    <div class="photo-hover"> <p>Akob</p><p>Bugnininkas</p><a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                <div class="people">
                                    <div class="photo"> <img src="image/valentin.jpg"></div>
                                    <div class="photo-hover"> <p>Valentin</p><p>Gitaristas</p><a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                <div class="people">
                                    <div class="photo"> <img src="image/vladik.jpg"></div>
                                    <div class="photo-hover"> <p>Vladik</p><p>Bosistas</p><a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                <div class="people">
                                    <div class="photo"> <img src="image/jolita.jpg"></div>
                                    <div class="photo-hover"> <p>Jolita</p><p>Smuikininkė</p><a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                 <div class="people">
                                    <div class="photo"> <img src="image/emilija.jpg"></div>
                                    <div class="photo-hover"> <p>Emilija</p><p>Smuikininkė</p><a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                 <div class="people">
                                    <div class="photo"> <img src="image/marius.jpg"></div>
                                    <div class="photo-hover"> <p>Marius</p><p>Saksofonistas</p><a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                
                                 <div class="people">
                                    <div class="photo"> <img src="image/andrej.jpg"></div>
                                    <div class="photo-hover"> <p>Andrej</p><p>Gitaristas</p><a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                 <div class="people">
                                    <div class="photo"> <img src="image/timofej.jpg"></div>
                                    <div class="photo-hover"> <p>Timofej</p><p>Garso operatorius</p><a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                 <div class="people">
                                    <div class="photo"> <img src="image/alla.jpg"></div>
                                    <div class="photo-hover"> <p>Alla</p><p>Vokalistė</p><a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                                 <div class="people">
                                    <div class="photo"> <img src="image/julia.jpg"></div>
                                    <div class="photo-hover"> <p>Julia</p><p>Vokalistė</p><a href="tel:+37067844791"> +37067844791</a></div>
                                </div>
                               
                            </div>
                        </div>
                           
                    </div>
                </div>
                <!-- kalendorius-->
                
                 <div class="cal">
                    <div class="cal1">
                        <div class="cal2">
                            <div class="tit"> <h2>Kalendorius</h2></div>
                            <div class="cal3"> 
                                Kalendorius
                    
                           
                            </div>
                        </div>  
                    </div>
                </div>
                
                <!-- informacija-->
                
                 <div class="info">
                    <div class="info1">
                        <div class="info2">
                            <div class="tit"> <h2>Informacija Nr1</h2></div>
                            <div class="info3"> 
                                (čia bus parasyta paskutinė, svarbi informacija)
                           
                            </div>
                            <div class="tit"> <h2>Informacija Nr2</h2></div>
                            <div class="info3"> 
                            (čia bus parasyta paskutinė, svarbi informacija)
                           
                            </div>
                            <div class="tit"> <h2>Informacija Nr3</h2></div>
                            <div class="info3"> 
                       
                           (čia bus parasyta paskutinė, svarbi informacija)
                            </div>
                        </div> 
                    </div>
                </div>
                 
               
                
                <!---Footer-->
                <div class="footer">
                    <div class="footer1">
                        <ul>
                            <li>  <a href="page1.php">Pagrindinis</a></li> 
                           <li>  <a class="fabout">Apie mus</a></li> 
                           <li>  <a href="daina.php" target="daina" class="fdainos">Dainos</a></li> 
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
            
        </div>
        
        <script src="js/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	   <script src="js/main.js"></script>
    </body>
    
</html>
<?php }; ?>
