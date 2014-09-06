<!DOCTYPE html>
<html>
<head>
<title>情旅</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />

<!--[if lt IE 9]>
<script type="text/javascript" src="layout/plugins/html5.js"></script>
<![endif]-->
<base href="<?php echo $this->baseUrl . 'static/';?>"></base>
<link rel="stylesheet" href="layout/style.css" type="text/css" />
<!--bootstrap-->
 <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</head>

<!--<script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker2').datetimepicker({
      language: 'en',
      pick12HourFormat: true
    });
  });
</script>-->
<script type="text/javascript" src="layout/js/jquery.js"></script>
<script type=text/javascript src="layout/damai_ui-min.js"></script>
<!-- PrettyPhoto start -->
<link rel="stylesheet" href="layout/plugins/prettyphoto/css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="layout/plugins/prettyphoto/jquery.prettyPhoto.js"></script>
<!-- PrettyPhoto end -->

<!-- jQuery tools start -->
<script type="text/javascript" src="layout/plugins/tools/jquery.tools.min.js"></script>
<!-- jQuery tools end -->

<!-- Calendar start -->
<link rel="stylesheet" href="layout/plugins/calendar/calendar.css" type="text/css" />
<script type="text/javascript" src="layout/plugins/calendar/calendar.js"></script>
<!-- Calendar end -->

<!-- ScrollTo start -->
<script type="text/javascript" src="layout/plugins/scrollto/jquery.scroll.to.min.js"></script>
<!-- ScrollTo end -->

<!-- MediaElements start -->
<link rel="stylesheet" href="layout/plugins/video-audio/mediaelementplayer.css" />
<script src="layout/plugins/video-audio/mediaelement-and-player.js"></script>
<!-- MediaElements end -->

<!-- FlexSlider start -->
<link rel="stylesheet" href="layout/plugins/flexslider/flexslider.css" type="text/css" />
<script type="text/javascript" src="layout/plugins/flexslider/jquery.flexslider-min.js"></script>
<!-- FlexSlider end -->

<!-- iButtons start -->
<link rel="stylesheet" href="layout/plugins/ibuttons/css/jquery.ibutton.css" type="text/css" />
<script type="text/javascript" src="layout/plugins/ibuttons/lib/jquery.ibutton.min.js"></script>
<!-- iButtons end -->

<!-- jQuery Form Plugin start -->
<script type="text/javascript" src="layout/plugins/ajaxform/jquery.form.js"></script>
<!-- jQuery Form Plugin end -->

