#<center>O zaman devam edelim derim.</center>

## PHP etiketleri nedir ?
PHP ayrıca kısa başlangıç etiketine de ``` <? ?> ``` izin verir. Bu sadece, PHP --enable-short-tags yapılandırma seçeneği ile derlenerek veya php.ini yapılandırma dosyası yönergesi short_open_tag kullanılarak etkinleştirilebilir.
<br> Bu şekilde de kullanıyoruz: ``` <?php ?> ```


## Deyim Ayrımı nasıl olur ?
PHP de deyimlerin birbirlerinden her bir deyimin sonuna konulacak noktalı virgülle ayrılmasını gerektirir.


# DEĞİŞKENLER
PHP'de değişkenler dolar işareti ile başlanır ve değişken adı oluşturulur. Değişken adı büyük-küçük harf duyarlıdır. Değişkenler sayı ile başlayamaz.
```php
$degisken = 'Emrah';
$Degisken = 'NALCI';
echo "$degisken, $Degisken"; // "Emrah, NALCI" yazdırır
```

## SABİT TANIMLAMA
```php
define("TANIM", "Merhaba tatlı dünya");
echo TANIM;
```

Değişkenleri ekrana yazdırmak.

```php
<?php echo $ad; ?>
<?= $ad; ?>
<?php print($ad); ?>
// Ekrana ad değişkenini yazar.
```


## PHP Kodu içine açıklama eklemek
### PHP Açıklama Satırı Örnekleri:
```
// Bu kısma istediğimiz notları yazalım

/* Bu kısma istediğimiz notları yazalım */

//======================================================================
// Dikkat çekici başlık
//======================================================================

//-----------------------------------------------------
// Yada bu şekilde dikkat çekici başlık
//-----------------------------------------------------

#Bölüm 1
#Bölüm 2
#Bölüm 3

/*
* Uzun uzun not almak istersek
* işte bu şekilde not alabiliriz aslında
* Siz nasıl isterseniz
*/
```

## Kod içerisindeki notlar uzun vadede hayat kurtarır diyebiliriz.

# PHP'DE Operatörler

### Aritmetik Operatörler

İşlem |Anlamı| Açıklaması|
------------|-------------|-------------
$a + $b | 	Toplama |	$a ile $b'nin toplamı.
$a - $b | 	Çıkarma |	$a'nın $b'den farkı.
$a * $b | 	Çarpma |	$a ile $b'nin çarpımı.
$a / $b | 	Bölme |	$a'nın $b'ye bölümü.
$a % $b | 	Kalan |	$a'nın $b'ye bölümünden kalan.
$a ** $b|  Üs |	$a üssü $b. PHP 5.6 ile eklendi.

## Operatörler
```php
// Toplama işlemi
$a = 10;
$b = 20;
$c = 5;
$sonuc = $a + $b - $c;
echo $sonuc;

// Çıkarma İşlemi
$yil = 2020;
$dogum_yili = 2001;
$yas = $yil - $dogum_yili;
echo $yas;

// Çarpma İşemi
$ilkSayi = 100;
$ikinciSayi = 100;
echo $ilkSayi * $ikinciSayi;

// Bölme İşemi
$ilkSayi = 100;
$ikinciSayi = 5;
echo $ilkSayi / $ikinciSayi;

// Yüzde mi alsak bir de ?
// 500 * (15 / 100) = 75
$para = 1000;
$islem = $para * (18 / 100);
$sonDurum = $para - $islem;
echo $islem." + ".$sonDurum;

```
### String Operatörler
```PHP
// Birleştirme operatörü

$a = "Merhaba ";
$b = $a . "Marslı!"; // $b artık "Merhaba Marslı!" yazacak
$a = "Merhaba ";
$a .= "Merhaba!";     // $a artık "Merhaba Merhaba!" yazacak
```
### Mantıksal Operatörler
İşlem |Anlamı|Açıklaması
------------|-------------|-------------
$a AND $b |	Ve |  	$a ve $b  her ikisi de doğru ise sonuç doğru (TRUE dönecektir).
$a OR $b |	Veya 	| $a veya $b doğru ise sonuç doğru.
$a XOR $b |	Ayrıcalıklı Veya | 	$a veya $b doğruysa sonuç doğru, her ikiside doğru ise sonuç yanlıştır (FALSE dönecektir).
!$a 	|Değil 	| $a doğru değilse sonuç doğrudur.
$a && $b |	Ve |	$a ve $b her ikisi de doğruysa sonuç doğrudur.
$a &#x7c;&#x7c; $b |	Veya 	| $a veya $b doğruysa sonuç doğrudur.


### Arttırma ve eksiltme Operatörleri

İşlem |Anlamı| Açıklaması
------------|-------------|-------------
++$a |	Önceden arttırım |	$a bir arttırıldıktan sonra döndürülür.
$a++ |	Sonradan arttırım |	$a döndürüldükten sonra değeri bir arttırılır.
--$a |	Önceden eksiltim |	$a bir eksiltildikten sonra döndürülür.
$a-- |	Sonradan eksiltim |	$a döndürüldükten sonra değeri bir eksiltilir.


