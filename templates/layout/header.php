<header class="header-site">
  <div class="header-top">
    <div class="container">
      <div class="header-top-wrap">
        <div class="header-top-time">
            <i class="fas fa-clock"></i>
           <div class="header-top-time__text">
             <strong>Thời gian tư vấn:</strong>
             <span><?= $thuoctinh["tt_giomo"] ?></span>
           </div>
        </div>
        <div class="header-top-list">
          <?php foreach($hotline as $k=>$v) { ?>
            <div class="header-top-list__item">
                <i class="fas fa-phone-alt"></i>
                <div class="header-top-list__item-text">
                  <strong><?= $v["ten"] ?></strong>
                  <strong><?= $v["link"] ?></strong>
                </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="header-bot">
    <div class="container">
      <div class="header-bot-wrap">
        <a href="" class="logo"><img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"></a>
        <div class="header-bot-right">
          <div id="search">
            <div class="my-search">
              <input type="text" class="form-control keyword" required="true" 
              onkeypress="doEnter(event)" value="<?=_nhaptukhoatimkiem?>..." 
              onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" 
              onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}"> 
              <span onclick="onSearch($(this));return false;" class="btn_search">
                <i class="fas fa-search"></i></span>
              </div>
            </div> 
            <div class="header-bot-item">
              <i class="fas fa-shopping-cart"></i>
              <div class="header-bot-item__text giohang_fix">
                <strong class="header-bot-item__text-name"><a href="gio-hang.html">Giỏ hàng</a></strong>
                <div class="giohang_fix--sl">
                  (<span><?= count($_SESSION["cart"]) ?></span>) sản phẩm
                </div>
              </div>
            </div>
            <div class="header-bot-item">
              <i class="fas fa-phone-alt"></i>
              <div class="header-bot-item__text">
                <strong class="header-bot-item__text-name">Hotline:</strong>
                <strong class="header-bot-item__text-desc"><?= $company["dienthoai"] ?></strong>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</header>