<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="utf-8"> <!-- utf-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bažnyčios Biblijos kelias šlovinimo grupė</title>   
    <meta name="description" content="Bažnyčios Biblijos kelias šlovinimo grupė">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
  <?php include 'conect.php';?>
   
</head>
    
    <body>
        <div class="tit"> 
            <h2>Rusiškos
                <span class="papild">
                    <a href="addsong.php"  class ="dobav" data-icon="&#xea0a;"></a>
                </span>
            </h2>
        </div>
        <div class="kalba1">
            <div class="kalba"> 
               <a href="dainoslt.php"><div class="ltnone1"><img src="image/lt.png"></div></a>
                <a href="dainosRu.php"><div class="runone1"><img src="image/ru.png"></div></a>
                <a href="dainosPl.php"><div class="lenknone1" ><img src="image/pol.png"></div></a>
            </div>
           <div class="idetizod"> <form>
                <select class="selectsong" style="font-family:PT Sans, serif;" rows="100%">
                    <option>Pasirinkite dainą</option>
                        <?php
                        $sql = $db->query("SELECT * FROM dainos WHERE kalba = 'Ru' ORDER BY pavadinimas ");
                        while ( $array = $sql-> fetch_assoc() ) {   ?>
                    <option value =" <?php echo $array['tekstas']; ?>" data-value="<?php echo $array['akkordai']; ?> " data-url="<?php echo $array['youtube']; ?>">  <?php echo $array['pavadinimas']; ?> </option>

                    <?php echo $array['tekstas']; }; ?>

                  </select>
                </form>
               <div class="youtube" ><a href="" target="_blank" > </a></div>
                <pre><div class="slova" style="font-family: PT Sans, serif;">  </div>  </pre>
                <span class="ak" ></span> <pre><div class="akkordai" style="font-family: PT Sans, serif;">  </div> </pre>
            </div>
        </div>

        <script src="js/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	   <script src="js/main.js"></script>
        
    </body>
</html>