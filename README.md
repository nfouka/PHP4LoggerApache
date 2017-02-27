# PHP4LoggerApache
Bundle for logger Object for Symfony2 


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
