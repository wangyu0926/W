<!DOCTYPE html>
<html>
<head>
<title>云南德宏会街节-情旅</title>
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
              <li  class="current_page_item" data-content="business"><a href="<?php echo $this->baseUrl . 'minsu.html';?>">特色民俗</a></li>
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
        <!--<div class="inner">
          <div class="block_big_dropdown" data-menu="business">
            <div class="content">
              <div class="image"> <a href="blog_post.html" class="pic"><img src="images/pic_big_drop_3.jpg" alt="" /></a>
                <p><a href="blog_post.html">Embarrassing hidden in the middleany thing</a></p>
              </div>
              <div class="line"></div>
              <div class="image"> <a href="blog_post.html" class="pic"><img src="images/pic_big_drop_4.jpg" alt="" /></a>
                <p><a href="blog_post.html">Content of a page when looking.</a></p>
              </div>
              <div class="line"></div>
              <div class="popular_posts">
                <div class="title">
                  <p>Popular Posts</p>
                </div>
                <ul>
                  <li><a href="blog_post.html"><span>11 July, 2012</span>Established fact that a reader.</a></li>
                  <li><a href="blog_post_w_slider.html"><span>08 July, 2012</span>Editors now use as their default model text.</a></li>
                  <li><a href="blog_post_w_video.html"><span>05 July, 2012</span>Embarrassing hidden in the middle.</a></li>
                  <li><a href="blog_post.html"><span>01 July, 2012</span>Anything embarrassing hidden in the middl.</a></li>
                </ul>
              </div>
              <div class="line"></div>
              <div class="more">
                <div class="title">
                  <p>More In Business</p>
                </div>
                <ul>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Money</a></li>
                  <li><a href="#">Isnvestor Programs</a></li>
                  <li><a href="#">Banks</a></li>
                </ul>
              </div>
              <div class="clearboth"></div>
            </div>
          </div>
          <div class="block_big_dropdown" data-menu="technology">
            <div class="content">
              <div class="image"> <a href="blog_post.html" class="pic"><img src="images/pic_big_drop_5.jpg" alt="" /></a>
                <p><a href="blog_post.html">Simply dummy text of the printing.</a></p>
              </div>
              <div class="line"></div>
              <div class="image"> <a href="blog_post.html" class="pic"><img src="images/pic_big_drop_6.jpg" alt="" /></a>
                <p><a href="blog_post.html">Internet tend to repeat predefined chunks.</a></p>
              </div>
              <div class="line"></div>
              <div class="popular_posts">
                <div class="title">
                  <p>Popular Posts</p>
                </div>
                <ul>
                  <li><a href="blog_post.html"><span>11 July, 2012</span>Publishing packages and web page</a></li>
                  <li><a href="blog_post_w_slider.html"><span>08 July, 2012</span>Generators on the Internet tend to repeat.</a></li>
                  <li><a href="blog_post_w_video.html"><span>05 July, 2012</span>Anything embarrassing hidden in the middle.</a></li>
                  <li><a href="blog_post.html"><span>01 July, 2012</span>Words which don't look even slightly.</a></li>
                </ul>
              </div>
              <div class="line"></div>
              <div class="more">
                <div class="title">
                  <p>More In Tech</p>
                </div>
                <ul>
                  <li><a href="#">Web Development</a></li>
                  <li><a href="#">Programming</a></li>
                  <li><a href="#">Techique</a></li>
                  <li><a href="#">Cars</a></li>
                </ul>
              </div>
              <div class="clearboth"></div>
            </div>
          </div>
          <div class="block_big_dropdown" data-menu="education">
            <div class="content">
              <div class="image"> <a href="blog_post.html" class="pic"><img src="images/pic_big_drop_1.jpg" alt="" /></a>
                <p><a href="blog_post.html">Many desktop packages and web page editors.</a></p>
              </div>
              <div class="line"></div>
              <div class="image"> <a href="blog_post.html" class="pic"><img src="images/pic_big_drop_2.jpg" alt="" /></a>
                <p><a href="blog_post.html">There are many variations passages</a></p>
              </div>
              <div class="line"></div>
              <div class="popular_posts">
                <div class="title">
                  <p>Popular Posts</p>
                </div>
                <ul>
                  <li><a href="blog_post.html"><span>11 July, 2012</span>Many desktop publishing packages and web page</a></li>
                  <li><a href="blog_post_w_slider.html"><span>08 July, 2012</span>Randomised words which don't look even.</a></li>
                  <li><a href="blog_post_w_video.html"><span>05 July, 2012</span>Anything embarrassing hidden in the middle.</a></li>
                  <li><a href="blog_post.html"><span>01 July, 2012</span>Established fact that a reader.</a></li>
                </ul>
              </div>
              <div class="line"></div>
              <div class="more">
                <div class="title">
                  <p>More In Education</p>
                </div>
                <ul>
                  <li><a href="#">High school</a></li>
                  <li><a href="#">Univercity</a></li>
                  <li><a href="#">College</a></li>
                  <li><a href="#">Students</a></li>
                </ul>
              </div>
              <div class="clearboth"></div>
            </div>
          </div>
        </div>-->
      </section>
      <!--<section class="section_secondary_menu">
        <div class="inner">
          <nav class="secondary_menu">
            <ul>
              <li><a href="main_news_europe.html">Europe</a></li>
              <li><a href="main_news_usa.html">USA</a></li>
              <li><a href="main_news_m_east.html">Middle East</a></li>
              <li><a href="main_news_money.html">Money</a></li>
              <li><a href="main_news_science.html">Science and IT</a></li>
              <li><a href="main_news_culture.html">Culture</a></li>
              <li><a href="main_news_top.html">Top News</a></li>
            </ul>
          </nav>
          <div class="block_clock">
            <p>Time: <span id="time"></span></p>
          </div>
        </div>
      </section>-->
    </div>
  </header>
  <!-- HEADER END -->

  <!-- CONTENT BEGIN -->
  <div id="content" class="right_sidebar">
    <div class="inner">
      <div class="general_content">
                            <div class="main_content">



                        <h2>【德宏阿昌族会街节】</h2>

                        <div class="line_4" style="margin:0px 0px 22px;"></div>

                        <div class="block_media_f_pic">
                            <img src="img/11.jpg" alt="" />
                            <div class="caption">
                              <p class="title"><a href="#">许多民族姑娘围绕着跳着名族舞</a></p>
                                <div class="l_part"><p class="date">11 July, 2012</p></div>
                                <div class="r_part"><p class="type"><a href="#">5 photos</a></p></div>

                                <div class="clearboth"></div>
                          </div>
                        </div>

                        <div class="separator" style="height:19px;"></div>

                        <div class="block_media_posts">
                            <article class="block_media_post">
                                <div class="f_pic">
                                    <a href="media_item.html"><img src="img/44.jpg" alt="" /><span class="hover"></span></a>
                                    <span class="type">3 photos</span>
                                </div>


                            </article>

                            <article class="block_media_post">
                                <div class="f_pic">
                                    <a href="media_item.html"><img src="img/55.jpg" alt="" /><span class="hover"></span></a>
                                    <span class="type">5 photos</span>
                                </div>


                            </article>

                            <article class="block_media_post">
                                <div class="f_pic">
                                    <a href="media_item.html"><img src="img/77.jpg" alt="" /><span class="hover"></span></a>
                                    <span class="type">Video</span>
                                </div>


                            </article>
                        </div>

                        <div class="separator" style="height:31px;"></div>

                        <div class="block_tabs_type_3">
                            <div class="tabs">
                                <ul>
                                    <li><a href="#1" class="current" style="font-size:16px;">活动详情</a></li><!-- tab link -->
                                    <li><a href="#2"style="font-size:16px;">附近酒店</a></li><!-- tab link -->

                                </ul>
                            </div>

                            <div class="tab_content">
                                <!-- tab content goes here -->
                                <h4>【德宏阿昌族会街节】</h4>
                                <p style="background:#E7E7E7; border-radius:3px;padding:20px;"><b>节日时间：</b>2014年10月3日，节期5天。</br>  </br>
