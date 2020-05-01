<?php
namespace Phppot;


class Meal
{

	
	    function __construct()
	{
        $this->conn = $this->getConnection();
    }

	    public function getConnection()
    {		
		   require_once "./config/config.php";
        $conn = new \mysqli($servername, $username, $password, $dbname);
        
        if (mysqli_connect_errno()) {
            trigger_error("Problem with connecting to database.");
        }
        
        $conn->set_charset("utf8");
        return $conn;
    }

    
    public function addMeal($mealDescripton) {

       $user_id=$_SESSION["userId"];     	
		$sql="
	INSERT INTO 
		`meals` ( `description`, `user_id`) 
	VALUES 
		('".$mealDescripton."','".$user_id."')
	";

echo $sql;

    $stmt = $this->conn->prepare($sql); 
	$stmt->execute();

    }
}