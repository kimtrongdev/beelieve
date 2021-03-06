<?php
/*
 Template Name: News
 */
?>

<!doctype html>
<html data-template="home" class="has-no-js" lang="en-US">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beelieve</title>
  <link rel='stylesheet' id='sage/main.css-css' href="<?php bloginfo('template_directory') ?>/style.css" type='text/css' media='all' />
  <link rel='stylesheet' href="<?php bloginfo('template_directory') ?>/myStyle.css" type='text/css' />
  <script async defer type='text/javascript' src='https://www.google.com/recaptcha/api.js?render=explicit'></script>
  <script async defer type='text/javascript' src='https://www.google.com/recaptcha/api.js?render=explicit'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script type='text/javascript'>
    function togleMenu() {
      let content = document.getElementById("content-menu");
      content.classList.toggle("content-menu-active")
    }
  </script>
</head>

<body class="home page app-data index-data singular-data page-data page-2-data page-front-page-data front-page-data">
  <div class="main-logo" id="top">
    Beelieve
  </div>
  <div class="nav-destop"> 
    <div id="content-menu" class="content" >
      <ul>
        <li><a href="#home" class="no-transition js-scrollto" data-offset="60">Home</a></li>
        <li href="#our_service" class="item no-transition js-scrollto" data-offset="60">Our services</li>
        <li href="#contact" class="item no-transition js-scrollto" data-offset="60">Contact Us</li>
        <li><a href="#">News / Events</a></li>
        <li><a href="#">Our Work</a></li>
      </ul>
      <div class="contact">
        <div class="d-flex mx-2">
          <img src="<?php bloginfo('template_directory') ?>/images/svg/page3/iconCall.svg" width="30" height="30"/>
          <b>028 6288 3088</b> 
          <a style="margin-left: 80px" href="#"><img src="<?php bloginfo('template_directory') ?>/images/svg/page3/iconFB.svg" width="30" height="30"/></a>
        </div>
        <br/>
        <div class="ml-2">
          <img src="<?php bloginfo('template_directory') ?>/images/svg/page3/iconEmail.svg" width="30" height="30"/>
          <b>hello@beelieve.vn</b>
          <a style="margin-left: 50px" href="#"><img src="<?php bloginfo('template_directory') ?>/images/svg/page3/iconTele.svg" width="30" height="30"/></a>
        </div>
      </div>
    </div>
    <div class="menu">
      <div class="text">Beelieve</div>
      <div style="margin-left: 0px" class="btn" onclick="togleMenu()"></div>
    </div>
  </div>

  <div class="c-preloader">
    <div class="c-preloader_anim" data-module="Preloader">
     <center style="margin-top: 40vh;">
        <svg width="198" height="149" viewBox="0 0 278 209" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="logo 5">
            <g id="hexagonM">
            <path id="Polygon 1" d="M116.271 29.2887L166 0.57735L215.729 29.2887V86.7113L166 115.423L116.271 86.7113V29.2887Z" fill="white" stroke="black"/>
            </g>
            <g id="hexagonB1">
            <path id="Polygon 1_2" d="M8.27053 29.2887L58 0.57735L107.729 29.2887L107.729 86.7113L58 115.423L8.27053 86.7113L8.27053 29.2887Z" fill="black" stroke="black"/>
            </g>
            <g id="hexagonB2">
            <path id="Polygon 1_3" d="M62.2705 122.289L112 93.5774L161.729 122.289V179.711L112 208.423L62.2705 179.711L62.2705 122.289Z" fill="black" stroke="black"/>
            </g>
            <g id="hexagonB3">
            <path id="Polygon 1_4" d="M170.271 122.289L220 93.5774L269.729 122.289V179.711L220 208.423L170.271 179.711V122.289Z" fill="black" stroke="black"/>
            </g>
            </g>
            </svg>
      </center>
    </div>
    <div class="c-preloader_background">

    </div>
    <div class="c-preloader_logo">

    </div>
  </div>

  <!-- <div class="c-popup" data-module="Popup">
    <div class="c-popup_background js-close"></div>
    <div class="c-popup_inner">
      <button class="c-popup_close o-link js-close" type="button">
        Close
      </button>
      <article class="c-popup_content js-content">
      </article>
    </div>
  </div> -->
  <div id="js-pjax-wrapper">
    <div class="js-pjax-container waveWrapper waveAnimation" data-template="home">
      <div class="waveWrapperInner bgTop">
        <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')">
        </div>
      </div>
      <div class="waveWrapperInner bgMiddle">
        <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')">
        </div>
      </div>
      <div class="waveWrapperInner bgBottom">
        <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')">
        </div>
      </div>

      <div class="o-scroll" data-horizontal data-module="Scroll">
        <!-- Menu -->
        <div class="nav-mobile o-scroll_section c-header_wrapper">
          <span class="c-header_trigger js-animate menu-custom" data-callback="trigger.Header()" data-repeat></span>
          <header class="c-header js-header">
            <ul class="c-header_menu">
              <li class="c-header_menu_item">
                <a href="#home" class="no-transition js-scrollto" data-offset="60">
                  Home
                </a>
              </li>
              <li class="c-header_menu_item">
                <a href="#about" class="no-transition js-scrollto" data-offset="60">
                  About us
                </a>
              </li>
              <li class="c-header_menu_item">
                <a href="#core_values" class="no-transition js-scrollto" data-offset="60">
                  Core values
                </a>
              </li>
              <li class="c-header_menu_item">
                <a href="#our_service" class="no-transition js-scrollto" data-offset="60" data-pjax-state="">
                  Our service
                </a>
              </li>
              <li class="c-header_menu_item">
                <a href="#contact" class="no-transition js-scrollto" data-offset="60" data-pjax-state="">
                  Contact Us
                </a>
              </li>
            </ul>
            <a href="#" class="c-header_logo" data-pjax-state="">
              <span class="u-screen-reader-text">Beelieve</span>
              <?xml version="1.0" standalone="no"?>
              <!DOCTYPE svg
                PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
              <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="121.000000pt" height="39.000000pt"
                viewBox="0 0 121.000000 39.000000" preserveAspectRatio="xMidYMid meet">
                <metadata>
                  Created by potrace 1.10, written by Peter Selinger 2001-2011
                </metadata>
                <g transform="translate(0.000000,39.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                  <path d="M85 210 l0 -90 57 0 c38 0 62 5 72 16 20 19 21 63 2 70 -12 5 -12 9
