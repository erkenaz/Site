<?php

function connect_db(){
			$mysqli_function = new mysqli("srv-pleskdb16.ps.kz:3306","oppma_alashsite","Qxen10&8cYsw6*38","oppmakta_alashsite");
			return $mysqli_function;
		}

session_start(); 
 
if(isset($_GET['gid'])) $_SESSION['gostinica_id'] = (int)$_GET['gid']; 



if(isset($_GET['lang'])) $_SESSION['lang'] = $_GET['lang']; 
if($_SESSION['lang'] == 'kk') $lang = 'ru';
if($_SESSION['lang'] == 'ru') $lang = 'kk';

$mysqli = connect_db();

$result = $mysqli->query ("
				SELECT name, description, admin, tel, email, address
                FROM hotels
                WHERE gid={$_SESSION['gostinica_id']} AND lang='{$_SESSION['lang']}'
				");
$rows=$result->fetch_assoc();
$name = $rows['name'];
function showDesc(){
    $alash = connect_db();
    $alashHead = $alash->query("
                                SELECT description
                                FROM hotels
                                WHERE gid='0'
    ");
    $alashrows=$alashHead->fetch_assoc();
    echo $alashrows['description'];
}
function showImg(){
    $image=connect_db();
    $images=$image->query("
                            SELECT image
                            FROM galleriaImages
                            WHERE galId={$_SESSION['gostinica_id']}
                            ");
    $imgrows=$images->fetch_assoc();
    for($i=0;$i<4;$i++){
        echo '<img src="'.$imgrows['image'].'" class="main-img">';
        $imgrows=$images->fetch_assoc();
    }
}
function showReviews(){
    $review=connect_db();
    $reviews=$review->query("
                            SELECT name, text, date, image
                            FROM reviews
                            WHERE lang='{$_SESSION['lang']}'
                            ");
    $revrows=$reviews->fetch_assoc();
    $act='active';
    do{
        echo '<div class="item '.$act.'">
                    <div class="caption">
                        <div class="row">
                            <div class="col-sm-4 carousel-div-img">
                                <img src="'.$revrows['image'].'" class="carousel-img">
                            </div>
                            <div class="col-sm-8 carousel-div-text">
                                <h3 class="text-center">'.$revrows['name'].'</h3>
                                <p>'.$revrows['text'].'  <br>'.$revrows['date'].'</p>
                            </div>
                        </div>
                    </div>
                </div>';
        $act=' ';
    }
    while($revrows=$reviews->fetch_assoc());
}
include "head.php";
$nav=1;
echo '<div style="position: relative">';
    include "navbar.php";
    include "pages/main.php";
    include "footer.php";
?>