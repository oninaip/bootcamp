
<?php 
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('utf-8');
$subjectvalue='&#371; ų';



$db = mysqli_connect("localhost","root","","worship");
mysqli_query($db,"SET NAMES 'utf8'");





if ($db->connect_error){echo "sprogo serveris!";
                        exit;
                       };                                   
                                            
function clearAttribute($text) {
    return htmlspecialchars($text);
}
