# PHP'de Oturum işlemleri

## Ama önce biraz dur bilmemiz gereken ufak bir şey var!
### include
include deyimi belirtilen dosyayı betiğe ekler ve içeriğini değerlendirir.

### include_once
include_once deyimi, bir betiğin çalışması esnasında aynı dosyanın bir kereden fazla dahil edilme ihtimaline karşı, bu dosyanın yalnızca bir kere dahil edileceğinden emin olunmak istenirse kullanılmalıdır.

### require
require deyimi bir başarısızlıkta ölümcül bir hata vermesi dışında include deyimi ile aynıdır.

### require_once
require_once deyimi, dosyayı evvelce dahil edilmişse tekrar dahil etmemesi dışında require deyimiyle aynıdır.

<hr>

PHP'deki oturum desteği, belli bir veriyi sonraki erişimlerden korumak için kullanılır. Böylece daha özelleştirilmiş uygulamalar oluşturabilir ve sitenizin çekiciliğini arttırabilirsiniz.

Sitenize gelen her ziyaretçiye eşsiz bir kimlik atanır, buna oturum kimliği diyoruz. Bu kimlik istemci tarafında bir çerezde ya da doğrudan URL üzerinde saklanır.

Oturum desteği, $_SESSION dizisindeki istekler arasında veri saklamanızı sağlar. PHP özdevinimli olarak sizin tarafınızdan (session_start() üzerinden örtük olarak ya da session_register() üzerinden doğrudan) veya sitenize bir ziyaretçi geldiğinde karşı taraftan (session.auto_start 1 ise) istekle beraber oturuma özgü bir oturum kimliği gönderilip gönderilmediğine bakar. Gönderilmişse evvelce o oturum adına saklanmış ortam yeniden oluşturulur.


###([session_start](https://www.php.net/manual/tr/function.session-start.php))
session_start — Oturum verisini ilklendirir

```php
session_start();

echo '1. sayfaya hoş geldiniz';

$_SESSION['renk']   = 'yeşil';
$_SESSION['hayvan'] = 'kedi';
$_SESSION['zaman']  = date("Y-m-d H:i:s");

// Oturum verisi kabul edilmişse çalışır
echo '<br /><a href="sayfa2.php">2. Sayfa</a>';

// Veya gerekirse oturum kimliği üzerinden de aktarılabilir
echo '<br /><a href="sayfa2.php?' . SID . '">2. Sayfa</a>';
```

sayfa1.php gösterildikten sonra, ikinci sayfa sayfa2.php oturum verisini sihirli bir şekilde içerecektir. SID sabiti dahil, oturum kimliklerinin yayını hakkında bilgi edinmek için oturum eklentisini okuyun.

```php
// sayfa2.php
session_start();

echo '2. sayfaya hoş geldiniz<br />';

echo $_SESSION['renk'];     // yeşil
echo $_SESSION['hayvan'];   // kedi
echo date('Y m d H:i:s', $_SESSION['zaman']);

// sayfa1.php'de yaptığımız gibi burada da SID kullanabilirsiniz
echo '<br /><a href="sayfa1.php">1. Sayfa</a>';
```



###([session_destroy](https://www.php.net/session-destroy))
session_destroy — Bir oturumla ilişkilendirilmiş tüm veriyi yok eder.

session_destroy() işlevi geçerli oturumla ilişkilendirilmiş tüm veriyi yok eder. Oturumla ilişkilendirilmiş küresel değişkenleri ve oturum çerezini tanımsız yapmaz. Oturum değişkenlerini tekrar kullanmak için session_start() çağrısı yapılmalıdır.

```php
// Oturumu ilklendirelim.
// session_name("birisim") kullanacaksanız tam sırasıdır!
session_start();

// Oturum değişkenlerinin tamamını tanımsız yapalım.
$_SESSION = array();

// Oturum öldürülmek istenirse oturum çerezinin de silinmesi gerekir.
// Dikkat: Bu sadece oturum verisini değil, oturumu da yok edecektir!
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Son olarak oturumu yok ediyoruz.
session_destroy();
```

