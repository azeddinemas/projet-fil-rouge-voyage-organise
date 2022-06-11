<?php

    class HomeController {
        public function index($pages){
            include ('views/'.$pages.'.php');
        }
    }

?>