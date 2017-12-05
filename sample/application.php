<?php
namespace OCA\nameSpace\AppInfo;

use \OCP\AppFramework\App;
use \OCA\appName\Controller\PageController;

class Application extends App {
    public function __construct(array $urlParams=array()){
        parent::__construct('appName', $urlParams);

        $container = $this->getContainer();
        $container->registerService('PageController', function($c) {
            return new PageController(
                $c->query('AppName'),
                $c->query('Request')
            );
        });
    }
}