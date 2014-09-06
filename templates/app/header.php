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
              <li><a href="#">去赶集, 杂碎</a>
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

