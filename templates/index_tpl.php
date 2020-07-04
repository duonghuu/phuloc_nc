<?php foreach($product_danhmuc as $kdm=>$vdm) { 
  $cls = (($kdm+1) % 2 == 0)?'even':'odd';
  $link1 = get_url($vdm,$vdm["type"],1);
  $spnoibat = get_result("select id,ten$lang as ten,gia,giakm,thumb,photo,tenkhongdau,ngaytao,type from #_product
   where type='san-pham' and id_danhmuc='".$vdm["id"]."' and noibat>0 and hienthi>0 order by stt");
  ?>
<div class="spnoibat <?= $cls ?>">
  <div class="container">
    <div class="main-title">
      <h2 class="main-title__name"><a href="<?= $link1 ?>"><?= $vdm["ten"] ?></a></h2>
      <div class="main-title__desc">Cùng tham khảo các sản phẩm của chúng tôi</div>
    </div>
    <div class="product-grid">
      <?php foreach($spnoibat as $k=>$v) { 
        showProduct($v);
      } ?>
    </div>
  </div>
</div>
<?php } ?>
<div class="tieuchi">
  <div class="container">
    <div class="tieuchi-main">
      <?php foreach($tieuchi as $k=>$v) {
      $img = _upload_tintuc_l.$v["thumb"];
       ?>
      <div class="tieuchi-item">
        <article>
          <div class="tieuchi-item__name">
            <img src="<?= $img ?>" alt="<?= $v["ten"] ?>">
            <h5><?= $v["ten"] ?></h5>
          </div>
          <div class="tieuchi-item__desc">
            <?= $v["mota"] ?>
          </div>
        </article>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<div class="tinnb">
  <div class="container">
    <div class="main-title">
      <h2 class="main-title__name"><a href="tin-tuc.html">tin tức mới</a></h2>
      <div class="main-title__desc">Cùng tham khảo các sản phẩm của chúng tôi</div>
    </div>
    <div class="tinnb-main">
      <?php foreach ($tinnb as $key => $value) { 
        $s_ngay = date("d/m",$value["ngaytao"]);
        $a_ngay = explode("/",$s_ngay);
        $img = _upload_tintuc_l.$value["thumb"];
        ?>
        <div class="tinnb-item">
          <a href="<?= get_url($value,$value["type"]) ?>" class="tinnb-item__url">
            <div class="tinnb-item__image">
              <div class="tinnb-item__post">
                <strong><?= $a_ngay[0] ?></strong>
                <span>Tháng <?= $a_ngay[1] ?></span>
              </div>
              <figure><img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></figure>
            </div>
            <div class="tinnb-item__info">
              <h5 class="tinnb-item__info-name"><?= $value["ten"] ?></h5>
              <div class="tinnb-item__info-desc"><?= $value["mota"] ?></div>
              <span class="tinnb-item__info-read">Xem Thêm<i class="fas fa-long-arrow-alt-right"></i></span>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<div class="giaychungnhan">
  <div class="container">
    <div class="main-title">
      <h2 class="main-title__name"><span>Giấy chứng nhận</span></h2>
      <div class="main-title__desc">Cùng tham khảo các sản phẩm của chúng tôi</div>
    </div>
    <div class="giaychungnhan-main">
      <?php foreach($quangcao as $k=>$v) { 
        $img = _upload_hinhanh_l.$v["thumb"];
        ?>
        <div class="giaychungnhan-item">
          <a href="<?= $v["link"] ?>" class="giaychungnhan-item__url">
            <figure class="giaychungnhan-item__figure">
              <img src="<?= $img ?>" alt="<?= $v["ten"] ?>">
            </figure>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>