0 32 21 41 -4 62 -75 62 l-56 0 0 -90z m105 40 c0 -16 -7 -20 -35 -20 -28 0
-35 4 -35 20 0 16 7 20 35 20 28 0 35 -4 35 -20z m5 -75 c0 -16 -8 -21 -37
-23 -35 -3 -38 -1 -38 23 0 24 3 26 38 23 29 -2 37 -7 37 -23z" />
                  <path d="M545 210 c0 -79 2 -90 18 -90 15 0 17 11 17 90 0 79 -2 90 -17 90
-16 0 -18 -11 -18 -90z" />
                  <path d="M610 290 c0 -5 9 -10 20 -10 11 0 20 5 20 10 0 6 -9 10 -20 10 -11 0
-20 -4 -20 -10z" />
                  <path d="M283 252 c-43 -27 -33 -117 14 -128 32 -8 83 13 63 26 -8 5 -26 6
-41 3 -18 -3 -28 0 -32 11 -5 13 2 16 38 16 38 0 45 3 45 20 0 40 -54 73 -87
52z m55 -39 c2 -9 -7 -13 -27 -13 -23 0 -29 4 -24 16 6 17 44 15 51 -3z" />
                  <path d="M418 243 c-37 -43 -27 -108 19 -120 32 -7 83 15 63 27 -8 5 -26 6
-41 3 -18 -3 -28 0 -32 11 -5 13 2 16 38 16 38 0 45 3 45 20 0 25 -34 60 -58
60 -11 0 -26 -8 -34 -17z m60 -30 c2 -9 -7 -13 -27 -13 -23 0 -29 4 -24 16 6
17 44 15 51 -3z" />
                  <path d="M610 190 c0 -60 2 -70 18 -70 14 0 17 10 17 70 0 60 -2 70 -17 70
-15 0 -18 -10 -18 -70z" />
                  <path d="M690 240 c-59 -59 20 -155 86 -105 21 15 18 17 -40 19 -52 2 -43 26
9 26 46 0 47 0 41 28 -13 52 -60 68 -96 32z m68 -27 c2 -9 -7 -13 -27 -13 -30
0 -39 9 -24 24 11 10 46 3 51 -11z" />
                  <path d="M829 190 c30 -82 45 -86 71 -20 31 80 33 90 16 90 -8 0 -20 -16 -26
