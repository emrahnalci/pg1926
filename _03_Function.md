# PHP kullandığımız temel fonksiyonlar

## matematiksel işlemler

###([intval](http://php.net/intval))
Bir değişkenin/değerin tamsayı değerini döndürür.

```php
echo intval(42);    //42
echo intval(4.2);   //4
echo intval('42');  //42
echo intval('+42'); //42
```

####([round](http://php.net/round))
Round fonksiyonun işi çok basit sadece yuvarlama işlemi yapar. Virgülden sonraki rakam 5'ten küçükse aşağı , 5 ve 5'ten büyükse yukarı yuvarlama yapar. 

```php
echo round(5.1)."<br>"; //5
echo round(5.4)."<br>"; // 5
echo round(5.5)."<br>"; // 6
echo round(5.8)."<br>"; // 6
echo round(-5.4)."<br>"; // -5
echo round(-5.9)."<br>"; // -6
echo round(5.333446345,2)."<br>"; //5.33
```

###([ceil](http://php.net/ceil))
Bir rakamı en yakın tam sayıya yuvarlama işlemi yapar.
```php
<?php
echo ceil(5.3);    // 6
echo ceil(9.999);  // 10
echo ceil(-3.14);  // -3
```

###([floor](http://php.net/floor))
Floor fonksiyonu ceil fonksiyonun tam tersi işlem yapar yani rakamı aşağıya yuvarlar.
Bir sayıyı kendisine en yakın ALT tam sayıya yuvarlamak için kullanılır.

```php
echo floor(4.3);   // 4
echo floor(9.999); // 9
echo floor(-3.14); // -4
```

###([rand](http://php.net/rand)) - Benim en sevdiğim
Rastgele integer değerler üretmemizi sağlar. Eğer istersek belirtilen değerler arasında da integer veri üretmemizi sağlar.

```php
echo rand() . "<br>"; //Rastgele bir sayı oluşturur.
echo rand() . "<br>"; //Rastgele bir sayı oluşturacaktır.

echo rand(1, 99); //1 - 99 arasında rastgele sayı oluşturur.
```

###([md5](http://php.net/md5))
Bir verinin md5 olarak hesaplanmasını sağlar. <br>
Bir örnekle açıklayacak olursak;

```php
$str = 'Emrah NALCI';
if (md5($str) === 'c17d9b69713e2826e130f77ba830f994') {
    echo "Doğru";   
}
else {
    echo "Yanlış";
}
  //Sonuç: Doğru
```

###([abs](http://php.net/abs))
ABS fonksiyonu negatif olan bir sayı değerini pozitif yapar :)
```php
$a = -99;
echo abs($a); // 99
```
<hr>

## Dizge (String) fonksiyonları

###([trim](http://php.net/trim))
String ifadenin içerisindeki boşlukları yok eder.

```php
echo trim('  Emrah NALCI    '); // Emrah NALCI
```

###([strtoupper](http://php.net/strtoupper))
String ifadenin harflerini büyük harfe çevirmemizi sağlar.
```php
$str = "emrah nalcı";
/* 
 * mb_strtoupper($str, "UTF8")
*/
$str = strtoupper($str);
echo $str; // EMRAH NALCI
```

###([strtolower](http://php.net/strtolower))
String ifadenin harflerini küçük harfe çevirmemizi sağlar.

```php
$str = "PG1926 İLE PHP DERSLERİ";
/* 
 * mb_strtolower($str, "UTF8")
*/
$str = strtolower($str);
echo $str; // ph1926 ile php dersleri
```

###([strrev](http://php.net/strrev))
String ifadeyi ters çevirir.
```php
echo strrev("Merhaba PG1926 Ekbi!"); // "!ibikE 6291GP abahreM";
```

###([strlen](http://php.net/strlen))
String ifadenin uzunluğunu öğrenmemizi sağlar.
```php
$str = 'PG1926!';
echo strlen($str); // 7
```

###([str_replace](http://php.net/str-replace))
String ifadenin içinde aradığımız kelime örneklerini yenisiyle değiştirir.
```php
$phrase  = "Emrah NALCI ile PHP eğitimi.";
$healthy = strp_replace("Emrah NALCI", "PG1926", $phrase);

```

###([ucwords](http://php.net/ucwords))
String ifadenin her kelimenin ilk harfini büyük yapar.
```php
$foo = 'merhaba pg1926!';
$foo = ucwords($foo); // Merhaba Pg1926!           
```

###([ucfirst](http://php.net/ucfirst))
String ifadenin sadece ilk harfini büyük harfe çevirir.
```php
$foo = 'selam!';
$foo = ucfirst($foo); // Selam!           
```

### [lcfirst](http://php.net/lcfirst)
String ifadenin sadece ilk harfini küçük harf yapar.
```php
$foo = 'Merhaba Yeni Dünya';
$foo = lcfirst($foo); //merhaba Yeni Dünya          
```

