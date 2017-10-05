<footer>
              <div class="social text-center">
                  <span class="fa-stack fa-lg">
                      <i class="fa fa-circle-thin fa-stack-2x"></i>
                      <i class="fa fa-vk fa-stack-1x fa-inverse"></i>
                  </span>
                  <span class="fa-stack fa-lg">
                      <i class="fa fa-circle-thin fa-stack-2x"></i>
                      <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                  <span class="fa-stack fa-lg">
                      <i class="fa fa-circle-thin fa-stack-2x"></i>
                      <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                  </span>
              </div>
              <div class="tm text-center">
                  <img src="img/divider-line.png" height="20px" width="80%"><br>
                  <a href="http://www.tuindimedia.kz/">
                      <?php 
                      if($_SESSION['lang']=='kk') echo 'Сайтты жасаған "Туынды Медиа" компаниясы, Алматы 2016ж.'; 
                      else echo 'Разработана компанией "Туынды медиа", Алматы 2016г.';?>
                      </a>
              </div>
          </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/tcal.js"></script> 
    <script type="text/javascript" src="js/incrementing.js"></script>
    <script type="text/javascript" src="js/galleria-1.4.7.min.js"></script>
    <?php if($galjs==1) echo "<script>
    $(function() {
        // Load the classic theme
        Galleria.loadTheme('galleria.classic.min.js');

        // Initialize Galleria
        Galleria.run('#galleria');
    });
    </script>";?>
    <script type="text/javascript">
      $(function () {
            var tabContainers = $('div.tabs > div'); 
            tabContainers.hide().filter(':first').show(); 
            $('div.tabs ul.tabNavigation a').click(function () {
                tabContainers.hide(); 
                tabContainers.filter(this.hash).show(); 
                $('div.tabs ul.tabNavigation a').removeClass('selected'); 
                $(this).addClass('selected'); 
                return false;
            }).filter(':first').click();
        });
    </script>
</body>
</html>