<b>简介：</b>“会街节”是阿昌族人民的一种传统节日，主要是人们进行物资交流，青年男女进行社交和表达感情的机会。耍青龙、玩白象，是会街节期间 最隆重、最精彩的娱乐活动。 民间艺人制作的白象、青龙。一般用竹木编扎，彩纸裱装，活灵活显，表现出阿昌人民的勤劳智慧和对幸福生活的憧憬。</br></br>
<b>特色活动：</b>
阿昌族视青龙、白象为吉祥、幸福的象征。会街前，要扎好青龙、白象。会街这天，当天空霞光初露，小伙子们便身背户撒长刀，挎着象脚鼓，姑娘们身着娇艳的民族服装，在鼓乐和鞭炮声中簇拥着披红挂绿的青龙、白象进入会街节广场。当主持节日的长者宣布节日开始，顿时，鼓声、（钅芒）锣声、（钅发）声交织成一片。青龙、白象也活跃起来，青龙时而摇头、时而摆尾、时而张嘴欢笑；白象时而甩动长长的鼻子，时而前进，时而后退，接着滑步、下跪、后仰、前倾，笨拙的憨态引起人们一阵阵哄笑。此时，姑娘小伙子们便围着青龙白象翩翩起舞。他们双脚跳跃挪动，身体象波浪般地起伏，边跳边蹲。此时的会场，鼓乐齐鸣，龙舞、象跃 、一片欢腾。</br></br>
<b>节日由来：</b>
会街，阿昌话叫“熬露”，每年农历八九月间举行，是迎接佛祖返回人间的日子。传说佛祖“个打马”（释迦牟会街节尼）为母亲上天念经三日（相当于地上三月）返回人间时，佛光普照，青龙白象呈祥。阿昌会街必耍青龙白象，即源于此。

