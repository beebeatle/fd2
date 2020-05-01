<?php
namespace Phppot;
	

session_start();	


if(!empty($_POST["meal_description"])){

    require_once ("./class/Meal.php");
    $meal = new Meal();

	$meal->addMeal($_POST["meal_description"]);
	include "./view/added.php";	

} 
include "./view/form-add.php";	


include "./view/footer.php";	

?>