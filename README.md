# config
A configuration component

###Usage:

Install it via Composer:
```
composer require coco-soft/config

```

```php
<?php

//require the composer autoload.php file


use coco\config\Config;

//set config file path
Config::setConfigDir('/path/to/config/dir');

//if get charset in app.php return 
$charset = Config::get('app.charset');

//or use a helper function
$charset = config('app.charset');

// the second parameter is if throw a exception
// when this config is not defined

$charset = config('app.charset', true);
```




