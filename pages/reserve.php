<div class="container page" style="padding-top: 100px">
          <div class="zakaz">
              <form method="post" action="">
                  <div class="row">
                      <div class="col-sm-4">
                          <input type="text" name="fio" placeholder="ФИО" class="person" required>
                      </div>
                      <div class="col-sm-4">
                          <input type="tel" name="phone" placeholder="Телефон" class="person" required>
                      </div>
                      <div class="col-sm-4">
                          <textarea name="notes" placeholder="<?php if($_SESSION['lang']=='kk') echo 'Қосымша ескертулер'; else echo 'Примечания';?>" class="person"></textarea>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-4">
                          <select style="box-zakaz" id="hotel" name="gid">
                            <option value="1" name="alash1" selected>Алты Алаш 1</option>
                            <option value="2" name="alash2">Алты Алаш 2</option>
                            <option value="3" name="rahat">Рахат</option>
                           </select>
                      </div>
                      <div class="col-sm-4">
                          <input type="text" name="otdata" class="tcal" value="" placeholder="<?php if($_SESSION['lang']=='kk') echo 'кіру күнін таңдаңыз..'; else echo 'дата приезда..';?>"/>
                          <select id="select-time" name="ottime">
                              <option value="00:00">00:00</option>
                              <option value="01:00">01:00</option>
                              <option value="02:00">02:00</option>
                              <option value="03:00">03:00</option>
                              <option value="04:00">04:00</option>
                              <option value="05:00">05:00</option>
                              <option value="06:00">06:00</option>
                              <option value="07:00">07:00</option>
                              <option value="08:00">08:00</option>
                              <option value="09:00">09:00</option>
                              <option value="10:00">10:00</option>
                              <option value="11:00">11:00</option>
                              <option value="12:00">12:00</option>
                              <option value="13:00">13:00</option>
                              <option value="14:00">14:00</option>
                              <option value="15:00">15:00</option>
                              <option value="16:00">16:00</option>
                              <option value="17:00">17:00</option>
                              <option value="18:00">18:00</option>
                              <option value="19:00">19:00</option>
                              <option value="20:00">20:00</option>
                              <option value="21:00">21:00</option>
                              <option value="22:00">22:00</option>
                              <option value="23:00">23:00</option>
                          </select>
                      </div>
                      <div class="col-sm-4">
                          <input type="text" name="dodata" class="tcal" value="" placeholder="<?php if($_SESSION['lang']=='kk') echo 'шығу күнін таңдаңыз..'; else echo 'дата отъезда..';?>"/>
                          <select id="select-time" name="dotime">
                                                          <option value="00:00">00:00</option>
                              <option value="01:00">01:00</option>
                              <option value="02:00">02:00</option>
                              <option value="03:00">03:00</option>
                              <option value="04:00">04:00</option>
                              <option value="05:00">05:00</option>
                              <option value="06:00">06:00</option>
                              <option value="07:00">07:00</option>
                              <option value="08:00">08:00</option>
                              <option value="09:00">09:00</option>
                              <option value="10:00">10:00</option>
                              <option value="11:00">11:00</option>
                              <option value="12:00">12:00</option>
                              <option value="13:00">13:00</option>
                              <option value="14:00">14:00</option>
                              <option value="15:00">15:00</option>
                              <option value="16:00">16:00</option>
                              <option value="17:00">17:00</option>
                              <option value="18:00">18:00</option>
                              <option value="19:00">19:00</option>
                              <option value="20:00">20:00</option>
                              <option value="21:00">21:00</option>
                              <option value="22:00">22:00</option>
                              <option value="23:00">23:00</option>
                          </select>
                      </div>
                  </div>
                  <div class="row category">
                      <div class="col-sm-4">
                          <div class="numbers-row"> 
                              Полулюкс
                              <div class="nuri">
                                  <div class="numbers">
                                      <i class="dec button">-</i>
                                      <input type="text" name="halfluxe" id="french-hens" value="0">
                                      <i class="inc button">+</i>
                                  </div>
                                  <!--<input type="checkbox" name="cat" value="plux">-->
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="numbers-row"> 
                              Люкс
                              <div class="nuri">
                                  <div class="numbers">
                                      <i class="dec button">-</i>
                                      <input type="text" name="luxe" id="french-hens" value="0">
                                      <i class="inc button">+</i>
                                  </div>
                                  <!--<input type="checkbox" name="cat" value="lux">-->
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row category">
                      <div class="col-sm-4">
                          <div class="numbers-row"> 
                              <?php if($_SESSION['lang']=='kk') echo 'Ересектер'; else echo 'Взрослые';?>
                              <div class="nuri">
                                  <div class="numbers">
                                      <i class="dec button">-</i>
                                      <input type="text" name="adult" id="french-hens" value="0">
                                      <i class="inc button">+</i>
                                  </div>
                                  <!--<input type="checkbox" name="man" value="man" checked>-->
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="numbers-row"> 
                              <?php if($_SESSION['lang']=='kk') echo 'Балалар'; else echo 'Дети';?>
                              <div class="nuri">
                                  <div class="numbers">
                                      <i class="dec button">-</i>
                                      <input type="text" name="childs" id="french-hens" value="0">
                                      <i class="inc button">+</i>
                                  </div>
                                  <!--<input type="checkbox" name="man" value="child">-->
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <input type="submit" id="texeru" value="<?php if($_SESSION['lang']=='kk') echo 'Брондау'; else echo 'Бронировать';?>" name="proverka">
                      </div>
                  </div>
                  <!--<div class="row last-res">
                      <div class="col-sm-4">
                          <input type="text" id="reserve" disabled placeholder="Бағасы ? теңге">
                      </div>
                      <div class="col-sm-4">
                          <div class="ress">
                              <input type="text" id="res-true" disabled placeholder="Орын бар">
                              <input type="text" id="res-false" disabled placeholder="Орын жоқ">
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <input type="text" id="reserve" disabled placeholder="Орынды брондау">
                      </div>
                  </div>-->
              </form>
          </div>

          <div class="nom-cat">
              <div class="row">
                  <div class="col-xs-12 col-sm-4">
                      <div class="nomer-cat">
                          <h3 class="text-center">СТАНДАРТ</h3>
                          <img src="img/nomer_v_gostinice.jpg">
                          <ul>
						  <?php if($_SESSION['lang']=='kk') echo '
                              <li>- кондиционер</li>
                              <li>- үтік, гладильді тақта, эл.шәйнек</li>
                              <li>- тоңазытқыш</li>
                              <li>- LCD теледидар(жерсеріктік телебайланыс, халықаралық телеарналар)</li>
                              <li>- тегін тұрақ</li>
                              <li>- 24-сағаттық ресепшн қызметі</li>
                              <li>- фен</li>';
							  else echo '
							  <li>- кондиционер</li>
                              <li>- утюг, гладильная доска, эл.чайник</li>
                              <li>- холодильник</li>
                              <li>- LCD телевизор(спутниковое телевидение, международные телеканалы)</li>
                              <li>- бесплатная парковка</li>
                              <li>- 24-часовые услуги ресепшена</li>
                              <li>- фен</li>
							  ';
							?>
                          </ul>
                          <button class="gallery" id="4" onclick="document.getElementById('parent_popup').style.display='block';">Галерея</button>
                          <span class="info info-false">*дәл қазір 0 орын бос</span>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                      <div class="nomer-cat">
                          <h3 class="text-center">ПОЛУЛЮКС</h3>
                          <img src="img/nomer_v_gostinice.jpg">
                          <ul>
								<?php if($_SESSION['lang']=='kk') echo '
                              <li>- душ-кабина(1-рет қолдануға арналған ванналық қолданбалар)</li>
                              <li>- кондиционер</li>
                              <li>- үтік, гладильді тақта, эл.шәйнек</li>
                              <li>- тоңазытқыш</li>
                              <li>- LCD теледидар(жерсеріктік телебайланыс, халықаралық телеарналар)</li>
                              <li>- тегін WI-FI</li>
                              <li>- тегін тұрақ</li>
                              <li>- 24-сағаттық ресепшн қызметі</li>
                              <li>- фен</li>';
							  else echo '
							  <li>- душ-кабина(одноразовые ванные принадлежности)</li>
							  <li>- кондиционер</li>
                              <li>- утюг, гладильная доска, эл.чайник</li>
                              <li>- холодильник</li>
                              <li>- LCD телевизор(спутниковое телевидение, международные телеканалы)</li>
                              <li>- бесплатный WI-FI</li>
                              <li>- бесплатная парковка</li>
                              <li>- 24-часовые услуги ресепшена</li>
                              <li>- фен</li>
							  ';
							?>

                          </ul>
                          <button class="gallery" id="5" onclick="document.getElementById('parent_popup').style.display='block';">Галерея</button>
                          <span class="info info-true">*дәл қазір 6 орын бос</span>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                      <div class="nomer-cat">
                          <h3 class="text-center">ЛЮКС</h3>
                          <img src="img/nomer_v_gostinice.jpg">
                          <ul>
							   <?php if($_SESSION['lang']=='kk') echo '
                              <li>- таңғы ас</li>
                              <li>- мини-бар</li>
                              <li>- душ-кабина(1-рет қолдануға арналған ванналық қолданбалар)</li>
                              <li>- кондиционер</li>
                              <li>- үтік, гладильді тақта, эл.шәйнек</li>
                              <li>- тоңазытқыш</li>
                              <li>- LCD теледидар(жерсеріктік телебайланыс, халықаралық телеарналар)</li>
                              <li>- тегін WI-FI</li>
                              <li>- тегін тұрақ</li>
                              <li>- 24-сағаттық ресепшн қызметі</li>
                              <li>- фен</li>';
							  else echo '
							  <li>- завтрак</li>
                              <li>- мини-бар</li>
							  <li>- душ-кабина(одноразовые ванные принадлежности)</li>
							  <li>- кондиционер</li>
                              <li>- утюг, гладильная доска, эл.чайник</li>
                              <li>- холодильник</li>
                              <li>- LCD телевизор(спутниковое телевидение, международные телеканалы)</li>
                              <li>- бесплатный WI-FI</li>
                              <li>- бесплатная парковка</li>
                              <li>- 24-часовые услуги ресепшена</li>
                              <li>- фен</li>
							  ';
							?>

                          </ul>
                          <button class="gallery" id="6" onclick="document.getElementById('parent_popup').style.display='block';">Галерея</button>
                          <span class="info info-true">*дәл қазір 4 орын бос</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <?php showGalleria();?>     
          </div>
      </div>

<script>
    
    var articles = document.getElementsByClassName('gallery');
    var art = [];
    for(var i=0;i<9;i++){
        art[i]=articles[i];
        art[i].onclick=function() {
        document.getElementById('parent_popup').style.display='block';
            //history.pushState(null, null, "?galid="+this.id);
        location.href = '?galid='+this.id;
    };}
</script>