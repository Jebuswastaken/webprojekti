<?php
require_once ('config/config.php');
?>

<?php
$kysely = $DBH->prepare("SELECT * FROM IMG WHERE IUSER=".$_SESSION['ID']." ORDER BY PVM DESC" ) ;


$kysely->execute();
//kuvia varten kansio!

 $rivi = $kysely->fetch() ;
    $s = $rivi["URL"];

    if (empty($s)){
        echo "<img src='uploads/placekitten.jpg'>";
    }

else {
    echo "<img src='$s' alt='showimage' height='260' width='300'>";
}
?>