### Karşılaştırma Operatörleri
İşlem | Anlamı|Açıklaması
------------|-------------|-------------
$a == $b|    Eşittir   |  Tür dönüşümünden sonra, $a ve $b aynı değere sahipse sonuç TRUE olur.
$a === $b|   Aynıdır   |  $a ve $b aynı değere sahipse ve türleri de aynıysa sonuç TRUE olur.
$a != $b|    Eşit değildir |  Tür dönüşümünden sonra, $a ve $b aynı değere sahip değilse sonuç TRUE olur.
$a <> $b|    Eşit değildir  | Tür dönüşümünden sonra, $a ve $b aynı değere sahip değilse sonuç TRUE olur.
$a !== $b |  Farklıdır   |$a ve $b aynı değere sahip değilse veya türleri aynı değilse sonuç TRUE olur.
$a < $b |    Küçüktür  |  $a kesin olarak $b'den küçükse sonuç TRUE olur.
$a > $b |    Büyüktür  |  $a kesin olarak $b'den büyükse sonuç TRUE olur.
$a <= $b|    Küçük veya eşittir | $a, $b'den küçük veya ona eşitse sonuç TRUE olur.
$a >= $b|    Büyük veya eşittir | $a, $b'den büyük veya ona eşitse sonuç TRUE olur.


### Atama Operatörü
```PHP
$a = ($b = 4) + 5; // $a'nın değeri 9, $b'nin değeri 4 olur.
$a = 3;
$a += 5; // $a'nın değeri 8 olur, asıl işlem: $a = $a + 5;
$b = "Herkese ";
$b .= "Merhaba!"; // $b'nin değeri "Herkese Merhaba!" olur.
                  // asıl işlem: $b = $b . "Merhaba!";
```

# DENETİM YAPILARI

### if
```PHP
if ($a > $b) echo "a büyüktür b";
```
### if / else
```PHP
if ($a > $b) {
    echo "a büyüktür b";
} else {
    echo "a büyük değildir b";
}
```
### elseif
```PHP
if ($a == 5):
    echo "a eşittir 5";
    echo "...";
elseif ($a == 6):
    echo "a eşittir 6";
    echo "!!!";
else:
    echo "a ne 5 ne de 6'dır";
endif;
```

### try-catch
```PHP
try {
    $sayi= 10;
    if ( $sayi > 10 ) {
         throw new exception('Sayı 10dan küçük olduğu için hatalı.');
    }
    echo 'Sayı 10dan büyük olduğu için uygun.';
} catch (Exception $hata) {
     echo "Hata: " . $hata->getMessage();
}
```

### while

```PHP
/* örnek 1 */
$i = 1;
while ($i <= 10) {
    echo $i++;
    $i++;
}

/* örnek 2 */
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
```

### for
```PHP
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
```
### foreach
Örnek 1
```PHP
$dizi = array(1, 2, 3, 4);
foreach ($dizi as $deger) {
    echo $deger;
}
```
Örnek 2
```PHP
$arr1 = array("a" => 1, "b" => 2, "c" => 3);
foreach ($arr1 as $key => $val) {
    echo  "<p>$key değeri: $val</p>";
}
```
### break
break deyimi, for, foreach, while, do-while ve switch yapılarının çalışmasını sonlandırmak için kullanılır.

### continue
continue deyimi, for, foreach, while ve do-while döngü yapılarının içinde kullanılır. Bu deyim kullanıldığında, döngünün kalan kısmı atlanır ve sonraki yineleme başlatılır.


### return
return program denetimini çağrıldığı modüle döndürür ve program kendinden sonra gelen ifadeden itibaren çalışmayı sürdürür.

```PHP
/* Çağrıan modüle dön */

return '';

/* Tek bir değer dön */*

return 'Merhaba!';

return $Sonuc;

/* Birden fazla deger dönme */

return array(7889, "Ankara", 678); // list($sayi1, $sehir, $sayi2) = fonksiyonadi(); //seklinde kullanılır
```

### Öntanımlı Değişkenler / Süper küreseller

Süper küreseller — Süper küreseller bütün etki alanlarında daima mevcut olan yerleşik değişkenlerdir

PHP'de öntanımlı değişkenlerin çoğu "süper küresel"dir. Bu, betik boyunca bütün etki alanlarında kullanılabilir oldukları anlamına gelir. İşlevler veya yöntemler içinde bu değişkenlere erişmek için global $değişken; yapmak gerekmez.


Değişken |Anlamı|
------------|-------------|
```$GLOBALS``` | Küresel alanda bulunan bütün değişkenleri içerir
```$_SERVER``` | Sunucu ve işletme ortamı bilgisi
```$_GET``` | HTTP GET değişkenleri
```$_POST``` | HTTP POST değişkenleri
```$_FILES``` | HTTP Dosya Yükleme değişkenleri
```$_REQUEST``` | HTTP İstek değişkenleri
```$_SESSION``` | Oturum değişkenleri
```$_ENV``` | Ortam değişkenleri
```$_COOKIE``` | HTTP Çerezleri