###([substr](http://php.net/substr))
Dizgenin bir kısmını döndürür.
```php
/*
 * mb_substr('Merhaba PG1926 Ekibi!',8,6,"UTF8") // PG1926
 */
echo substr('Merhaba PG1926 Ekibi!', 8, 6); // PG1926
```

### [shuffle](http://php.net/shuffle)
Dizi içerisindeki verileri karıştırır. Değerin anahtarları bilgileri değişir.
```php
$dizi = array("php","python","html","css","javascript","vueJs");

shuffle($dizi);
var_dump($dizi);
```

<hr>

#DİZİLER (Array)

PHP'de bir dizi aslında sıralı bir eşlemdir. Bir eşlem, değerleri anahtarlarla ilişkilendiren bir veri türüdür. Bu veri türü farklı kullanım amaçları için en iyilenebilir; bir dizi, bir yöneysel liste, bir isim-değer çiftleri tablosu, bir sözlük, bir nesne listesi, yığıt, kuyruk ve daha bir sürü başka şey olarak ele alınabilir. Dizilerin değerleri, ağaçlar, diziler ve hatta çok boyutlu diziler bile olabilir.

Tüm bu veri yapılarının açıklanması bu kılavuzun amacını aşar. Fakat, en azından her biri için birer örnek verilebilir. Bu konuda daha fazla bilgi edinmek için bu konuyla ilgili olarak yayımlanmış eserleri inceleyiniz.

Bir dizinin array() ile belirtilmesi ¶
Bir dizi array() işlevi kullanılarak belirtilebilir. Değiştirge olarak, birbirlerinden virgüllerle ayrılmış çok sayıda anahtar => değer çifti alabilir.

array(
anahtar  => değer,
anahtar2 => değer2,
anahtar3 => değer3,
...
)
Son dizi elemanından sonraki virgül seçimliktir ve konmayabilir. Bu genellikle tek satırlık dizilerde yapılır. Yani, array(1, 2, ) yerine array(1, 2) yazmak tercih edilir. Diğer taraftan, çok satırlı dizilerde yeni elemanların sona eklenmesini kolaylaştırdığından sondaki virgülün konulması tercih edilir.

###PHP 5.4 ve sonrasında ayrıca, array() yerine [] kullanan kısa dizi sözdizimini de kullanabilirsiniz.
```php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// PHP 5.4 ve sonrası
$array = [
    "foo" => "bar",
    "bar" => "foo",
];


$dizi = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($dizi);
```
```php
Anahtarsız indisli diziler

$dizi = array("foo", "bar", "hello", "world");
var_dump($dizi);
```
array(4) { [0]=> string(3) "foo" [1]=> string(3) "bar" [2]=> string(5) "hello" [3]=> string(5) "world" }

###Tüm elemanlar için birer anahtar belirtilmeyebilir
```php
$dizi = array(
    "a",
    "b",
    6 => "c",
    "d",
);
var_dump($dizi);
```

###Dizi elemenlarına erişim
```php
$dizi = array(
    "foo" => "bar",
    42    => 24,
    "çok" => array(
         "boyutlu" => array(
             "dizi" => "foo"
         )
    )
);

var_dump($dizi["foo"]);
var_dump($dizi[42]);
var_dump($dizi["çok"]["boyutlu"]["dizi"]);
```

###Anahtar kullanarak bir elemana yeni bir değer atamak bu elemanın değerinin değiştirilmesi demektir. Belli bir anahtar/değer çiftini silmek için unset() işlevini kullanın.
```php
$dizi = array(5 => 1, 12 => 2);
$dizi[] = 56;    // Betiğin bu noktasında bu atama
// $dizi[13] = 56; ile aynıdır

$dizi["x"] = 42; // "x" anahtarlı yeni bir eleman atar

unset($dizi[5]); // Elemanı diziden siler
unset($dizi);    // Dizinin tamamını siler

var_dump( $dizi );
```

Birde şuna göz atalım

```php
// Basit bir dizi oluşturalım.
$dizi = array(1, 2, 3, 4, 5);
var_dump($dizi);

// Şimdi bütün elemanları silelim ama dizi kalsın:
foreach ($dizi as $i => $value) {
    unset($dizi[$i]);
}
var_dump($dizi);

// Bir eleman ekleyelim (dikkat: yeni anahtar 0 değil 5 olacak!)
$dizi[] = 6;
var_dump($dizi);

// Yeniden indisleyelim:
$dizi = array_values($dizi);
$dizi[] = 7;
var_dump($dizi);
```

###Dizilerdeki istediğimiz tek veriyi silmek
```php
$a = array(1 => 'bir', 2 => 'iki', 3 => 'üç');
unset($a[2]);
/* Bu silme işlemi dizi şöyle tanımlanmış gibi sonuçlanacaktır:
   $a = array(1 => 'bir', 3 => 'üç');
   böyle DEĞİL:
   $a = array(1 => 'bir', 2 =>'üç');
*/

$b = array_values($a);
// $b artık array(0 => 'bir', 1 =>'üç') olmuştur
```

###Dizileri birleştirmek
```php

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
```


