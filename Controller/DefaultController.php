<?php

namespace uga\Php4LoggerApacheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

        
    public function indexAction()
    {

        $em = "nadir fouka" ; 
        $logger = $this->container->get('uga_php4_logger_apache')->getLogger() ; 
        
        for($i=0 ; $i<50 ; $i++) {
        $logger->info($em); $logger->info($em); $logger->info($em); $logger->info($em); 
        $logger->error($em);$logger->warn($em);
        }
 
        return $this->render('ugaPhp4LoggerApacheBundle:Default:index.html.twig');
    }
}
