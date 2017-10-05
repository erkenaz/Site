<nav class="navbar navbar-default navbar-fixed-top" role="navigation" <?php if($nav!=1) echo 'style="background: #fff"'; ?>>
  <div class="navbar-inner">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="lang-switcher"><a href="?lang=<?php echo $lang;?>"><?php echo $lang;?></a></div>
            </div>
            <a class="navbar-brand" href="main.php"><img src="img/logo1.png" width="100px"></a>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
    <?php       if($_SESSION['lang']=='kk') echo '
              <ul class="nav navbar-nav navbar-left">
                <li><a href="index.php">Басты бет</a></li>
                <li><a href="main.php">'.$name.'</a></li>
                <li><a href="reserve.php">Брондау</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="firstRight"><a href="service.php">Қызмет көрсету</a></li>
                <li class="secondRight"><a href="gallery.php">Галерея</a></li>
                <li class="secondRight"><a href="contact.php">Байланысу</a></li>
              </ul>';
                else echo '<ul class="nav navbar-nav navbar-left">
                <li><a href="index.php">Главная</a></li>
                <li><a href="main.php">'.$name.'</a></li>
                <li><a href="service.php">Услуги</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="firstRight"><a href="reserve.php">Бронирование</a></li>
                <li class="secondRight"><a href="gallery.php">Галерея</a></li>
                <li class="secondRight"><a href="contact.php">Связаться</a></li>
              </ul>';
    ?>
            </div><!-- /.navbar-collapse -->
        </div>
    </div>
</nav>