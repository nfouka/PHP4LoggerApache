<?php

// ____  _   _ ____  _  _   _     ___   ____  ____ _____ ____  
//|  _ \| | | |  _ \| || | | |   / _ \ / ___|/ ___| ____|  _ \ 
//| |_) | |_| | |_) | || |_| |  | | | | |  _| |  _|  _| | |_) |
//|  __/|  _  |  __/|__   _| |__| |_| | |_| | |_| | |___|  _ < 
//|_|   |_| |_|_|      |_| |_____\___/ \____|\____|_____|_| \_\                                                             
// ____  _   _ _   _ ____  _     _____   ______   __
//| __ )| | | | \ | |  _ \| |   | ____| | __ ) \ / /
//|  _ \| | | |  \| | | | | |   |  _|   |  _ \\ V / 
//| |_) | |_| | |\  | |_| | |___| |___  | |_) || |  
//|____/ \___/|_| \_|____/|_____|_____| |____/ |_|                                                    
// ____  _        _    _   _ _____ _____ ____  ____  _______     __
//|  _ \| |      / \  | \ | | ____|_   _/ __ \|  _ \| ____\ \   / /
//| |_) | |     / _ \ |  \| |  _|   | |/ / _` | | | |  _|  \ \ / / 
//|  __/| |___ / ___ \| |\  | |___  | | | (_| | |_| | |___  \ V /  
//|_|   |_____/_/   \_\_| \_|_____| |_|\ \__,_|____/|_____|  \_/   
//                                      \____/                    

/**
 * Description of Php4Logger
 *
 * @author nadir.fouka@gmail.com
 */

namespace uga\Php4LoggerApacheBundle\Logger ;

class Php4Logger {
    
    private $logger  ; 
    

    
    public function __construct() {
        \Logger::configure(__DIR__."/../Resources/config/logconfig.xml");
        $this->logger = \Logger::getLogger(__CLASS__);
    }
    
    function getLogger() {
        return $this->logger;
    }

}