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
              <li class="current"><a href="<?php echo $this->baseUrl;?>">Home</a></li>
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
          <div id="logo_top"><a href="index.html"><img src="images/logo_top.png" alt="BusinessNews" title="BusinessNews" /></a></div>
          <div class="block_today_date">
            <div class="num">
              <p id="num_top" />
            </div>
            <div class="other">
              <p class="month_year"><span id="month_top"></span>, <span id="year_top"></span></p>
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
            <li class="big_dropdown"><a href="<?php echo $this->baseUrl;?>">首页</a>
              </li>
              <li  class="current_page_item" data-content="business"><a href="minsu.html">特色民俗</a></li>
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
      </section>

    </div>
  </header>
  <!-- HEADER END --> 
  
  <!-- CONTENT BEGIN -->
  <div id="content" class="right_sidebar">
    <div class="inner">
      <div class="general_content">
        <div class="main_content"><!--<div class="block_home_slider">
          
            <div id="home_slider" class="flexslider">
              <ul class="slides">
                <li>
                  <div class="slide"> <img src="images/姑娘节.jpg" alt="" />
                    <div class="caption">
                      <p class="title">奕车人--姑娘节</p>
                      <p>“姑娘节”是每年春耕结束时，奕车人的青年男女谈情说爱的节日。“姑娘节”这天，奕车姑娘要戴上洁白的尖顶巾，身穿“龟式服”，下穿紧身超短裤，腰系精美的银饰，在山间用歌、舞等形式寻找自己的伴侣。，奕车人的姑娘节在农历二月二日。</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="slide"> <img src="images/火把节.jpg" alt="" />
                    <div class="caption">
                      <p class="title">黎族--火把节</p>
                      <p>火把节是彝族、白族、纳西族、基诺族、拉祜族等火把节民族的古老而重要的传统节日，有着深厚的民俗文化内涵，蜚声海内外，被称为“东方的狂欢节”。 </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="slide"> <img src="images/泼水节.jpg" alt="" />
                    <div class="caption">
                      <p class="title">傣族--泼水节</p>
                      <p>泼水节是傣族最隆重的节日，也是云南少数民族中影响面最大，参加人数最多的节日。泼水节是傣族的新年，相当于公历的四月中旬，一般持续3至7天。 </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="slide"> <img src="images/赛马节.jpg" alt="" />
                    <div class="caption">
                      <p class="title">蒙古族--赛马节</p>
                      <p>内蒙古旅游骑马常识内蒙古旅游,在大草原上马驰骋草原,是许多游人来内蒙古旅游的主要...</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <script type="text/javascript">
                                $(function () {
                                    $('#home_slider').flexslider({
                                        animation : 'slide',
                                        controlNav : true,
                                        directionNav : true,
                                        animationLoop : true,
                                        slideshow : false,
                                        useCSS : false
                                    });
                                    
                                });
                            </script> 
          </div>--><!--热门节日推荐-->
          <div class="main_content">
            <!--定位-->
            <ul id="myTab" class="nav nav-tabs tab_font">
                <li class=" active">
                    <a href="#shijian" data-toggle="tab">时间</a> 
                </li>
                <li>

                    <a href="#minzu" data-toggle="tab">民族</a> 
                </li>
                <li>
                    <a href="#diyu" data-toggle="tab">地域</a> 
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="shijian">
      <p>
      <!--Tab2-->
      <div class="tab2">
      <ul id="myTab">
                <li class="active">
                    <a href="#yiyue" data-toggle="tab">9月</a> 
                </li>
                <li>
                    <a href="#eryue" data-toggle="tab">10月</a> 
                </li>
                <li>
                    <a href="#sanyue" data-toggle="tab">11月</a> 
                </li>
            </ul>
            <div class=" line_3 clearboth"></div>
            <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="yiyue">
      <p>
      <div><a href="<?php echo $this->baseUrl . 'yunnan_dehong_huijiejie.html';?>" target="_blank"><img src="img/300-306.jpg" width="300" height="306" style="float:left;"></a>
        <div>
        <div><img src="img/150-150-2.jpg" width="150" height="150" style="float:left;">
        <img src="img/150-150-1.jpg" width="150" height="150" style="float:left;"></div>
        <img src="img/303150.jpg" width="306" height="150" style="float:left;">
        </div></div>
      </p>
   </div>
   <div class="tab-pane fade" id="eryue">
      <p></p>
   </div>
   <div class="tab-pane fade" id="sanyue">
      <p></p>
   </div>
   </div>
   </div>
   <!--/Tab2-->
      </p>
   </div>
   <div class="tab-pane fade" id="minzu">
      <p>苗族 ...</p>
   </div>
   <div class="tab-pane fade" id="diyu">
      <p>西藏 ...</p>
   </div>
            </div>
          </div>
		  <h3 style=" float:left;font-size:18px; color:#09F; font-family:'微软雅黑'; margin-bottom:-15px;">感兴趣</h3>
          <div class="line_4" style="margin:-4px 0px 18px;"></div>

          <div class="block_home_col_1 pic2">
            <div class="block_home_post">
              <div class="pic"> <a href="detail.php" class="w_hover"> <img src="img/图片1.jpg" alt="" /> <span></span> </a> </div>
              <div class="text">
                <p class="title"><a href="detail.php">古尔邦节是我国回、维吾尔、哈萨克、数民族共同的盛大节日</a></p>
                
              </div>
            </div>
            <div class="line_3" style="margin:14px 0px 17px;"></div>
            <div class="block_home_post">
              <div class="pic"> <a href="detail.php" class="w_hover"> <img src="img/图片2.jpg" alt="" /> <span></span> </a> </div>
              <div class="text">
                <p class="title"><a href="detail.php">火把节是彝族、白族、纳西族、火把节民族的古老而重要的传统节日</a></p>
                 <!--<div class="date">
                  <p>11 July, 2012</p>
                </div>
                <div class="icons">
                  <ul>
                    <li><a href="#" class="views">74</a><>
                  </ul>
                </div>-->
              </div>
            </div>
            <div class="line_3" style="margin:14px 0px 17px;"></div>
            <div class="block_home_post">
              <div class="pic"> <a href="detail.php" class="w_hover"> <img src="img/图片3.png" alt="" /> <span></span> </a> </div>
              <div class="text">
                <p class="title"><a href="detail.php">苗语称“能酿”，是苗族人民最隆重的传统节日</a></p>
              </div>
            </div>
          </div>

          
            <div class="block_home_col_2 pic2">
            <div class="line_3 first" style="margin:14px 0px 17px;"></div>
            <div class="block_home_post">
              <div class="pic"> <a href="detail.php" class="w_hover"> <img src="img/图片4.jpg" alt="" /> <span></span> </a> </div>
              <div class="text">
                <p class="title"><a href="detail.php">“阔什”是傈僳语的译音，“岁首”之意，因过去多以对物候的观察来决定日期</a></p>
                <div class="icons"> </div>
              </div>
            </div>
            <div class="line_3" style="margin:14px 0px 17px;"></div>
            <div class="block_home_post">
              <div class="pic"> <a href="detail.php" class="w_hover"> <img src="images/姑娘节.jpg" alt="" /> <span></span> </a> </div>
              <div class="text">
                <p class="title"><a href="detail.php">“阔什”是傈僳语的译音，“岁首”之意，因过去多以对物候的观察来决定日期</a></p>
                 <!--<div class="date">
                  <p>11 July, 2012</p>
                </div>
                <div class="icons">
                  <ul>
                    <li><a href="#" class="views">74</a><>
                  </ul>
                </div>-->
              </div>
            </div>
            <div class="line_3" style="margin:14px 0px 17px;"></div>
            <div class="block_home_post">
              <div class="pic"> <a href="detail.php" class="w_hover"> <img src="images/泼水节.jpg" alt="" /> <span></span> </a> </div>
              <div class="text">
                <p class="title"><a href="detail.php">泼水节是傣族最隆重的节日...</a></p>
              </div>
            </div>
          </div>
        
          <div class="clearboth"></div>
          <div class="line_3" style="margin:14px 0px 13px;"></div>
          <div class="line_2" style="margin:20px 0px 0px;"></div>
        </div>
        <div class="sidebar"> 
          <!--<div class="block_subscribes_sidebar">
                            <div class="service">
                                <a href="#" class="rss">
                                    <span class="num">11 234</span>
                                    <span class="people">Subscribers</span>
                                </a>
                            </div>
                            
                            <div class="service">
                                <a href="#" class="tw">
                                    <span class="num">781</span>
                                    <span class="people">Followers</span>
                                </a>
                            </div>
                            
                            <div class="service">
                                <a href="#" class="fb">
                                    <span class="num">341</span>
                                    <span class="people">Subscribers</span>
                                </a>
                            </div>
                        </div>-->
          
          <div class="separator" style="height:31px;"></div>
          <div class="block_popular_posts">
            <div class="webIndex">
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
            <div class="line_3"></div>
          </div>
          <div class="separator" style="height:31px;"></div>

          
        <div class="block_popular_stuff">
            <h4>热门视频</h4>
            <div class="content">
              <div class="media"><a href="#" class="general_pic_hover play no_fx" data-rel="prettyPhoto" title="热门视频"><img src="images/pic_pop_video.jpg" alt="" /></a></div>
              <p><a href="blog_post_w_video.html">2013年8月3号四川西昌彝族火把节</a>
            </div>
            <div class="clearboth"></div>
            <div class="line_2"></div>
        </div>

          <div class="separator" style="height:31px;"></div>
          <div class="block_calendar">
            <h4>日程安排</h4>
            <div class="calendar" id="calendar_sidebar"> </div>
          <script type="text/javascript">
                                var today = new Date();
                                var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                                $('#calendar_sidebar').DatePicker({
                                    flat : true,
                                    date : date,
                                    calendars : 1,
                                    starts : 1,
                                    locale : {
                                        days : ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                                        daysShort : ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                                        daysMin : ['S', 'M', 'T', 'W', 'T', 'F', 'S', 'S'],
                                        months : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                                        monthsShort : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                        weekMin : 'wk'
                                    }
                                });
                            </script></div>
          <div class="separator" style="height:31px;"></div>
          <div class="separator" style="height:31px;"></div>
          <!--<div class="block_popular_stuff">
            <h4>Popular Photo</h4>
            <div class="content"> <a href="#" class="view_all">Show all photos</a>
              <div class="media"><a href="images/pic_pop_photo_big.jpg" class="general_pic_hover zoom no_fx" data-rel="prettyPhoto" title="Popular Photo"><img src="images/pic_pop_photo.jpg" alt="" /></a></div>
              <p><a href="blog_post_w_slider.html">Editors their default model text, and a search for will uncover many.</a> <img src="images/icon_photo.gif" alt="" /></p>
              <p class="date">11 July, 2012</p>
            </div>
            <div class="info">
              <ul>
                <li class="comments"><a href="#">100</a></li>
                <li class="views"><a href="#">134</a></li>
              </ul>
            </div>
            <div class="clearboth"></div>
            <div class="line_2"></div>
          </div>-->
          <div class="separator" style="height:31px;"></div>
        </div>
        <div class="clearboth"></div>
      </div>
    </div>
  </div>
  <!-- CONTENT END --> 
  
  <!-- FOOTER BEGIN -->
  <footer>
  </footer>
  <!-- FOOTER END --> 
</div>

</body>
</html>
