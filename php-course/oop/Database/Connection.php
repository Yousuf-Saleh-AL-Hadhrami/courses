<?php 

namespace Database;

class Connection {

    public $host;
    public $user;
    public $pass;
    public $dbname;
    public  $connect;

    public function __construct($host , $user , $pass , $dbname){

        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname;

        try {

            $connection = mysqli_connect($host , $user , $pass , $dbname);

            echo "Connected";

            $this->connect = $connection;

            return $connection;

        } catch(\Exception $e){

            return $e->getMessage();
        }
    }


    public function insert($connection , $table , $values = []){

        for($i = 1 ; $i <= 100; $i++){

            try {
    
            $query = " INSERT INTO $table VALUES 
            (NOT NULL , $values[0]'".$i."' , '". password_hash($values[1] , PASSWORD_DEFAULT) ."', $values[2], $values[3]) ";
            mysqli_query($this->connect , $query);
    
    
            } catch(\Exception $e){
    
                echo $e->getMessage();
            }
        }
    
        if(mysqli_affected_rows($connection) > 0) {
    
            echo "You Have Inserted " . $i - 1 . " Users in Database ";
        }
    
    }


}