</p>
                                <div class="clearboth"></div>
 <div style=" float:left;background:#e7e7e7; width:100px; height:35px; border-top:2px #f90 solid;color:#F90; padding-left:15px;font-family:"微软雅黑";"><h4 style="margin-top:10px;">相关推荐</h4></div>
              <div class="tstj">
              <ul>
<?php
foreach ($this->travel as $travel) {
?>
                <li>
                <a href="<?echo $travel['pc_detail_url'];?>">
                <div style="width:150px; margin-right:10px;"><img src="<?php echo $travel['pic_url'];?>"/></div>
                <div style="width:320px;">
                <h4><?php echo $travel['item_title']?></h4>
                <p>
<?php
echo substr($travel['fee_include'], 0, 100);
?>
                </p>
                </div>
                <div style="width:80px; color:#F60; font-size:18px; padding-top:30px;">￥<?php echo $travel['item_price'] / 100;?>+</div>
                </a>
                </li>
<?php
}
?>
              </ul>
              <div class="clearboth"></div>
            </div>

                            </div>




                            <div class="tab_content">
                                <!-- tab content goes here -->
                                <div class="block_media_posts_all">
                                    <article class="block_media_post_all">
                                        <div class="f_pic detail-jd">
                                            <a href="media_item.html"><img src="img/1.png" alt="" /><span class="hover"></span></a>                                        </div>

                                        <p class="title"><a href="media_item.html">Many desktop publish packages.</a></p>
                                        <p class="date">11 July, 2012</p>
                                    </article>

                                    <article class="block_media_post_all">
                                        <div class="f_pic">
                                            <a href="media_item.html"><img src="images/pic_media_tabs_7.jpg" alt="" /><span class="hover"></span></a>                                        </div>

                                        <p class="title"><a href="media_item.html">Many desktop publish packages.</a></p>
                                        <p class="date">11 July, 2012</p>
                                    </article>

                                    <article class="block_media_post_all">
                                        <div class="f_pic">
                                            <a href="media_item.html"><img src="images/pic_media_tabs_6.jpg" alt="" /><span class="hover"></span></a>                                        </div>

                                        <p class="title"><a href="media_item.html">Many desktop publish packages.</a></p>
                                        <p class="date">11 July, 2012</p>
                                    </article>

                                    <article class="block_media_post_all">
                                        <div class="f_pic">
                                            <a href="media_item.html"><img src="images/pic_media_tabs_5.jpg" alt="" /><span class="hover"></span></a>                                        </div>

                                        <p class="title"><a href="media_item.html">Many desktop publish packages.</a></p>
                                        <p class="date">11 July, 2012</p>
                                    </article>

                                    <article class="block_media_post_all">
                                        <div class="f_pic">
                                            <a href="media_item.html"><img src="images/pic_media_tabs_4.jpg" alt="" /><span class="hover"></span></a>                                        </div>

                                        <p class="title"><a href="media_item.html">Many desktop publish packages.</a></p>
                                        <p class="date">11 July, 2012</p>
                                    </article>

                                    <article class="block_media_post_all">
                                        <div class="f_pic">
                                            <a href="media_item.html"><img src="images/pic_media_tabs_3.jpg" alt="" /><span class="hover"></span></a>                                        </div>

                                        <p class="title"><a href="media_item.html">Many desktop publish packages.</a></p>
                                        <p class="date">11 July, 2012</p>
                                    </article>

                                    <article class="block_media_post_all">
                                        <div class="f_pic">
                                            <a href="media_item.html"><img src="images/pic_media_tabs_2.jpg" alt="" /><span class="hover"></span></a>
                                        </div>

                                        <p class="title"><a href="media_item.html">Many desktop publish packages.</a></p>
                                        <p class="date">11 July, 2012</p>
                                    </article>

                                    <article class="block_media_post_all">
                                        <div class="f_pic">
                                            <a href="media_item.html"><img src="images/pic_media_tabs_1.jpg" alt="" /><span class="hover"></span></a>
                                        </div>

                                        <p class="title"><a href="media_item.html">Many desktop publish packages.</a></p>
                                        <p class="date">11 July, 2012</p>
                                    </article>
                                </div>

                                <div class="separator" style="height:12px;"></div>

                                <a href="#" class="lnk_archive fr">Archive</a>

                                <div class="clearboth"></div>
                            </div>

                          <script type="text/javascript">
                                $('.block_tabs_type_3 .tabs').tabs('.block_tabs_type_3 .tab_content', {
                                    initialIndex : 0
                                });
                            </script>
                        </div>

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
            <div class="line_3"></div>
            <div class="line_2"></div>
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
                            </script>
            <div class="line_2"></div>
          </div>
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
