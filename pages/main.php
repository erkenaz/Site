<div id="carousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/noch.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/noch1.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/noch2.jpg" alt="">
                </div>
            </div>

            <a href="#carousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
                <a href="#carousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
              <div class="carousel-footer hidden-xs">
                  <div class="name-brand text-center">
                      <img src="img/logo1.png">
                  </div>
                  <div class="name">
                      <h2><?php echo $name;?></h2>
                  </div>
                  <div class="name-right">
                      <?php if($_SESSION['lang']=='kk') echo 'Біз сіздерді әрдайым жылы лебізбен қарсы аламыз';
                      else echo '<p style="margin-top: 10px">Мы всегда рады вам!</p>';
                          ?>
                  </div>
              </div>
          </div>
      </div>
      <div class="container page">
          <div class="about text-center">
              <h1><?php echo $name;?></h1>
              <p>
                  <?php echo $rows['description'];?>
              </p><br>
              <div class="row">
                  <table width=100%>
                      <tr>
                          <td><img src="img/sertificate.png" width="80%"></td>
                          <td><img src="img/certificate1.png" width="40%"></td>
                          <td><img src="img/sertificate.png" width="80%"></td>
                      </tr>
                  </table>
              </div>
                  <br><br>
                  <p><?php 
                      showDesc();
                      ?></p>
              <div class="row">
                  <div class="col-md-6">
                      <div class="main-video">
                          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/MEHiVSh1DNU" frameborder="0" allowfullscreen></iframe>
                      </div>  
                  </div>
                  <div class="col-md-6">
                      <?php showImg(); ?>
                  </div>
              </div> 
          </div>
          <div class="reviews">
              <div id="carousel1" class="carousel slide">
                  <div class="carousel-header">
                      <h2 class="text-center"><?php if($_SESSION['lang']=='kk') echo 'Біздің қонақтар';
                      else echo 'Наши гости';?></h2>
                  </div>
                <div class="carousel-inner">
                    <?php showReviews();?>
                    
                </div>

                    <a href="#carousel1" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#carousel1" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
              </div>  
          </div>
          <div class="contact">
              <h3 class="text-center"><?php if($_SESSION['lang']=='kk') {
                            echo 'Байланыс:';}
                            else echo 'Обратная связь:'; echo $title;?></h3>
              <div class="container">
                  <div class="row">
                      <div class="container">
                          <div class="col-xs-12 col-sm-6 pull-left">
                              <?php if($_SESSION['lang']=='kk') {
                            echo 'Мекен-жайымыз:';}
                            else echo 'Наш адрес:';?><br>
                              <?php echo $rows['address'];?>
                          </div>
                          <div class="col-xs-12 col-sm-6 text-right">
                              <?php if($_SESSION['lang']=='kk') {
                            echo 'Байланыс телефоны:';}
                            else echo 'Контактный телефон:';?><br>
                              <?php echo $rows['tel'];?>
                              <br>
                              Email:<br>
                              <?php echo $rows['email'];?><br>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="container">
                          <div class="col-xs-6 admin text-left">Администратор:</div>
                          <div class="col-xs-6 admin text-right"><?php echo $rows['admin'];?></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>