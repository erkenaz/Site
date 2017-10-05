<?php
session_start();
$_SESSION['gostnica_id'] = 1;
$_SESSION['lang'] = 'kk';
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Алты Алаш</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="http://allfont.ru/allfont.css?fonts=taurus-normal" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="container">
          <div class="row text-center">
              <br><br><br>
              <img src="img/logo.png" style="width: 120px"><br><br>
          </div>
          <div class="row">
              <div class="col-sm-4 text-center">
                  <img src="img/on.png" class="ramHotel">
                      <div class="box1">
                          <div class="box2">
                              <a href="#"><img src="img/hotel.png" style="width: 100%"></a>
                          </div>
                          <div  class="hotelName">
                              <a href="main.php?gid=1">Алты Алаш 1</a>
                          </div>
                      </div>
                  <img src="img/under.png" class="ramHotel">
              </div>
              <div class="col-sm-4 text-center">
                  <img src="img/on.png" class="ramHotel">
                  <div class="box1">
                      <div class="box2">
                          <a href="#"><img src="img/hotel.png" style="width: 100%"></a>
                      </div>
                      <div  class="hotelName">
                          <a href="main.php?gid=2">Алты Алаш 2</a>
                      </div>
                  </div>
                  <img src="img/under.png" class="ramHotel">
              </div>
              <div class="col-sm-4 text-center">
                  <img src="img/on.png" class="ramHotel">
                  <div class="box1">
                      <div class="box2">
                          <a href="#"><img src="img/hotel.png" style="width: 100%"></a>
                      </div>
                      <div  class="hotelName">
                          <a href="main.php?gid=3">Рахат</a>
                      </div>
                  </div>
                  <img src="img/under.png" class="ramHotel">
              </div>
          </div>
          <div class="row endPage">
              <div class="col-sm-6 text-center">
                  Мекен-жайымыз: Жетісай қ. Әуезов көшесі, 29 А<br>
                  Наш адрес: г Жетысай, ул. Ауэзова, 29 А
              </div>
              <div class="col-sm-6 text-center">
                  Call center: +7 (727) 123-45-67
              </div>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>