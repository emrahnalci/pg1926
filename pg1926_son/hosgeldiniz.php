<?php 
$aktif = 4;
require_once '_ayarlar.php';

$oturumBilgisi = '';

if(isset($_SESSION["pg1926"]) == FALSE){
    echo '<meta http-equiv="refresh" content="0;URL=girisyap.php" >';
    die();
}
else {
    $oturumBilgisi = $_SESSION["pg1926"];
}


require_once '_ust_kisim.php';
require_once '_menu.php';
?>

<div class="ortakisim">
Hoşgeldin: <?php echo $oturumBilgisi["isim"]; ?><br>
Giriş Tarihiniz: <?php echo $oturumBilgisi["girisTarihi"]; ?><br>
</div>

<?php

require_once '_alt_kisim.php';
