<?php

function connect_db(){
			$mysqli_function = new mysqli("srv-pleskdb16.ps.kz:3306","oppma_alashsite","Qxen10&8cYsw6*38","oppmakta_alashsite");
			return $mysqli_function;
		}

session_start();  

if(isset($_GET['lang'])) $_SESSION['lang'] = $_GET['lang']; 
if($_SESSION['lang'] == 'kk') $lang = 'ru';
if($_SESSION['lang'] == 'ru') $lang = 'kk';

$mysqli = connect_db();

$result = $mysqli->query ("
				SELECT name, description, admin, tel, email, address
                FROM hotels
                WHERE gid={$_SESSION['gostinica_id']}
				");
function showService($serviceid){
    $mysqli = connect_db();
    $services = $mysqli->query ("
				SELECT id, serviceName, serviceDesc, serviceCat, serviceWhy
                FROM services
                WHERE serviceid='$serviceid' AND lang='{$_SESSION['lang']}'
				");
    $serrow = $services->fetch_assoc();
		do{
			echo '<h3>'.$serrow['serviceName'].'</h3>';
            echo "<p>&nbsp;".$serrow['serviceDesc']."<br>";
            echo $serrow['serviceCat']."<br>";
            echo $serrow['serviceWhy']."</p>";
            echo '<div class="text-center">********************<text class="hidden-xs">**********</text></div>';
		}
		while($serrow = $services->fetch_assoc());
    
}
$rows=$result->fetch_assoc();
$name = $rows['name'];
include "head.php";
    include "navbar.php";
    include "pages/service.php";
    include "footer.php";
?>