<script type="text/javascript" src="layout/js/main.js"></script>
<script type="text/javascript">
	jQuery(function () {
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.caption').hover(function(){
		$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:300});
	}, function() {
		$(".cover", this).stop().animate({top:'50px'},{queue:false,duration:300});
	});
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<div class="wrapper sticky_footer"> 
  <!-- HEADER BEGIN -->
  <header>
    <div id="header">
      <section class="top">
        <div class="inner">
          <div class="fl">
            <div class="block_top_menu">
              <ul>
                <li class="current"><a href="index.html">Home</a></li>
                <li><a href="#">Site Map</a></li>
                <li><a href="typography.html">Typography</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="fr">
            <div class="block_top_menu">
              <ul>
                <li class="current"><a href="#login" class="open_popup">Login</a></li>
                <li><a href="registration.html">Registration</a></li>
                <li><a href="#">Subscribe</a></li>
              </ul>
            </div>
            <div class="block_social_top">
              <ul>
                <li><a href="#" class="fb">Facebook</a></li>
                <li><a href="#" class="tw">Twitter</a></li>
                <li><a href="#" class="rss">RSS</a></li>
              </ul>
            </div>
          </div>
          <div class="clearboth"></div>
        </div>
      </section>
      <section class="bottom">
        <div class="inner">
          <div id="logo_top"><a href="index.html"><img src="images/logo_top.png" alt="BusinessNews" title="BusinessNews"/></a></div>
          <div class="block_today_date">
            <div class="num">
              <p id="num_top" />
            </div>
            <div class="other">
              <p class="month_year"><span id="month_top"></span><span id="year_top"></span></p>
              <p id="day_top" class="day" />
            </div>
          </div>
          <div class="fr">
            <div class="block_languages">
              <div class="text">
                <p>Language:</p>
              </div>
              <ul>
                <li class="current"><a href="#" class="eng">English</a></li>
                <li><a href="#" class="french">French</a></li>
                <li><a href="#" class="ger">German</a></li>
              </ul>
              <div class="clearboth"></div>
            </div>
            <!--<div class="block_search_top">
              <form action="#" />
              
              <div class="field">
                <input type="text" class="w_def_text" title="Enter Your Email Addres" />
              </div>
              <input type="submit" class="button" value="Search" />
              <div class="clearboth"></div>
              </form>
            </div>-->
          </div>
          <div class="clearboth"></div>
        </div>
      </section>
      <section class="section_main_menu">
        <div class="inner">
          <nav class="main_menu">
            <ul>
            <li class="current_page_item"><a href="<?php echo $this->baseUrl;?>">首页</a>
              </li>
              <li class="big_dropdown" data-content="business"><a href="<?php echo $this->minsuUrl;?>">特色民俗</a></li>
              <li class="big_dropdown" data-content="technology"><a href="#">节庆活动</a></li>
              <li class="big_dropdown" data-content="education"><a href="#">地方大事记</a></li>
              <li><a href="#">非去不可</a>
              </li>
              <li><a href="#">艺术无止境</a>
              </li>
              <li><a href="#">赶集</a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
      <section class="section_big_dropdown">
      <div style=" width:100%; height:654px;background:url(images/sybg.jpg); background-size:100% 100%; padding-left:900px; padding-top:150px;">
      
      <div class="webIndex insearch">
              <div class="stay-list clearFloat">
                <div class="da_div text-center">
                  <div class="boxgrid caption">火把节<div class="boxcaption cover">
                      <p><a href="http://sc.chinaz.com/jiaoben/" target="_blank">火把节</a></p>
                    </div>
                  </div>
                  <div class="boxgrid  boxgrid2 caption"> 彝族<div class="boxcaption boxcaption2 cover">
                      <p><a href="http://sc.chinaz.com/jiaoben/" target="_blank">彝族</a></p>
                    </div>
                  </div>
                  <div class="boxgrid boxgrid3 caption">古尔邦节<div class="boxcaption boxcaption2 cover">
                      <p><a href="http://sc.chinaz.com/jiaoben/" target="_blank">古尔邦节</a></p>
                    </div>
                  </div>
                  <div class="boxgrid  boxgrid2 reci caption"> 青海湖捕鱼<div class="boxcaption boxcaption2 cover">
                      <p><a href="http://sc.chinaz.com/jiaoben/" target="_blank">青海湖捕鱼</a></p>
                    </div>
                  </div>
                  <div class="boxgrid reci2 caption">青奥会<div class="boxcaption cover">
                      <p><a href="http://sc.chinaz.com/jiaoben/" target="_blank">青奥会</a></p>
                    </div>
                  </div>
                  <div class="boxgrid boxgrid2 reci2 caption"> 水灯节
                    <div class="boxcaption boxcaption2 cover">
                      <p><a href="http://sc.chinaz.com/jiaoben/" target="_blank">水灯节</a></p>
                    </div>
                  </div>
                </div>
                <div class="stay-list-left"> <span class="search-sign"></span> 
                  <!--<h3 class="search-title">关键词旅游灵感</h3>-->
                  <div class="tab-search">
                    <form class="bs-example bs-example-form tab2" role="form">
                      <div class="input-group"> <span class="input-group-addon">搜索标签</span>
                        <input type="text" class="form-control" placeholder="输入景区、酒店、节日等">
                      </div>
                      <div class="">
                        <input type="text" class="form-control" placeholder="起始日期">
                      </div>
                      <div class="">
                        <input type="text" class="form-control" placeholder="结束日期">
                      </div>
                      <button class="btn btn-primary" style="width:100%">搜索</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
      </section>
    </div>
  </header>
  
  <footer>
  </footer>
</div>

</body>
</html>
