
RTL ParseDown
=====
use azrast if you need markdown in RTL 

Quick start
-----------
composer require mimj/azrast

``` php

$parsedown = new RtlIt();

echo $parsedown->text("از راست بنویس

    var foo = function (bar) {
      return bar++;
    };

    console.log(foo(5));
    ");
```

or in laravel you can use Laravel's Facade System:

add  **Mimj\AzRast\RtlParsdownProvider::class,** in config/app.php

and :

``` php


echo \Mimj\AzRast\Facades\RtlIt::text("از راست بنویس

    var foo = function (bar) {
      return bar++;
    };

    console.log(foo(5));
    ");
```



