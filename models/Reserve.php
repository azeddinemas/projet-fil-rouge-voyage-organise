<?php
    class Reserve extends DB {

        public static function getAll(){
            $sql=self::connections()->query("SELECT * FROM reserve");
            return $sql->fetchAll();
        }

        public static function add($voyage,$nom,$prenom,$phone,$ville,$adresse){
            $sql=self::connections()->query("INSERT INTO reserve values('','$voyage','$nom','$prenom','$phone','$ville','$adresse')");
            return $sql;
        }

        public static function getOne($id){
            $sql=self::connections()->query("SELECT * FROM reserve where id ='$id'");
            return $sql->fetch();

        }

        public static function update($voyage,$nom,$prenom,$phone,$ville,$adresse,$id){
            $sql=self::connections()->query("UPDATE reserve SET id_voyage='$voyage' , nom='$nom' , prenom='$prenom' , phone='$phone' , ville='$ville' , adresse='$adresse' WHERE id='$id'");
            return $sql;
        }

        public static function delete($id){    
            $sql=self::connections()->query("DELETE FROM `reserve` WHERE id='$id'"); 
            return $sql;
        }



    }



?>