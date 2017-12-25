<?php
    Class menu{
        public function selectMenus($conn){
           
            $select = "SELECT * FROM type";
            $mysqli_1 = mysqli_query($conn,$select);
            if($mysqli_1->num_rows > 0){
                $array = [];
                $i = 0;
                $numA = 0;
                while($row = $mysqli_1->fetch_assoc()) {
                    $name[$i] = $row['name_type'];
                    $id_type[$i] = $row['id_type'];
                    $i++;
                }  
                $array[0] = $name;
                $array[1] = $id_type;
                return $array; 
            }else{
                return "Empty";
            }   
        }   

        public function selectSub($value,$conn){
            //require 'conn.php';
            $select = "SELECT * FROM sub_type WHERE id_type= '".$value."' ";
            $mysqli_1 = mysqli_query($conn,$select);
            if($mysqli_1->num_rows > 0){
                $subtype = [];
                $i = 0;
                while($row = $mysqli_1->fetch_assoc()) {
                    $subtype[$i] = $row['sub_Type'];
                    $i++;
                }     
                return $subtype; 
            }else{
                return "NULL";
            }   
        }
    }
    
    
   