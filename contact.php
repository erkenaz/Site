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
$rows=$result->fetch_assoc();
$name = $rows['name'];

function showAlash(){
    $alash = connect_db();
    $alashHead = $alash->query("
                                SELECT name, description, admin, tel, email, photo
                                FROM hotels
                                WHERE gid='0' AND lang='{$_SESSION['lang']}'
    ");
    $alashrows=$alashHead->fetch_assoc();
    echo '<div class="col-sm-4">
              <img src="'.$alashrows['photo'].'" width="100%">
          </div>
          <div class="col-sm-4">';
    echo '<h3>"'.$alashrows['name'].'"</h3>';
    echo 'Директор: '.$alashrows['admin'];
    echo '<br>Менеджер: '.$alashrows['admin'].'<br><br>';
    if($_SESSION['lang']=='kk') {
    echo 'Сұрақтар бойынша байланыс телефоны:
          <br>';}
    else echo 'Контактный телефон по вопросам:
          <br>';
    echo $alashrows['tel'];
    if($_SESSION['lang']=='kk') {
    echo '<br>Электронды почта:<br>';}
    else echo '<br>Электронная почта:<br>';
    echo $alashrows['email'].'</div>';
}

function showHosts(){
    $host = connect_db();
    $hosts = $host->query("
                                SELECT name, description, admin, tel, email, photo, address, addrImg
                                FROM hotels
                                WHERE gid <> '0'  AND lang='{$_SESSION['lang']}'
    ");
    $hostsrows=$hosts->fetch_assoc();
    do {
        echo '<div class="hosts">
              <div class="row">
                  <div class="host-brand text-center">
                      <img src="img/logo1.png">
                  </div>
                  <div class="col-sm-12 col-md-6">
                      <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                              <img src="'.$hostsrows['photo'].'" width="90%">
                              <h3>'.$hostsrows['admin'].'</h3>
                             
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">';
                            if($_SESSION['lang']=='ru') echo 'Главный администратор гостиницы';
                            echo ' <h3>"'.$hostsrows['name'].'"</h3>';
                            if($_SESSION['lang']=='kk') echo 'қонақ үйінің бас администраторы.';
                            echo '<br>
                              <br>Телефон:
                              <br>'.$hostsrows['tel'].'<br>
                              <br>E-mail:
                              <br>'.$hostsrows['email'].'
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                      <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                              Телефон:
                              <br>'.$hostsrows['tel'].'<br>
                              <br>';
                            if($_SESSION['lang']=='kk') {
                            echo 'Мекен-жайымыз:';}
                            else echo 'Наш адрес:';
                            echo '<br>
                              '.$hostsrows['address'].'
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                              <img src="'.$hostsrows['addrImg'].'" width="100%">
                          </div>
                      </div>
                  </div>
              </div>
          </div>';
    }
    while($hostsrows=$hosts->fetch_assoc());
}

include "head.php";
    include "navbar.php";
    include "pages/contact.php";
    include "footer.php";
?>