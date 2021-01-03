#PHP'de tarih saat işlemleri

###([date](https://www.php.net/manual/tr/function.date.php))

zaman_damgası değiştirgesi ile belirtilen zamanı ya da zaman damgası değiştirgesi kullanılmamışsa yerel zamanı, belirtilen biçime göre biçimlendirerek döndürür. Başka bir deyişle, zaman_damgası değiştirgesini belirtmek isteğe bağlıdır ve varsayılan değeri time() işlevinin değeridir.


###Değiştirgeler
Biçim: Çıktılanan zamanın string türünden biçimi. Biçimlendirme seçenekleri için aşağıya bakınız. Ayrıca burada kullanılabilecek önceden tanımlanmış çeşitli tarih sabitleri vardır. Örneğin, DATE_RSS sabiti 'D, d M Y H:i:s' biçemini içerir.


| biçim karakteri     | Açıklama                                                                                                                                                          | Örnek sonuç                                      |
|---------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------|
| Gün                 | ---                                                                                                                                                               | ---                                              |
| d                   | Ay günlerinin sıfır dolgulu iki haneli gösterimi                                                                                                                  | 01'den 31'e                                      |
| D                   | Ay günlerinin üç harfli metinsel gösterimi                                                                                                                        | Pzt'den Paz'a                                    |
| j                   | Ay günlerinin sıfır dolgusuz gösterimi                                                                                                                            | 1'den 31'e                                       |
| l (küçük 'L' harfi) | Hafta günlerinin tam metinsel gösterimi                                                                                                                           | Pazar'dan Cumartesi'ye                           |
| N                   | Hafta günlerinin ISO-8601 standardında sayısal gösterimi (PHP 5.1.0'da eklenmiştir)                                                                               | 1'den (Pazartesi için) 7'ye (Pazar için)         |
| S                   | Ay günleri için 2 karakterli İngilizce sıralama ekleri                                                                                                            | st, nd, rd ya da th. j ile uyumlu çalışmaktadır. |
| w                   | Hafta günlerinin sayısal gösterimi                                                                                                                                | 0'dan (Pazar için) 6'ya (Cumartesi için)         |
| z                   | Yılın günleri (0'dan başlar)                                                                                                                                      | 0'dan 365'e                                      |
|                     |                                                                                                                                                                   |                                                  |
|        Hafta        | ---                                                                                                                                                               | ---                                              |
| W                   | ISO-8601 standartına göre yılın hafta numarası, hafta başlangıcı Pazartesi'dir  (PHP 4.1.0 sürümüyle eklenmiştir)                                                 | Örneğin: 42 (Yılın 42'inci haftası)              |
|                     |                                                                                                                                                                   |                                                  |
| Ay                  | ---                                                                                                                                                               | ---                                              |
| F                   | Ayın tam metinsel gösterimi, Ocak ya da Mart gibi                                                                                                                 | January'den December'a                           |
| m                   | Ayın sıfır dolgulu sayısal gösterimi                                                                                                                              | 01'den 12'ye                                     |
| M                   | Ayın üç karakterli, metinsel kısa gösterimi                                                                                                                       | Jan'dan Dec'e kadar                              |
| n                   | Ayın sıfır dolgusuz sayısal gösterimi                                                                                                                             | 1'den 12'ye kadar                                |
| t                   | Belirtilen ayın gün sayısı                                                                                                                                        | 28'den 31'e                                      |
|                     |                                                                                                                                                                   |                                                  |
| Yıl                 | ---                                                                                                                                                               | ---                                              |
| L                   | Artık yıl olduğunda                                                                                                                                               | Eğer artık yılsa 1, değilse 0.                   |
| o                   | ISO-8601 standardı yıl numarası. ISO hafta numaralarının (W) ait olduğu yılın  gösterilmesi dışında Y ile aynı değere sahiptir. (PHP 5.1.0 sürümünde eklenmiştir) | Örnekler: 1999 ya da 2003 gibi                   |
| Y                   | Yılın 4 haneli sayısal, tam gösterimi                                                                                                                             | Örnekler: 1999 ya da 2003 gibi                   |
| y                   | Yılın iki haneli gösterimi                                                                                                                                        | Örnekler: 99 ya da 03 gibi                       |
|                     |                                                                                                                                                                   |                                                  |
| Saat                | ---                                                                                                                                                               | ---                                              |
| a                   | Küçük harfli öğleden önce ve öğleden sonra                                                                                                                        | am ya da pm                                      |
| A                   | Büyük harfli öğleden önce ve öğleden sonra                                                                                                                        | AM ya da PM                                      |
| B                   | Swatch İnternet saati                                                                                                                                             | 000'dan 999'a                                    |
| g                   | Saatin, 12-saatlik sıfır dolgusuz gösterimi                                                                                                                       | 1'den 12'ye                                      |
| G                   | Saatin, 24-saatlik sıfır dolgusuz gösterimi                                                                                                                       | 0'dan 23'e                                       |
| h                   | Saatin, 12-saatlik sıfır dolgulu gösterimi                                                                                                                        | 01'den 12'ye                                     |
| H                   | Saatin, 24-saatlik sıfır dolgulu gösterimi                                                                                                                        | 00'dan 23'e                                      |
| i                   | Sıfır dolgulu dakika gösterimi                                                                                                                                    | 00'dan 23'e                                      |
| i                   | Sıfır dolgulu dakika gösterimi                                                                                                                                    | 00 ile 59 arasında                               |
| s                   | Sıfır dolgulu saniye gösterimi                                                                                                                                    | 00 ile 59 arasında                               |
| u                   | Mikrosaniye (PHP 5.2.2 sürümüyle eklenmiştir)                                                                                                                     | Örneğin: 654321                                  |
|                     |                                                                                                                                                                   |                                                  |
|     Zaman dilimi    | ---                                                                                                                                                               | ---                                              |
| e                   | Zaman dilimi belirteci (PHP 5.1.0 sürümüyle eklenmiştir)                                                                                                          | Örnekler: UTC, GMT, Europe/Istanbul              |
| I (büyük ı)         | Yaz saati uygulaması var mı?                                                                                                                                      | Varsa 1, yoksa 0.                                |
| O                   | Saat olarak Greenwich zamanı (GMT) farkı                                                                                                                          | Örneğin: +0200                                   |
| P                   | Saat ve dakika olarak Greenwich zamanı (GMT) farkı  (PHP 5.1.3 sürümüyle eklenmiştir)                                                                             | Örneğin: +02:00                                  |
| T                   | Zaman dilimi kısaltması                                                                                                                                           | Örnekler: EST, EET gibi                          |
| Z                   | Saniye cinsinden saat farkı.  UTC'nin batısı daima negatif, doğusu ise daima pozitif değerlidir.                                                                  | -43200'den 50400'e                               |
|                     |                                                                                                                                                                   |                                                  |
|    Tam Tarih/Saat   | ---                                                                                                                                                               | ---                                              |
| c                   | ISO 8601 standardı tarih (PHP 5'te' eklenmiştir)                                                                                                                  | 2004-02-12T15:19:21+00:00                        |
| r                   | » RFC 2822 biçiminde tarih                                                                                                                                        | Örneğin: Thu, 21 Dec 2000 16:01:07 +0200         |
| U                   | Unix Zaman Başlangıcından (1 Ocak 1970 00:00:00 GMT) itibaren geçen saniye sayısı                                                                                 | time() işlevine bakınız |

<hr>

#Örnekler
###Örnek 1 - date() örnekleri

```php
// varsayılan zaman dilimini ayarla. PHP 5.1'den beri kullanılabilir.
date_default_timezone_set('UTC');


// Şöyle bir şey basar: Monday
echo date("l");

// Şöyle bir şey basar: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');

// Şöyle bir şey basar: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

/* biçim değiştirgesi için sabit kullanımı*/
// Şöyle bir şey basar: Mon, 15 Aug 2005 15:12:46 UTC
echo date(DATE_RFC822);

// Şöyle bir şey basar: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
```

###Örnek 2 - date() işlevinde önceleme karakterleri

```php
// Şöyle bir şey basar: Wednesday the 15th
echo date("l \\t\h\e jS");
```

###Örnek 3 - date() Biçemlemesi

```php
// Bugünün; March 10th, 2001, 5:16:18 pm olduğunu ve
// Mountain Standard Time (MST) Zaman Diliminde olduğumuzu varsayıyoruz

$bugün = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$bugün = date("m.d.y");                         // 03.10.01
$bugün = date("j, n, Y");                       // 10, 3, 2001
$bugün = date("Ymd");                           // 20010310
$bugün = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$bugün = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$bugün = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$bugün = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$bugün = date("H:i:s");                         // 17:16:18
```

#Ayrıca Bakınız

```php
echo date("YW", strtotime("2011-01-07")); // gives 201101
echo date("YW", strtotime("2011-12-31")); // gives 201152
echo date("YW", strtotime("2011-01-01")); // gives 201152 too

// Ama

echo date("oW", strtotime("2011-01-07")); // gives 201101
echo date("oW", strtotime("2011-12-31")); // gives 201152
echo date("oW", strtotime("2011-01-01")); // gives 201052 (Year is different than previous example)
```

#Son bir şey daha

```php
/*
 * Gün ekleme ve çıkarma
 */
echo date('Y-m-d H:i:s', strtotime('+3 days'));
echo date('Y-m-d H:i:s', strtotime('-3 days'));
/*
 * Hafta ekleme ve çıkarma
 */
echo date('Y-m-d H:i:s', strtotime('+3 weeks'));
echo date('Y-m-d H:i:s', strtotime('-3 weeks'));

/*
 * Ay Ekleme ve Çıkarma
 */
echo date('Y-m-d H:i:s', strtotime('+3 months'));
echo date('Y-m-d H:i:s', strtotime('-3 months'));

/*
 * Yıl Ekleme ve Çıkarma
 */
echo date('Y-m-d H:i:s', strtotime('+3 years'));
echo date('Y-m-d H:i:s', strtotime('-3 months'));

```

