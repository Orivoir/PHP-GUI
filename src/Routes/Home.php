<?php

namespace MainPHP\src\Routes ;

use MainPHP\Tools\RouterAnnotations ;
use MainPHP\Tools\Render ;
use MainPHP\Tools\Session ;

/**
 * @Route("/" , methods={"GET"} , name="home" )
 */
class Home {

    private $render ;
    private $session ;

    public function __construct(
        Render $render ,
        Session $session
    ) {

        $this->render = $render ;
        $this->session = $session ;

        $this->render->load('index.html.twig' , [
            "route" => "home"
        ] ) ;

    }

    public function getRender(): Render {

        return $this->render ;
    }

    public function getSession(): Session {

        return $this->session ;
    }

}