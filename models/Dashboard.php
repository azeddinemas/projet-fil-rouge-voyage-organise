<?php
    class Dashboard extends DB {

        
        public static function getUser() {
            $sql=self::connections()->query("SELECT * FROM users");
            return $sql->rowCount();
        }
        public static function getReserv() {
            $sql=self::connections()->query("SELECT * FROM reserve");
            return $sql->rowCount();
        }
        public static function getProduct() {
            $sql=self::connections()->query("SELECT * FROM product");
            return $sql->rowCount();
        }
    }
?>