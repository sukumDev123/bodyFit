<?php
    Class menu{
        public function select($conn,$tableName){
            $select = "SELECT * FROM ".$tableName;
            $mysqli_1 = mysqli_query($conn,$select);
            return $mysqli_1;

        }
        public function insert($conn,$str){
            $insert = "INSERT INTO ".$str;
            $my = mysqli_query($conn,$insert);
        }
        public function selectA($conn,$str,$a){
            $select = "SELECT ".$a." FROM ".$str;
            $mysqli_1 = mysqli_query($conn,$select);
            return $mysqli_1;
        }
    }
    
    
   