    <div class="toolbar">
                <ul>
                    <li>
                        <a id="goidien" href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>" title="title">
                            <img src="data:image/png;base64,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" alt="images"><br>
                            <span>Gọi điện</span>
                        </a>
                    </li> 
                    <li>
                        <a id="nhantin" href="sms:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>" title="title">
                            <img src="data:image/png;base64,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" alt="images"><br>
                            <span>Nhắn tin</span>
                        </a>
                    </li>
                    <li>
                        <a id="chatzalo" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$thuoctinh["tt_zalo"]);?>" title="title">
                            <img src="data:image/png;base64,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" alt="images"><br>
                            <span>Chat zalo</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="btnchiduong">
                            <img src="data:image/png;base64,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" alt="images"><br>
                            <span>Chỉ đường</span>
                        </a>
                        <?php /* 
                        <a id="chatfb" href="<?= $thuoctinh["tt_messenger"] ?>" title="title">
                                                    <img src="data:image/png;base64,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" alt="images"><br>
                                                    <span>Chat facebook</span>
                                                </a> 
                        */?>
                    </li>
                    <li class="toolbar__list">
                        <?php foreach($diachi as $k=>$v) { ?>
                        <a href="<?= $v["dienthoai"] ?>" target="_blank"><?= $v["ten"] ?></a>
                    <?php } ?>
                    </li>
                </ul>
            </div>
            <style>
                .toolbar {    background-color: #333; display: none; width: 100%; bottom: 0; position: fixed; z-index: 500; height: auto; border-top: 1px solid #cbcbcb;}
                .toolbar ul{list-style-type: none;display: flex; margin: 0; align-items: center;}
                .toolbar ul li { text-align: center; width: 25%;}
                .toolbar ul li a { display: inline-block; width: 100%; color: #fff;}
                .toolbar ul li a img { height:18px !important; width: auto;}
                .toolbar ul li a span { font-family: arial; font-weight: 400; color: #fff; font-size: 12px;} 
                .toolbar .toolbar__list {
                    box-sizing: border-box;
                    width: 100%;
                    max-width: 200px;
                    position: absolute;
                    bottom: -500px;
                    right: 0;
                    background-color: #0f93e7;
                    border: 3px solid #1678b7;
                    border-bottom: none;
                    z-index: 999;
                    text-align: left;
                    line-height: normal;
                 } 
                 .toolbar .toolbar__list.active{
                    bottom: 100%;
                 }
                 .toolbar .toolbar__list a{
                 display: block;
                 padding: 10px 15px;
                 font-size: 13px;
                 border-bottom: 1px solid #fff;
                 color: #fff;
                 font-weight: bold;
                 } 
                @media only screen and (max-width:1000px){
                .toolbar {
                    display: block;
                }
                }
            </style>


	<?php /* <style>div.phone_mobi{background: rgba(223, 84, 124, 0.87);width:100%;position:fixed;left:0;bottom:0;height:45px;line-height:45px;color:#fff; z-index:50;display: none;}
    @media only screen and (max-width:1200px){
    div.phone_mobi {
        display: block;
    }
    }
        div.phone_mobi ul{list-style:none; margin:0; padding:0; display: flex;}
        div.phone_mobi ul li{flex: auto 1 0;text-align:center;}
        div.phone_mobi ul li a{color:#fff;text-decoration:none;font-size:15px;}
        div.phone_mobi ul li a i{font-size:19px;margin-right:5px;margin-top:3px;}
        .blink_me {-webkit-animation-name: blinker;-webkit-animation-duration: 1s;-webkit-animation-timing-function: linear;-webkit-animation-iteration-count: infinite;-moz-animation-name: blinker;-moz-animation-duration: 1s;-moz-animation-timing-function: linear;-moz-animation-iteration-count: infinite;animation-name: blinker;
        animation-duration: 1s;animation-timing-function: linear;animation-iteration-count: infinite;}
        @-moz-keyframes blinker {  0% { opacity: 1.0; }50% { opacity: 0.0; }100% { opacity: 1.0; }}
        @-webkit-keyframes blinker {  0% { opacity: 1.0; }50% { opacity: 0.0; }100% { opacity: 1.0; }}
        @keyframes blinker {0% { opacity: 1.0; }50% { opacity: 0.0; }100% { opacity: 1.0; }}
        </style>
        <div class="phone_mobi">
            <ul>
                <li><a class="blink_me" href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>"><i class="fas fa-phone-volume"></i><?=_goidien?></a></li>
                <li><a href="sms:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>"><i class="fas fa-comments"></i><?=_nhantin?></a></li>
                <li><a href="lien-he.html"><i class="fas fa-map-marker-alt"></i><?=_chiduong?></a></li>
                            <!--<li><a href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>"><i class="fas fa-comment"></i>ZaLo</a></li>-->
            </ul>
        </div> */?>
