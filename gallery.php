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

function showGalPunkts(){
    $punkt = connect_db();
    $punkts = $punkt->query("
                SELECT punktName,punktId
                FROM galleriaPunkts
                WHERE  lang='{$_SESSION['lang']}'
    ");
    $punktrow = $punkts->fetch_assoc();
		do{
            echo '<div class="col-xs-12 col-sm-6 col-md-4  text-center gal-open" id="'.$punktrow['punktId'].'">';
              echo '<h2>'.$punktrow['punktName'].'</h2>';
              echo '<div class="open-img">';
              $galimage = $punkt->query("
                        SELECT image
                        FROM galleriaImages
                        WHERE galId={$punktrow['punktId']}
                        ");
              $galimages = $galimage->fetch_assoc();    
              echo '<img src="'.$galimages['image'].'" class="first-layer-img">';
              $galimages = $galimage->fetch_assoc(); 
              echo '<img src="'.$galimages['image'].'" class="second-layer-img">';
              $galimages = $galimage->fetch_assoc(); 
              echo '<img src="'.$galimages['image'].'" class="third-layer-img">';
              echo '</div>';
                $res = $punkt->query("select count(id) as count from galleriaImages where galId={$punktrow['punktId']}"); 
                $data = $res->fetch_assoc(); 
                echo ' 
              <span>+'.$data['count'].' <img src="img/photo.png"> &nbsp; +0 <img src="img/video.png"></span>
          </div>';
        }
		while($punktrow = $punkts->fetch_assoc());
}

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
    include "pages/gallery.php";
    include "footer.php";
?>