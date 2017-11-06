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
            <h2>Įdėti naują dainą
                <span class="papild">
                    <a  class ="dobav" data-icon="&#xea0a;"></a>
                </span>
            </h2>
        </div>
        <div class="kalba1">
            <div class="kalba"> 
                 <a href="dainoslt.php"><div class="ltnone1"><img src="image/lt.png"></div></a>
                <a href="dainosRu.php"><div class="runone1"><img src="image/ru.png"></div></a>
                <a href="dainosPl.php"><div class="lenknone1" ><img src="image/pol.png"></div></a>
            </div>
            <div class="idetizod"> 
                <form enctype="application/x-www-form-urlencoded" method="post" name="form" action="add.php" target="_parent" accept-charset="utf-8">
                    <label> Dainos pavadinimas: <input type="text"  name="pavadinimas" required></label>
                    <label>Dainos kalba: 
                        <select name="kalba">
                          <option>Lt</option>
                          <option>Ru</option>
                          <option>Pl</option>
                        </select>
                    </label>
                    <label> Dainos žodžiai: 
                        <textarea name="tekstas" required ></textarea>
                    </label>
                    <label>Dainos akordai: 
                        <textarea name="akkordai"  required></textarea>
                    </label>
                    <label> Youtube: <input type="text"  name="youtube"></label>

                    <label> <input type="submit" value="Išsaugoti" class="issaugoti" >  </label>

                </form>
            </div>

        </div>
       <script src="js/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	   <script src="js/main.js"></script>
    </body>
</html>