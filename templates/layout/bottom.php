<div class="tin-video">
 
  <div class="container">
    <div class="tin-video--flex">
      <div class="tin-bg">
        <div class="title">
          Tin tức
        </div>
        <div class="tinnb">
          <?php 
          $img = _upload_tintuc_l.$tinnb[0]["thumb"];
           ?>
          <div class="first-news">
            <a href="<?= get_url($tinnb[0],'tin-tuc') ?>">
              <figure><img src="<?= $img ?>" alt="<?= $tinnb[0]["ten"] ?>"></figure>
              <h5><?= $tinnb[0]["ten"] ?></h5>
              <p><?= catchuoi($tinnb[0]["mota"],100) ?></p>
              <span>xem thêm</span>
            </a>
          </div>
          <div class="tinnb-main">
            <?php foreach($tinnb as $k=>$v) { 
            $img = _upload_tintuc_l.$v["thumb"];
              ?>
              <div class="tinnb-item">
                <a href="<?= get_url($v,'tin-tuc') ?>">
                  <figure><img src="<?= $img ?>" alt="<?= $v["ten"] ?>">
                  </figure>
                  <section>
                    <h5><?= $v["ten"] ?></h5>
                    <p><?= catchuoi($v["mota"],80) ?></p>
                  </section>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="video-bg">
        <div class="title">
          Video
        </div>
        <div id="video-idx">
        </div>
        <div class="video-khac-main">
          <?php foreach($video as $k=>$v) { 
            $iden = getYoutubeIdFromUrl($v["link"]);
            $img = '//i.ytimg.com/vi/'.$iden.'/mqdefault.jpg';
            ?>
          <div class="video-khac"><a data-val="<?= $iden ?>" href="#">
            <img src="<?= $img ?>" alt="<?= $v["ten"] ?>"></a></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>