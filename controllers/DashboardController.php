<?php

    class DashboardController {
        public function rowUser(){
            $row = Dashboard::getUser();
            return $row;
        }

        public function rowProduct(){
            $row = Dashboard::getProduct();
            return $row;
        }

        public function rowReserv(){
            $row = Dashboard::getReserv();
            return $row;
        }

    }
    
?>