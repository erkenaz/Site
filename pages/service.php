      <div class="container page" style="padding-top: 100px">
          <div class="service">
              <div class="tabs">
                  <ul class="tabNavigation">
                      <li>
                          <div class="col-xs-12 col-sm-4">
                              <a class="service-cat" href="#first"><?php if($_SESSION['lang']=='kk') echo 'Күнделікті'; else echo 'Ежедневные';?></a>
                          </div>
                      </li>
                      <li>
                          <div class="col-xs-12 col-sm-4">
                              <a class="service-cat" href="#second"><?php if($_SESSION['lang']=='kk') echo 'Арнайы'; else echo 'Специальные';?></a>
                          </div>
                      </li>
                      <li>
                          <div class="col-xs-12 col-sm-4">
                              <a class="service-cat" href="#third"><?php if($_SESSION['lang']=='kk') echo 'Тапсырыс бойынша'; else echo 'По заказу';?></a>
                          </div>
                      </li>
                  </ul>   
                  <div id="first"><br><br>
                      <div class="service-name">
                            <?php showService(1);?>
                      </div>
                  </div>
                  <div id="second"><br><br>
                      <div class="service-name">
                            <?php showService(2);?>
                      </div>
                  </div>
                  <div id="third"><br><br>
                      <div class="service-name">
                            <?php showService(3);?>
                      </div>
                  </div>
              </div>  
          </div>
      </div>