-37 -18 -57 -26 -59 -40 -9 -9 32 -18 46 -30 46 -16 0 -15 -7 9 -70z" />
                  <path d="M970 240 c-59 -59 19 -154 84 -105 21 16 20 17 -38 19 -51 2 -43 26
8 26 48 0 54 7 35 43 -23 42 -57 49 -89 17z m64 -25 c4 -11 -2 -15 -24 -15
-29 0 -38 9 -23 23 12 12 41 7 47 -8z" />
                </g>
              </svg>
            </a>
            <button class="c-header_burger u-none@from-small" type="button" data-module="NavButton"></button>
          </header>
        </div>
        <div class="o-scroll_section">
          <section class="c-home-intro item-our-news" id="home">
            <div class="video-bg pl-3">
              <div class="banner">
                <video autoplay playsinline muted loop>
                  <source src="https://video.twimg.com/amplify_video/1252889741126582272/vid/676x360/wb6bkuNPqqWt68Q6.mp4?tag=13" type="video/mp4" />
                </video>
                <h1>News / <br/> Events</h1>
              </div>
            </div>
            <div class="wrap-toolbar d-flex align-items-center">
              <center class="w-100 h-50 ">
                <div class="toolbar-form h-100 w-75 border-dark p-3 d-flex align-items-center">
                  <div class="w-100">
                    <div class="form-group text-left">
                      <label class=" text-left font-size" >Search by keyword</label>
                      <input type="email" class="form-control" placeholder="Search ... ">
                    </div>
                    <div class="form-group text-left">
                      <label for="exampleFormControlInput1">Year</label>
                      <select class="form-control">
                        <option>All year</option>
                      </select>
                    </div>
                    <button class="btn-search px-5">Search</button>
                  </div>
                </div>
              </center>
            </div>
          </section>
        </div>

        <div class="o-scroll_section" id="about">
          <section class="c-block-content item-auto-width js-animate">
            <!-- Query get posts by categories -->
            <?php $GetPostsQuery = new WP_query(); $GetPostsQuery->query('post_status=publish&showposts=8&post_type=post&cat=3'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($GetPostsQuery->have_posts()) : $GetPostsQuery->the_post(); ?>
            <?php $category = get_the_category(); ?>
            <div class="wrap-dup-article">
            <div class="wrap-article">
                <a href="<?php the_permalink();?>">
                    <img class="img" src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full', array( 'class' =>'') ); ?>" width="100%" height="100%"/>
                </a>
                <div class="wrap-text">
                  <div class="title">
                  <a href="<?php the_permalink();?>">
                    <?php the_title();?>
                  </a>
                  </div>
                  <div class="date"><?php echo get_the_date('d-m-Y' ); ?></div>
                  <div class="description"><?php the_excerpt(); ?></div>
                  <div class="wrap-category">
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- Query get posts by categories -->

          </section>
        </div>
      </div>
    </div>
    <a href="#home" class="js-scrollto"  data-offset="60"><div class="btn-back-to-top"></div></a>
    <div class="footer-main">

    </div>
  </div>

  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script type='text/javascript' src="<?php bloginfo('template_directory') ?>/js/vendor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/109/three.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
  <script type='text/javascript' src="<?php bloginfo('template_directory') ?>/js/hover-effect.umd.js"></script>

  <script type='text/javascript'>
    /* <![CDATA[ */
    var hsData = {};// { "ajaxUrl": "\/wordpress\/wp-admin\/admin-ajax.php", "spriteUrl": "https:\/\/homesociete.ca\/themes\/homesociete\/dist\/images\/sprite.svg", "loaderUrl": "https:\/\/homesociete.ca\/themes\/homesociete\/resources\/assets\/jsons\/loader.json", "l10n": { "errorTryAgain": "An error occurred. Please try again.", "errorTryLater": "An error occurred. Please try later.", "unknownError": "Something went wrong." }, "recaptcha": { "siteKey": "6Leiv5cUAAAAADJzrKq3_Nqsmq75Qm-bQaZ5UKDf" } };
    /* ]]> */

    var hoverDistort = new hoverEffect({
      parent: document.querySelector('.img-main'),
      intensity: 0.5,
      image1: 'images/svg/page3/sv2.jpg',
      image2: 'images/svg/page3/sv3.jpg',
      displacementImage: 'images/svg/page3/hinhtong.svg'
    });

  </script>
  <script type='text/javascript' src="<?php bloginfo('template_directory') ?>/js/app.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>

</html>