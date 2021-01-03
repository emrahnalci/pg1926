# PHP'de Dosya sistemi komutları


###([basename](https://www.php.net/basename))
Dosya yolunun dosya ismi bileşenini döndürür

```php
$yol = "/home/httpd/html/index.php";
$dosya = basename($yol);         // $dosya => "index.php"
$dosya = basename($yol, ".php"); // $dosya => "index"
```

###([file_exists](https://www.php.net/file_exists))
file_exists — Bir dosya veya dizinin mevcut olup olmadığına bakar.

```php
$dosya = '/bir/yol/dosya.txt';

if (file_exists($dosya)) {
    echo "$dosya diye bir dosya var";
} else {
    echo "$dosya diye bir dosya yok";
}
```

###([file-get-contents](https://www.php.net/file-get-contents))
file_get_contents — Dosya içeriğinin tamamını bir dizge olarak döndürür.

```php
$homepage = file_get_contents('http://www.example.com/');
echo $homepage;
```
veya
```php
// <= PHP 5
$file = file_get_contents('./people.txt', true);
// > PHP 5
$file = file_get_contents('./people.txt', FILE_USE_INCLUDE_PATH);
```

###([file-put-contents](https://www.php.net/file-put-contents))
file_get_contents — Dosya içeriğinin tamamını bir dizge olarak döndürür.

```php
$file = 'people.txt';
// İçeriğini almak için dosyayı açalım
$içerik = file_get_contents($file);
// İçeriğe yeni bir kişi ekleyelim
$içerik .= "John Smith\n";
// İçeriği dosyaya yazalım
file_put_contents($file, $içerik);
```

###([fopen](https://www.php.net/manual/tr/function.fopen.php))
fopen — Bir dosya veya URL'yi açar.

Not: Windows platformunda dosya yolunu belirtmekte kullanılan tersbölü çizgilerini öncelemeyi unutmayın. Daha da iyisi dosya yolunu belirtmek için bölü çizgilerini kullanın. 
Örnek:

```php
$dt = fopen("c:\\dizin\\kaynak.txt", "r");
```

###([unlink](https://www.php.net/unlink))
unlink — Bir dosyayı siler.

```php
$fh = fopen('deneme.html', 'a');
fwrite($fh, '<h1>Menhaba Dünya!</h1>');
fclose($fh);

mkdir('dnmdizini', 0777);

unlink('deneme.html');
unlink('dnmdizini');
```

###([rename](https://www.php.net/rename))
rename — Bir dosya veya dizinin ismini değiştirir

rename ( string $eski_isim , string $yeni_isim [, resource $bağlam ] ) : bool

```php
rename("/tmp/tmp_file.txt", "/home/user/login/docs/my_file.txt");
```





