<?php
// namespace App\backend\model;

require_once("config.php");


class Data{

    public function __construct(){

    }

    public static function getById(){
        global $conn;
        $query = $conn->prepare("SELECT * FROM contents_content");
        $query->execute();
        $result = $query->fetchall();
        return $result;
    }

    public static function getData(){
        global $conn;
        $query = $conn->prepare("SELECT * FROM contents_content");
        $query->execute();
        $result = $query->fetchall();
        return $result;
    }

    public static function insertData(){
        global $conn;
        if(isset($_POST['add']))
        {  
            $data   = $_POST['data'];
            $data_1 = $_POST['data_1'];
            $sql = "INSERT INTO contents_content (data, data_1) VALUES ('$data', '$data_1')";
            if ($conn->query($sql)) {
                // echo "<script type= 'text/javascript'>alert('Data successfully Inserted.');</script>";
                    header('location: /cp');
                }
                else{
                echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
                }
        }
    }


}	

