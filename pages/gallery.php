      <div class="container page" style="padding-top: 100px;">
          <?php showGalPunkts();?>
      </div>
      
              <?php showGalleria();?>     
          </div>
      </div>

<script>
    
    var articles = document.getElementsByClassName('gal-open');
    var art = [];
    for(var i=0;i<9;i++){
        art[i]=articles[i];
        art[i].onclick=function() {
        document.getElementById('parent_popup').style.display='block';
            //history.pushState(null, null, "?galid="+this.id);
        location.href = '?galid='+this.id;
    };}
</script>
    