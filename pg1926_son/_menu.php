
<ul class="menu">
    <?php 
    $i = 1;
    foreach($veriler["menu"] AS $anahtar => $yaz){ 
        if($aktif == $i){
            $aktifSayfa = ' class="aktif"'; 
        }
        else {
            $aktifSayfa = '';
        }
    ?>
    <li>
        <a href="<?php echo $yaz["link"]; ?>"<?php echo $aktifSayfa; ?>>
            <?php echo $yaz["butonAdi"]; ?>
        </a>
    </li>
    <?php $i++; } ?>
</ul>



