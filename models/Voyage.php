<?php
    class voyage extends DB{
        public $id;
        public $localisation;
        public $prix;
        public $promotion;
        public $description;


        public static function getAll(){
            $sql=self::connections()->query("SELECT * FROM product");
            return $sql->fetchAll();
        }

        public static function add($localisation,$prix,$promotion,$description,$img){
            $sql=self::connections()->query("INSERT INTO product values('','$localisation','$prix','$promotion','$description','$img')");
            return $sql;
        }

        public static function getOne($id){
            $sql=self::connections()->query("SELECT * FROM product where id ='$id'");
            return $sql->fetch();

        }

        public static function update($localisation,$prix,$promotion,$description,$img,$id){
            if($img==""){
                $sql=self::connections()->query("UPDATE product SET localisation='$localisation',prix='$prix',promotion='$promotion',description='$description' WHERE id='$id'");
                return $sql;
            }else
                $sql=self::connections()->query("UPDATE product SET localisation='$localisation',prix='$prix',promotion='$promotion',description='$description',image='$img' WHERE id='$id'");
                return $sql;
        }

        public static function delete($id){    
            $sql=self::connections()->query("DELETE FROM `product` WHERE id='$id'"); 
            return $sql;
        }
       
    }


?>