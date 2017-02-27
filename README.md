# PHP4LoggerApache
Bundle for logger Object for Symfony2 
```shell
 ____  _           _  _   _                                   __            
|  _ \| |__  _ __ | || | | |    ___   __ _  __ _  ___ _ __   / _| ___  _ __ 
| |_) | '_ \| '_ \| || |_| |   / _ \ / _` |/ _` |/ _ \ '__| | |_ / _ \| '__|
|  __/| | | | |_) |__   _| |__| (_) | (_| | (_| |  __/ |    |  _| (_) | |   
|_|   |_| |_| .__/   |_| |_____\___/ \__, |\__, |\___|_|    |_|  \___/|_|   
            |_|                      |___/ |___/                            
 ____                   __                     _           
/ ___| _   _ _ __ ___  / _| ___  _ __  _   _  | |__  _   _ 
\___ \| | | | '_ ` _ \| |_ / _ \| '_ \| | | | | '_ \| | | |
 ___) | |_| | | | | | |  _| (_) | | | | |_| | | |_) | |_| |
|____/ \__, |_| |_| |_|_|  \___/|_| |_|\__, | |_.__/ \__, |
       |___/                           |___/         |___/ 
 ____  _                 _____ ____             
|  _ \| | __ _ _ __   __|_   _|  _ \  _____   __
| |_) | |/ _` | '_ \ / _ \| | | | | |/ _ \ \ / /
|  __/| | (_| | | | |  __/| | | |_| |  __/\ V / 
|_|   |_|\__,_|_| |_|\___||_| |____/ \___| \_/  
```


How to install ?
----------------

Just add this bundle with  : 

```js
composer require uga/php4logger-bundle
```
Enable it in the Kernel

```php
new uga\Php4LoggerApacheBundle\ugaPhp4LoggerApacheBundle(),
```

How to make it  ?
------------

In your controller:
```php
        $em = $this->getDoctrine()->getEntityManager() ;  // Object 
        $logger = $this->container->get('uga_php4_logger_apache')->getLogger() ; 
        $logger->info($em); // info
        $logger->error($em); // error
        $logger->warn($em); // warning
        }

```

Result with color in terminal 
-------------------------
```shell
tail -f /tmp/error.log |
sed -e 's/\(.*INFO.*\)/\o033[36m\0/' \
    -e 's/\(.*ERROR.*\)/\o033[31m\0/' \
    -e 's/\(.*WARN.*\)/\o033[33m\0/'

```

Demo 
----
<img src="https://github.com/nfouka/PHP4LoggerApache/blob/master/demo.png?raw=true" />


Information:
------------

* Programmer site : 
* Web Site  : https://logging.apache.org/log4php/quickstart.html


Contact Me
----------
Nadir Fouka < nadir@fouka.ovh > 
* Web Developer Grenoble Alpes University 2017
* Data Scientist Planet@Dev
