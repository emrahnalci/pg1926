<?php

/*
echo "Merhaba yeni dünya <br>";
print("Merhaba");
*/
/* Buraya da açıklama yazabilirim */

#Buraya da yazabilirim
//Burada da beni kimse görmez.

/*
$degisken = "121233456";
echo $degisken;
*/

/*
$a = 54151;
$b=8671682;

echo $a * $b;
*/

/*
$pg = "PG1926";
$dscgazi = "Developer Student Google";

echo $pg + $dscgazi;
*/

/*
$abc = 1;
$def = 2;

if($abc == 1){
    echo "doğru"; 
}
else if($def == 2){
    echo "def değişkeni çalıştı.";
}
else {
    echo "Yanlış";
}

*/

/*
    DÖNGÜLER
*/

/*
$i = 0;
while ($i <= 10){
    if($i == 5){
        break;
    }
    echo $i."<br>";
    $i++;
}
*/

/*
for($i=0; $i < 101; $i++){
    echo $i."<br>";
}
*/


/*
    Array - Diziler
*/
/*
$dizi = array('Merhaba','PG1926','Eğitim','Seti',"Tekrar");
foreach($dizi AS $yaz){
    echo $yaz."<br>";
}
*/

/*
$dizi = [
    "a" => "PG1926",
    "b" => "PHP",
    "c" => "Ders",
    "d" => "İçeriği",
    "e" => "Anlatımı",
    "f" => "ile",
    "g" => "ilgili",
    "h" => "örnek"
];

$i=1;
foreach($dizi AS $anahtar => $yaz){
    if($i == 3){ break; }
    echo $i." ".$yaz."<br>";
    $i++;
}
*/





/*
    MATEMATİKSEL İŞLEMLER
*/

// echo intval("5"); 
// intval string ifadeyi integer verisine dönüştürüyor.

// echo round("5.2");
// Sayı ne tarafa yakınsa o tarafa yuvarlama yapar.

// echo ceil(9.9);
// Sayıyı yukarı yuvarlar

// echo floor(5.9);
// sayıyı aşağı yuvarlar

// echo rand(1,6);
// Rastgele sayı oluşturma

// echo md5(md5("123456"));
// Verileri şifrelememizi sağlar.
/*
    * Farklı şifreleme türlerini araştır
*/
/*
$kullanici = "admin";
$parola = md5("123456");

if($kullanici == "admin" AND $parola == md5("123456")){
    echo "Giriş Yapıldı!";
}
else {
    echo "Kullanıcı adı veya parolanız hatalı!";
}
*/

// echo abs(-99);
// Mutlak değer 
// Negatif olarak giren bir sayının pozitif çıkmasını sağlar

/*
    ############################################################

    String ifadelerle fonksiyonlar

    ************************************************************
    *************************************************************
*/

// echo trim("                    PG 1926        ");
// Önündeki ve arkasındaki boşlukları temizler

#echo strtoupper("pg1926 ile eğitim seti");
// tüm harfleri büyük harfe çevirir
#echo mb_strtoupper("pg1926 ile eğitim seti","UTF-8");
// Tüm karakterleri büyük harfe çevirir UTF8 desteği vardır

/*
echo strtolower("MERHABA YENİ Dünya");
Tüm harfleri küçük harfe çevirir
echo mb_strtolower("MERHABA YENİ Dünya","UTF-8");
Tüm harfleri küçük harfe çevirir UTF8 desteği vardır
*/

// echo strrev("Merhaba PG1926 Ekibi");
// Yazıyı tersten yazmamızı sağlar

// echo strlen("Esenlikler Dünya");
// Karakter sayısını hesaplar

/*
$konu = "Merhaba DSC Gazi";
$kelime = "Merhaba";
$degis = "Selam";
echo str_replace($kelime, $degis, $konu);
// Aranan kelimeyi bulunan kelime ile değiştirme
*/

// echo substr("Esenlikler",2,1);
// echo mb_substr("Esenlikler",0,5,"UTF-8");
// Belli bir karakter aralığını almamıza olanak sağlar.

/*
$dizi = ["elma","muz","çilek","manav","elektrikçi"];
shuffle($dizi);
var_dump($dizi);
// Bu fonksiyon dizileri karıştırmamızı sağlar
*/

/*
$dizi = ["elma","muz","çilek","manav","elektrikçi"];
unset($dizi[0]);
var_dump($dizi);
// Yok etme fonksiyonu
*/


/*
$diziA = ["elma","muz","çilek"];
$diziB = ["bilgisayar","telefon","tablet"];

$birlestir = array_merge($diziA, $diziB);
 // unset($birlestir[3]);
print_r($birlestir);
*/

/*
Oturum İşlemleri
session_start();

$_SESSION["oturum"] = 1;

// unset($_SESSION["oturum"]);
// session_destroy();
print_r($_SESSION["oturum"]);

*/










?>