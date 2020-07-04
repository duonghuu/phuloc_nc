<?php 
if($source=="index"){
  $linkdanhmuc = get_result("select id,ten$lang as ten,thumb,photo,link from #_news
   where type='link-danh-muc' and hienthi>0 order by stt limit 0,4");
  $product_danhmuc = get_result("select id,ten$lang as ten,tenkhongdau,type from #_product_danhmuc
   where type='san-pham' and noibat>0 and hienthi>0 order by stt");
  $tieuchi = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau from #_news
   where type='tieu-chi' and hienthi>0 order by stt");
  $spnoibat = get_result("select id,ten$lang as ten,gia,giakm,thumb,photo,tenkhongdau,ngaytao,type from #_product
   where type='san-pham' and noibat>0 and hienthi>0 order by stt");
  $dichvu = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau,ngaytao from #_news
   where type='dich-vu' and noibat>0 and hienthi>0 order by stt");
  $thuvien = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau,ngaytao from #_news
   where type='thu-vien' and noibat>0 and hienthi>0 order by stt");
  $tinnb = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau,ngaytao from #_news
   where type='tin-tuc' and noibat>0 and hienthi>0 order by stt");

  $quangcao = get_result("select ten$lang as ten,mota$lang as mota,photo,thumb,link from #_slider 
    where hienthi=1 and type='quang-cao' order by stt");
  // $gioithieu = get_fetch("select ten$lang as ten,mota$lang as mota,thumb,photo from #_about 
  //     where type='gioi-thieu' ");
  $banggia = get_result("select ten$lang as ten,mota$lang as mota,tenkhongdau,id,type,gia,giakm from #_product
   where type='bang-gia' and hienthi>0 order by stt asc");
  $video=get_result("select id,ten$lang as ten,tenkhongdau,link,thumb,photo
   from #_video where hienthi=1 and type='video' order by stt");
}
$dichvudacbiet = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau,ngaytao,link from #_news
 where type='dich-vu-dac-biet' and hienthi>0 order by stt");
$logolang = get_fetch("select photo$lang as photo from #_background where type='logo'");
$bannerlang = get_fetch("select photo as photo from #_background where type='banner'");
// $ftlogo=get_fetch("select photo from #_about where type='footer' ");
// $bgbnlang = get_fetch("select photo as photo,thumb as thumb from #_background where type='bgbn'");
// $tutags = get_result("select id,ten$lang as ten,link from #_news where type='tags'
 // and hienthi=1 order by stt asc");
$hotline = get_result("select id,ten$lang as ten,chucvu,link from #_news where
 type='hotline' and hienthi=1 order by stt asc");
// $diachi = get_result("select id,ten$lang as ten,ten2$lang as diachi,mota as iframe,chucvu as email,
//  link as dienthoai,photo,thumb from #_news where type='diachi' and hienthi=1 order by stt asc");
// $yahoo = get_result("select * from #_yahoo where type='yahoo' and hienthi=1 order by stt asc");
// $lkweb = get_result("select link,ten from #_lkweb where type='lkweb' and hienthi=1 order by stt asc");


