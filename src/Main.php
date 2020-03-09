<?php

namespace MainPHP\src ;

use MainPHP\Tools\Router ;
use MainPHP\Tools\Session ;

class Main implements EventWindowInterface {

    private $router ;

    public function __construct(
        Router $router
    ) {

        $this->router = $router ;

        # first render
        $this->router->get('home') ;
    }

    public function getRouter(): Router {

        return $this->router ;
    }

    /**
     * @see EventWindowInterface
     */
    public function onClose(): boolean {

        # clean workspace here : clean cache , free memory ...

        # return is authorize close window
        return true ;
    }

    /**
     * @see EventWindowInterface
     */
    public function onActivate(): Render {

        # for MacOS re-create window because dock icon has been clicked

        $this->router->get('home') ;
    }

}