<?php require(ITag::createRuntime("incfile/header_base"));?><title><?php echo $this->config["seo_title"];?></title><meta name='keywords' content='<?php echo $this->config[seo_keys];?>'><meta name='description' content='<?php echo $this->config[seo_desc];?>'><link href="<?php echo IUrl::getHost().$this->getWebViewPath()."skin/res/site.css";?>" media="screen"  rel="stylesheet"  type="text/css"></head><body><?php require(ITag::createRuntime("incfile/header_top"));?><?php require(ITag::createRuntime("incfile/header_nav"));?><?php $msg = IReq::get('msg') ? IReq::get('msg') : '发生错误'?><style>@charset "utf-8";body{margin:0 auto;padding:0;color:#666;font:12px '微软雅黑';text-align:center}body>div{margin-right:auto;margin-left:auto;text-align:center}div,form,ul,ol,li,span,p,dl,dt,dd,img,header,section,footer,nav,figure,figcaption,article{margin:0;padding:0;border:0}h1,h2,h3,h4,h5,h6{margin:0;padding:0;font-size:12px;font-weight:400}ul,ol,li{list-style:none}table,td,input,textarea{font-size:12px}header,section,footer,nav,figure,figcaption,article{display:block}a{color:#333;text-decoration:none}a:hover{color:#C00;text-decoration:underline}h2{text-align:right}h2 span{float:left;font-weight:700}.clear,.area,.pp,.pt{zoom:1}.show{display:block}.hidden{display:none}.hand{cursor:pointer}.pp,.pt,.list12 ul,.list14 ul,.area{width:100%;margin:0 auto}.pp:after,.pt:after,.area:after,.clear:after{content:".";display:block;visibility:hidden;height:0;clear:both}.pp{text-align:center}.pp img{display:block;margin:0 auto}.pp span{display:block}.pt{color:#666;line-height:20px;text-align:left}.pt div{float:left;margin:0 10px 0 0}.pt p{clear:none}.list14 li,.list12 li{padding:3px 0;color:#333;font-size:12px;line-height:16px;text-align:left}.list14 li{padding:4px 0;font-size:14px}.left,.center,.l,.right,.r{display:inline;float:left}.right,.r{float:right}.fontArial{font-family:Arial}.b{font-weight:700}.blank5,.blank8{height:5px;font-size:1px}.blank8{height:8px}.more{text-align:right}.area{width:980px}li.nodot{background:none!important;padding-left:0!important}header{width:100%;background:#FFF}header .area{text-align:left;padding:20px 0 12px}#noFound404 .block404{width:378px;height:400px;margin:0 auto;border:1px solid #ee3c3c;background:url(<?php echo IUrl::getHost().$this->getWebViewPath()."skin/res/404.png";?>) no-repeat 10px 20px;padding:25px 25px 20px 575px;border-radius:15px;text-align:left}#noFound404 .block404 h2{text-align:left;font:24px/36px "微软雅黑";color:#333;margin:56px 0 0}#noFound404 .block404 p.tit{font:18px/24px "微软雅黑";padding:12px 0;color:#666}#noFound404 .block404 p.p{font:14px/20px "宋体";padding:2px 0;color:#666}#noFound404 .block404 p.link{font:16px/24px "宋体";padding:5px 0 15px;color:#999}#noFound404 .block404 p.link a{color:#09c;font-family:"微软雅黑";text-decoration:underline}#noFound404 .block404 .img img{float:left;border:1px solid #e6e6e6}#noFound404 .block404 .img span{float:left;color:#666;margin:32px 0 0 18px;line-height:20px;display:inline-block}footer{margin-top:20px;line-height:30px;padding-bottom:20px;font-family:"宋体"}footer img{vertical-align:middle;margin:0 5px;border:1px solid #c3bfbe}.dacu_side-tab{z-index:10002;width:0;height:10px;position:fixed;top:50%;margin-top:-124px;right:34px}.dacu_side-tab .tab-default{position:absolute;overflow:hidden;right:0;z-index:1;background-position:left bottom;background-repeat:no-repeat}.dacu_side-tab .tab-hover{position:absolute;overflow:hidden;right:0;z-index:1;display:none}.dacu_topbanner{}.dacu_topbanner a{height:100%;display:block}.dacu_tab{padding:0!important}.dacu_tab img{vertical-align:top}header div.l a.dacu,header div.l .dacu{width:80px;height:38px;display:inline-block;background:#fff;padding:0;position:absolute;left:129px;top:8px}
#noFound404{background-color: #fff;padding: 20px;}@media screen and (max-width:1580px) and (min-width:1280px){.dacu_side-tab{display:none}}.dacu_side-tab.none{display:none!important}
</style><div id="noFound404"><div class="block404"><h2><?php echo htmlspecialchars($msg,ENT_QUOTES);?></h2><p class="tit">最有可能的原因是：</p><p class="p">·您输入的网址不正确</p><p class="p">·链接可能已过期</p><p class="tit">别担心，您可以继续访问帮您省钱的优购网</p><p class="link"><a href="/">优购网首页</a>| <a href="/">积分商城</a></p><div class="clear img"><img skin="skin" src="http://i4.tuanimg.com/shop/asset/d/ma100-100.png"><span>扫描下载客户端<br>随时随地优购</span></div></div></div><?php require(ITag::createRuntime("incfile/footer"));?></body></html>