<?php

function connect_db(){
			$mysqli_function = new mysqli("srv-pleskdb16.ps.kz:3306","oppma_alashsite","Qxen10&8cYsw6*38","oppmakta_alashsite");
			return $mysqli_function;
		}

session_start();  

if(isset($_GET['lang'])) $_SESSION['lang'] = $_GET['lang']; 
if($_SESSION['lang'] == 'kk') $lang = 'ru';
if($_SESSION['lang'] == 'ru') $lang = 'kk';

$galjs=1;

$mysqli = connect_db();

$result = $mysqli->query ("
				SELECT name, description, admin, tel, email, address
                FROM hotels
                WHERE gid={$_SESSION['gostinica_id']}
				");
$rows=$result->fetch_assoc();
$name = $rows['name'];

function showGalleria(){
    $galleriaid=0;
    $vision='none';
    if(isset($_GET['galid'])) $galleriaid=$_GET['galid'];
    if($galleriaid!=0) $vision='block';
    $punktg = connect_db();
    $galHead = $punktg->query("
                        SELECT punktName
                        FROM galleriaPunkts
                        WHERE punktId=$galleriaid
                        ");
    $galhead = $galHead->fetch_assoc();

    $galimage = $punktg->query("
                            SELECT image
                            FROM galleriaImages
                            WHERE galId=$galleriaid
                            ");
    $galimages = $galimage->fetch_assoc();
    
    echo '<div id="parent_popup" style="display: '.$vision.'">
          <div id="popup">
          <div class="content">
            <h1 class="head-gal">'.$galhead['punktName'].'</h1>
            <div id="galleria">';
    
    do{
        echo '<a href="'.$galimages['image'].'">
                  <img src="'.$galimages['image'].'" style="height: 40px">
              </a>';
    }
    while($galimages = $galimage->fetch_assoc());
    
    echo '</div>
                  <button type="button" class="btn btn-lg none-gal" onclick="document.getElementById(\'parent_popup\').style.display=\'none\';">
                    <span class="glyphicon glyphicon-remove">
                    </span>
                  </button>
            </div>';
}

include "head.php";
    include "navbar.php";
    include "pages/reserve.php";
    include "footer.php";

if(isset($_POST)){
    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $notes = $_POST['notes'];
    $gid = $_POST['gid'];
    $otdata = $_POST['otdata'];
    $ottime = $_POST['ottime'];
    $dodata = $_POST['dodata'];
    $dotime = $_POST['dotime'];
    $luxe = $_POST['luxe'];
    $halfluxe = $_POST['halfluxe'];
    $adult = $_POST['adult'];
    $childs = $_POST['childs'];
    echo file_get_contents('http://alash1.bnm.kz/api/book?gid='.$gid.'&fio='.$fio.'&phones='.$phone.'&notes='.$notes.'&otdata='.$otdata.'&ottime='.$ottime.'&dodata='.$dodata.'&dotime='.$dotime.'&luxe='.$luxe.'&halfluxe='.$halfluxe.'&childs='.$childs.'&adult='.$adult);
}

?>