     <div class="container page" style="padding-top: 80px">
          <div class="head-contact">
              <div class="row">

                  <?php showAlash();?>
                  
                  <div class="col-sm-4">
                      <div class="contact-form">
                          <div class="divError" id="error"></div>
                            <form action="javascript:void(0);" name="myform" id="myform">
                                <h3><?php if($_SESSION['lang']=='kk') echo 'Кері байланыс'; else echo 'Обратная связь';?></h3>
                                    <div class="row">
                                        <div class="col-md-4"><?php if($_SESSION['lang']=='kk') echo 'Есіміңіз'; else echo 'Имя';?></div>
                                        <div class="col-md-8"><input type="text" name="name" value="" class="vvod"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4"><?php if($_SESSION['lang']=='kk') echo 'Тегіңіз'; else echo 'Фамилия';?></div>
                                        <div class="col-md-8"><input type="text" name="fname" value="" class="vvod"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">Телефон</div>
                                        <div class="col-md-8"><input type="tel"  name="tel" value="" class="vvod" id="phone"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">E-mail</div>
                                        <div class="col-md-8"><input type="email" name="email" value="" class="vvod"></div>
                                    </div>
                                    
                                    <?php if($_SESSION['lang']=='kk') echo 'Хабарламаңыз'; else echo 'Ваше сообщение:';?><br>
                                    <div class="row" style="padding-right: 17px; padding-left: 13px;">
                                        <td colspan="2"><textarea height="150%" class="vvod_textarea" name="mess"></textarea></td>
                                    </div>
                                <input type="submit" value="<?php if($_SESSION['lang']=='kk') echo 'Жіберу'; else echo 'Отправить';?>" id="submit" onclick="sendform();" style="height: 50px">
                                <script language="JavaScript" type="text/javascript">
                                /* Будьте внимательны. Мы здесь указали адрес нашего сайта
                                и адрес скрипта, обрабатывающего форму.
                                Не забудьте изменить их на Ваши.
                                 */
                                var Site={serverName: 'www.alash.tuin'} /* адрес сайта */
                                function sendform(){
                                    var msg=$('#myform').serialize();
                                        /* блокируем кнопку отправить */
                                    document.myform.submit.disabled=true;
                                        /* меняем надпись на кнопке */
                                    document.myform.submit.value="Подождите..."; 
                                    $.ajax({
                                        type:'POST',
                                                /* адрес php файла, обрабатывающего форму */
                                        url:"ajax.php",
                                        data:msg+"&action=sendform",
                                        cache:false,
                                        success:function(data){
                                            $("#error").html(data);
                                            document.myform.submit.disabled=false;
                                            document.myform.submit.value="Отправить";
                                        }
                                    });
                                } 
                                </script>
                            </form>
                      </div>
                  </div>
              </div>
          </div>
         <?php showHosts();?>
          
          
      </div>