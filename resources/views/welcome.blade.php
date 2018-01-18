<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page Title -->
    <title>April & Louise Wedding</title>

    <meta name="keywords" content="onepage, single page, band template, retina ready, responsive, modern html5 template, bootstrap, css3, music, band" />
    <meta name="description" content="Lilac - Responsive One-Page Wedding HTML5 Template" />
    <meta name="author" content="Wisely Themes" />

    <!-- Mobile Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" type="image/jpg" href="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/fav_touch_icons/favicon.jpg') }}" />
    <link rel="apple-touch-icon" href="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/fav_touch_icons/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/fav_touch_icons/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/fav_touch_icons/apple-touch-icon-114x114.png') }}" />

    <!-- IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Google Web Font -->

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Open+Sans+Condensed:300" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="{{ \Illuminate\Support\Facades\URL::asset('lilac/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template CSS -->
    <link href="{{ \Illuminate\Support\Facades\URL::asset('lilac/css/style.css') }}" rel="stylesheet" />

    <!-- Modernizr -->
    <script src="{{ \Illuminate\Support\Facades\URL::asset('lilac/js/modernizr-2.6.2.min.js') }}"></script>
    <style type="text/css">
        #home {
            background-image: url("{{ \Illuminate\Support\Facades\URL::asset('lilac/images/CoverPhoto4.jpg') }}") !important;
            background-position: center;
            background-position-x: 45%;
            background-position-y: 55%;
        }
    </style>

</head>
<body>
{{--<div id="preloader"><img src="lilac/images/logo.png" alt="" /><div class="heartbeat"></div></div> <!-- PRELOADER -->--}}

<!-- BEGIN WRAPPER -->
<div id="wrapper">

    <!-- BEGIN HEADER -->
    <header id="header">
        <section class="nav-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        {{--<a href="#home" class="nav-logo"><img src="lilac/images/logo.png" alt="" /></a>--}}

                        <!-- BEGIN MAIN MENU -->
                        <nav class="navbar">
                            <button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>

                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#home" data-toggle="dropdown" data-hover="dropdown">Home<b class="caret"></b></a>
                                   {{-- <ul class="dropdown-menu">
                                        <li><a href="index.html">Home Slideshow</a></li>
                                        <li><a href="index-countdown.html">Home Countdown<br><small>(BG Image Grid)</small></a></li>
                                        <li><a href="index-video.html">Home Video</a></li>
                                    </ul>--}}
                                </li>

                                <li class="dropdown">
                                    <a href="#ourstory" data-toggle="dropdown" data-hover="dropdown">Our Story<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#loveline">Loveline</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#thewedding" data-toggle="dropdown" data-hover="dropdown">The Wedding<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#location">The Wedding Location</a></li>
                                        <li><a href="#bridesmaidsgroomsmen">Bridesmaids & Groomsmen</a></li>
                                        <li><a href="#weddinggifts">Wedding Gifts</a></li>
                                        {{--<li class="dropdown-submenu">
                                            <a href="#">Another Menu</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Another Menu</a></li>
                                                <li><a href="#">Another Menu</a></li>
                                            </ul>
                                        </li>--}}
                                    </ul>
                                </li>

                                <li><a href="#gallery">Gallery</a></li>

                               {{-- <li class="dropdown">
                                    <a href="#blog" data-toggle="dropdown" data-hover="dropdown">Blog<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-single.html">Blog Single Post</a></li>
                                    </ul>
                                </li>--}}

                                <li @if ($guest->status != 0 || !$guest->id) style='display:none' @endif><a href="#rsvp">RSVP/Contact</a></li>
                            </ul>
                        </nav>
                        <!-- END MAIN MENU -->

                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- END HEADER -->

    <!-- BEGIN HOME SECTION -->
    <section id="home" class="divider-bottom-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-title curve">April & Louise</div>
                    <div class="hero-divider"></div>
                    <div class="hero-subtitle curve2">22 March 2018</div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME SECTION -->


    <!-- BEGIN OUR STORY SECTION -->
    <section id="ourstory">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title">Our Love Story...</h1>
                    <p class="section-desc">
                        If we had to tell you one thing about us... it would be that we're so thankful. Thankful that God brought us together.  In life you interact with a lot of<br>different people, but only once in a lifetime do you find someone who is your perfect match. We're so excited to be getting married and most of all<br>excited to share our lives with one another. We are also grateful for the support of our family and friends over the past two years and feel blessed<br>to have you all in our lives. We look forward to sharing this special moment with you!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="story-elem col-sm-4 col-sm-offset-2" data-animation-direction="from-left" data-animation-delay="100">
                    <div class="balloon-left" data-animation-direction="from-bottom" data-animation-delay="600">I do!</div>
                    <div class="image">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/bride.jpg') }}" alt="" />
                        <div class="hover-info">
                            <ul class="sn-icons">
                                <li><a href="https://www.facebook.com/iamiping" title="Facebook"  target="_blank"><i class="fa fa-facebook"></i></a></li>
                                {{--<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <h3>April Navales<small>4.8.1990</small></h3>
                    <p>April is amazing. When I first met her I knew she was amazing and every passing day reminds me of just how amazing she is!<br><br>I really love her incredibly unique blend of talents, interests, and personality. She's a talented artist, always excited about trying new things, and a genuinely loving person.<br><br>She's everything I've always dreamed of and I'm so excited to spend the rest of my life with her!</p>
                </div>
                <div class="story-elem col-sm-4" data-animation-direction="from-right" data-animation-delay="100">
                    <div class="balloon-right" data-animation-direction="from-bottom" data-animation-delay="900">Me too!</div>
                    <div class="image">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/groom.jpg') }}" alt="" />
                        <div class="hover-info">
                            <ul class="sn-icons">
                                <li><a href="https://www.facebook.com/zuilse7en" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                               {{-- <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <h3> Louise Namoc<small>2.11.1986</small></h3>
                    <p>Someone once told me that "when you meet the right person, you'll know." Well, I just knew. Right away, we connected  in a way that left me feeling whole and complete.<br><br> Louise has a truly amazing heart and I love how genuine and balanced he is about everything.<br><br>I am so incredibly blessed and excited to spend everyday for the rest of my life with my best friend!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END OUR STORY SECTION -->

    <!-- BEGIN QUOTE SECTION -->
    <section class="parallax quote-fullwidth bg-color-overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    Today and always, beyond tomorrow, I need you beside me, always as my best friend, lover and forever soul mate.
                </div>
            </div>
        </div>
    </section>
    <!-- END QUOTE SECTION -->


    <!-- BEGIN TIMELINE SECTION -->
    <section id="loveline" class="no-padding-top divider-bottom-2 divider-pattern divider-bg-color">
        <div class="container">
            <div class="row">
                <div class="timeline">
                    <div class="year" data-animation-direction="from-top" data-animation-delay="250"><span class="ribbon">2014</span></div>

                    <div class="event_left" data-animation-direction="from-right" data-animation-delay="250">
                        <div class="event_panel">
                            <h3>03 May: He saw Her</h3>
                            <p> Louise and April crossed paths multiple times in college, but it wasn't until after  Louise graduated that they met through mutual friends from Oregon State University. The first night they officially met was at Kell's Irish Pub, downtown Portland.</p>
                            <p> Louise spotted April and asked their mutual friend Tom about her. At the end of the night, Tom insisted that  Louise and April talk on the phone, so he called April, handed  Louise the phone, and the rest is history...</p>
                        </div>
                    </div>

                    <div class="event_right" data-animation-direction="from-left" data-animation-delay="550">
                        <div class="event_panel">
                            <h3>10 June: The First date</h3>
                            <p> Louise took April to Thirst Wine Bar on the Willamette River for their first date in June of 2014, just before Sahra went back to OSU for her last year of school. </p>
                            <p>After dinner and drinks, they decided to walk the docks on the Portland Waterfront, but April couldn't even imagine what awaited her.  Louise had also planned a romantic boat trip that turned out to be one of the most fun and unforgettable moments of their lives.</p>
                        </div>
                    </div>

                    <div class="event_left" data-animation-direction="from-right" data-animation-delay="350">
                        <div class="event_panel videoEmbed">
                            <h3>28 June: The First Kiss</h3>
                            <p> Louise was extremely nervous. He was afraid to expose his feelings to April, but didn’t want to risk staying in the friend zone. So it was now or never! After all, April was the one.  After a pleasant walk in the park, it was time to say goodbye. Just as she started to walk away from him, he grabbed her waist and pulled her close. Then, he kissed her with passion. "It was about time!" she said. It was...PERFECT!</p>
                            <img src="http://placehold.it/750x520" alt="" />
                        </div>
                    </div>

                    <div class="event_right" data-animation-direction="from-left" data-animation-delay="650">
                        <div class="event_panel">
                            <h3>19 November: The First Vacations</h3>
                            <p>They had taken overnight trips before, but this was their first huge vacations outside the USA. April and  Louise travelled to the Baltic region and visited a number of countries including Iceland, Finland, Den Louise, Russia, Poland and Germany . It was a 24 day fabulous trip! It was super intense but so rewarding for both. </p>

                            <div class="owl-carousel timeline-gallery">
                                <div class="item">
                                    <a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery-timeline]" title="Our Vacations"><span class="btn btn-default2">+</span></a>
                                    <img src="http://placehold.it/300x300" alt="" />
                                </div>

                                <div class="item">
                                    <a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery-timeline]" title="Our Vacations"><span class="btn btn-default2">+</span></a>
                                    <img src="http://placehold.it/300x300" alt="" />
                                </div>

                                <div class="item">
                                    <a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery-timeline]" title="Our Vacations"><span class="btn btn-default2">+</span></a>
                                    <img src="http://placehold.it/300x300" alt="" />
                                </div>
                                <div class="item">
                                    <a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery-timeline]" title="Our Vacations"><span class="btn btn-default2">+</span></a>
                                    <img src="http://placehold.it/300x300" alt="" />
                                </div>
                                <div class="item">
                                    <a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery-timeline]" title="Our Vacations"><span class="btn btn-default2">+</span></a>
                                    <img src="http://placehold.it/300x300" alt="" />
                                </div>
                                <div class="item">
                                    <a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery-timeline]" title="Our Vacations"><span class="btn btn-default2">+</span></a>
                                    <img src="http://placehold.it/300x300" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="year" data-animation-direction="from-top" data-animation-delay="250"><span class="ribbon">2015</span></div>

                    <div class="event_left" data-animation-direction="from-right" data-animation-delay="450">
                        <div class="event_panel">
                            <h3>14 April: They moved together</h3>
                            <p>Just a year after they met,  Louise and April finally decided to move in together. Although it seemed a hasty decision, they thought it made perfect sense at that point in their lives. </p>
                            <p>Due to April's work, which required some schedule flexibility, it began to be increasingly difficult for them to be with one another. It was at this momment that both realized they needed (more than ever), the support and comfort that only they could give each other.</p>
                            <p>With the help of their families, they moved forward with this important decision and bought their first home together. And I must add that ... it was the best decision they ever made!</p>
                        </div>
                    </div>

                    <div class="event_right" data-animation-direction="from-left" data-animation-delay="750">
                        <div class="event_panel">
                            <h3>04 July: She said yes!</h3>
                            <p>So how did  Louise pop the question? On a Cruise ... off the shore ... of the Cayman Islands! (YES!) On their way down to dinner with the Ship's Captain,  Louise's nerves got the best of him and he pulled April back to the room and straight onto the balcony for the best proposal a girl could ask for!</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/pyFBrlyj1p0?start=4" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="timeline_footer">
                    <div class="punchline">And so the <span>Adventure<br>begins</span></div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TIMELINE SECTION -->

    <!-- BEGIN THE WEDDING SECTION -->
    <section id="thewedding" class="bg-color pattern divider-bottom-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title">The Wedding</h1>
                </div>
            </div>
            <div class="row center">
                <div class="invite" data-animation-direction="from-left" data-animation-delay="100">
                    <div class="invite_authors">
                        April
                        <span><i class="icon icon-arrow-right"></i>And<i class="icon icon-arrow-left"></i></span>
                        Louise
                    </div>

                    <div class="invite_info">
                        Happily invite you to celebrate their wedding
                        <div class="date">
                            22 . 03 . 2018
                        </div>
                        <div class="hour">at one thirty in the afternoon</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END THE WEDDING SECTION -->

    <!-- BEGIN WEDDING LOCATION SECTION -->
    <section id="location">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">The Wedding Location</h2>
                </div>
            </div>
        </div>

        <div id="map_canvas"></div>

        <div class="map_pins">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="pins">
                            <li><i class="fa fa-bell-o"></i>Ceremony</li>
                            <li><i class="fa fa-glass"></i>Reception</li>
                            <li><i class="fa fa-bed"></i>Accomodations Nearby</li>
                            <li><i class="fa fa-plane"></i>Transportation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="location-info timeline">
                        <div class="event_left" data-animation-direction="from-right" data-animation-delay="100">
                            <div class="event_panel">
                                <div class="info-left">
                                    <h4>Ceremony <small>1:30 PM</small></h4>
                                </div>

                                <div class="info-right">
                                    <h4>Chapel of San Pedro Calungsod</h4>
                                    <p>South Road Properties, Cebu City, Cebu PH<br>10.2817519, 123.8755772</p>
                                </div>
                            </div>
                        </div>

                        <div class="event_right" data-animation-direction="from-left" data-animation-delay="100">
                            <div class="event_panel">
                                <div class="info-left">
                                    <h4>Reception <small>5:30 PM</small></h4>
                                </div>

                                <div class="info-right">
                                    <h4>Oakridge Pavilion</h4>
                                    <p>880 A. S. Fortuna St, Mandaue City, Cebu PH<br>10.342283, 123.9157003</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="center">
                        <a href="#rsvp" class="btn ribbon btn-color scrollto"><i class="icon icon-arrow-right"></i>RSVP<i class="icon icon-arrow-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END WEDDING LOCATION SECTION -->

    <!-- BEGIN BRIDESMAIDS & GROOMSMEN SECTION -->
    <section id="bridesmaidsgroomsmen" class="divider-bottom-3 parallax bg-color-overlay" data-stellar-background-ratio="0.5">
        <div class="divider-top-1"></div> <!-- The class "divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Bridesmaids & Groomsmen</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="bridesmaids-groomsmen-buttons center">
                        <button data-slider="bridesmaids-slider" class="btn btn-default2 active">Bride Side</button>
                        <button data-slider="groomsmen-slider" class="btn btn-default2">Groom Side</button>
                    </div>

                    <!-- Begin Bridesmaid slider -->
                    <div id="bridesmaids-slider" class="owl-carousel bridesmaids-groomsmen-slider">
                        <div class="item" data-animation-direction="from-bottom" data-animation-delay="250">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>Rubie Mae Navales</h3>
                                    <span class="title">Maid of honour</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/brides-maid1.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="item" data-animation-direction="from-bottom" data-animation-delay="450">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>Nina Marie Navales</h3>
                                    <span class="title">Bridesmaid</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/brides-maid2.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="item" data-animation-direction="from-bottom" data-animation-delay="650">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>Sarah Mae Navales</h3>
                                    <span class="title">Bridesmaid</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/brides-maid3.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="item" data-animation-direction="from-bottom" data-animation-delay="850">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>Floralyn Navales</h3>
                                    <span class="title">Bridesmaid</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/brides-maid4.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>Sidney Sedale King</h3>
                                    <span class="title">Bridesmaid</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/brides-maid5.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>Elaine Mae Chua</h3>
                                    <span class="title">Bridesmaid</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/brides-maid6.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- End Bridesmaid slider -->

                    <!-- Begin Groomsmen slider with class "hide" -->
                    <div id="groomsmen-slider" class="owl-carousel bridesmaids-groomsmen-slider hide">
                        <div class="item">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>Lawrence George Namoc</h3>
                                    <span class="title">Best man</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/grooms-men1.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>Gabriel Nathaniel Dizon</h3>
                                    <span class="title">Groomsmen</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/grooms-men2.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>Robert Vencint Navales</h3>
                                    <span class="title">Groomsmen</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/grooms-men3.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>Moon Ray Lo</h3>
                                    <span class="title">Groomsmen</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/grooms-men4.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>James Arnold Nogra</h3>
                                    <span class="title">Groomsmen</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/grooms-men5.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <a href="#" class="info">
                                    <h3>John Ervyn Soriano</h3>
                                    <span class="title">Groomsmen</span>
                                </a>
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('lilac/images/grooms-men6.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- End Groomsmen slider -->

                </div>
            </div>
        </div>
    </section>
    <!-- END BRIDESMAIDS & GROOMSMEN SECTION -->

    <!-- BEGIN WEDDING GIFTS SECTION -->
    <section id="weddinggifts">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Wedding Gifts</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <ul class="wedding-gifts clearfix">
                        <li id="gift-list" data-animation-direction="from-bottom" data-animation-delay="250">
                            <i class="fa fa-gift"></i><br>
                            <h3>Check our<br>wedding gift list</h3>
                            <div class="info">
                                <a href="#" class="img"><img src="lilac/images/macys.png" alt="Macy's" /></a>
                                <a href="#" class="img"><img src="lilac/images/target.png" alt="Target" /></a>
                            </div>
                        </li>
                        <li id="help-wedding" data-animation-direction="from-bottom" data-animation-delay="450">
                            <i class="fa fa-glass"></i><br>
                            <h3>Want to help<br>with the wedding</h3>
                            <div class="info">
                                <br><a href="#rsvp" class="btn btn-default2 scrollto"><i class="fa fa-envelope"></i>Contact us</a>
                            </div>
                        </li>
                        <li id="help-honeymoon" data-animation-direction="from-bottom" data-animation-delay="650">
                            <i class="fa fa-plane"></i><br>
                            <h3>Want to help<br>with the honeymoon</h3>
                            <div class="info">
                                <a href="#" class="btn btn-default2">$15</a>
                                <a href="#" class="btn btn-default2">$30</a>
                                <a href="#" class="btn btn-default2">$50</a>
                                <br>
                                <a href="#" id="otheramount" class="btn btn-default2">Other Amount</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END WEDDING GIFTS SECTION -->

    <!-- BEGIN GALLERY SECTION -->
    <section id="gallery" class="divider-bottom-3 bg-color-overlay parallax no-padding-bottom no-padding-top" data-stellar-background-ratio="0.5">
        <div class="divider-top-2"></div> <!-- The class "divider-top-2" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title">Gallery</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="section-desc center">
                        <h3 class="gallery-desc">We would love to see the wedding through your eyes.<br>Use <strong>Twitter</strong> and <strong>Instagram</strong> to share the best moments with us.</h3>
                        <h1>#AprilandLouise</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery-wrapper">
            <div class="gallery-left"></div>
            <div class="gallery-right"></div>

            <div class="gallery-scroller">
                <ul>
                    <li>
                        <span><a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery]" title="Wedding Photos"><i class="fa fa-link"></i></a></span>
                        <img src="http://placehold.it/380x380" alt="" />
                    </li>

                    <li class="instagram"></li> <!-- The list item with class "instagram" will be automatically populated with an Instagram photo -->

                    <li>
                        <span><a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery]" title="Wedding Photos"><i class="fa fa-link"></i></a></span>
                        <img src="http://placehold.it/380x380" alt="" />
                    </li>

                    <li class="instagram"></li> <!-- The list item with class "instagram" will be automatically populated with an Instagram photo -->

                    <li class="tweet"></li> <!-- The list item with class "tweet" will be automatically populated with an Twitter post -->

                    <li class="instagram"></li> <!-- The list item with class "instagram" will be automatically populated with an Instagram photo -->

                    <li>
                        <span><a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery]" title="Wedding Photos"><i class="fa fa-link"></i></a></span>
                        <img src="http://placehold.it/380x380" alt="" />
                    </li>

                    <li class="tweet"></li> <!-- The list item with class "tweet" will be automatically populated with an Twitter post -->
                </ul>
                <ul>
                    <li class="instagram"></li> <!-- The list item with class "instagram" will be automatically populated with an Instagram photo -->

                    <li class="tweet"></li> <!-- The list item with class "tweet" will be automatically populated with an Twitter post -->

                    <li class="instagram"></li> <!-- The list item with class "instagram" will be automatically populated with an Instagram photo -->

                    <li>
                        <span><a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery]" title="Wedding Photos"><i class="fa fa-link"></i></a></span>
                        <img src="http://placehold.it/380x380" alt="" />
                    </li>

                    <li class="instagram"></li> <!-- The list item with class "instagram" will be automatically populated with an Instagram photo -->

                    <li>
                        <span><a href="http://placehold.it/750x500" data-gal="prettyPhoto[gallery]" title="Wedding Photos"><i class="fa fa-link"></i></a></span>
                        <img src="http://placehold.it/380x380" alt="" />
                    </li>

                    <li class="tweet"></li> <!-- The list item with class "tweet" will be automatically populated with an Twitter post -->

                    <li class="instagram"></li> <!-- The list item with class "instagram" will be automatically populated with an Instagram photo -->
                </ul>
            </div>
        </div>
    </section>
    <!-- END GALLERY SECTION -->

    <!-- BEGIN BLOG SECTION -->
    <section id="blog" class="divider-bottom-2 divider-pattern divider-bg-color" style="margin-top: 147px !important;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title" style="background: none !important"></h1>
                </div>
            </div>

            <div class="row">
                {{--&lt;!&ndash; BEGIN BLOG MAIN CONTENT &ndash;&gt;
                <div class="col-sm-8">
                    &lt;!&ndash; BEGIN BLOG LISTING &ndash;&gt;
                    <div class="blog-listing clearfix">
                        <div class="row">
                            <div class="item col-md-6">&lt;!&ndash; BEGIN BLOG ITEM &ndash;&gt;
                                <div class="image">
                                    <a href="blog-single.html">
                                        <span class="btn btn-default2 btn-small"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="http://placehold.it/750x580" alt="" />
                                </div>
                                <div class="date">
                                    <div class="ribbon">23 Aug</div>
                                </div>
                                <div class="info-blog">
                                    <h3>
                                        <a href="blog-single.html">5 ways to have a beautiful wedding</a>
                                    </h3>
                                    <p>When you consider that the average wedding costs over $20,000, you may be thinking that there’s no way you can afford the day of your dreams.</p>
                                    <ul class="bottom-info">
                                        <li><i class="fa fa-calendar"></i> August 23, 2015</li>
                                        <li><i class="fa fa-comments-o"></i> 3</li>
                                        <li><i class="fa fa-tags"></i> Wedding, Ideas, Tips</li>
                                    </ul>
                                </div>
                            </div>&lt;!&ndash; END BLOG ITEM &ndash;&gt;

                            <div class="item col-md-6">&lt;!&ndash; BEGIN BLOG ITEM &ndash;&gt;
                                <div class="image">
                                    <a href="blog-single.html">
                                        <span class="btn btn-default2 btn-small"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="http://placehold.it/750x580" alt="" />
                                </div>
                                <div class="date">
                                    <div class="ribbon">17 Aug</div>
                                </div>
                                <div class="info-blog">
                                    <h3>
                                        <a href="blog-single.html">DIY: A Garden Rose Bouquet</a>
                                    </h3>
                                    <p>If you've always dreamt of carrying a bouquet of old fashioned garden roses down the aisle, but your budget doesn't quite match up to the dream, try this!</p>
                                    <ul class="bottom-info">
                                        <li><i class="fa fa-calendar"></i> August 17, 2015</li>
                                        <li><i class="fa fa-comments-o"></i> 2</li>
                                        <li><i class="fa fa-tags"></i> Bouquet, Flowers</li>
                                    </ul>
                                </div>
                            </div>&lt;!&ndash; END BLOG ITEM &ndash;&gt;
                        </div>

                        <div class="row">
                            <div class="item col-md-6">&lt;!&ndash; BEGIN BLOG ITEM &ndash;&gt;
                                <div class="image">
                                    <a href="blog-single.html">
                                        <span class="btn btn-default2 btn-small"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="http://placehold.it/750x580" alt="" />
                                </div>
                                <div class="date">
                                    <div class="ribbon">30 Jul</div>
                                </div>
                                <div class="info-blog">
                                    <h3>
                                        <a href="blog-single.html">Wedding Cakes: What's Trending?</a>
                                    </h3>
                                    <p>Find out what's hot in wedding cakes this year;<br>we've asked a few of our favorite cake designers<br>to weigh in!</p>
                                    <ul class="bottom-info">
                                        <li><i class="fa fa-calendar"></i> July 30, 2015</li>
                                        <li><i class="fa fa-comments-o"></i> 1</li>
                                        <li><i class="fa fa-tags"></i> Wedding, Cake, Trends</li>
                                    </ul>
                                </div>
                            </div>&lt;!&ndash; END BLOG ITEM &ndash;&gt;

                            <div class="item col-md-6">&lt;!&ndash; BEGIN BLOG ITEM &ndash;&gt;
                                <div class="image">
                                    <a href="blog-single.html">
                                        <span class="btn btn-default2 btn-small"><i class="fa fa-file-o"></i> Read More</span>
                                    </a>
                                    <img src="http://placehold.it/750x580" alt="" />
                                </div>
                                <div class="date">
                                    <div class="ribbon">26 Jul</div>
                                </div>
                                <div class="info-blog">
                                    <h3>
                                        <a href="blog-single.html">Destinations for our honeymoon</a>
                                    </h3>
                                    <p>Looking for a gorgeous, exotic place for your destination wedding? There are about a million reasons why Huatulco, Mexico is the perfect spot...</p>
                                    <ul class="bottom-info">
                                        <li><i class="fa fa-calendar"></i> July 26, 2015</li>
                                        <li><i class="fa fa-comments-o"></i> 2</li>
                                        <li><i class="fa fa-tags"></i> Honeymoon, vacations</li>
                                    </ul>
                                </div>
                            </div>&lt;!&ndash; END BLOG ITEM &ndash;&gt;
                        </div>
                    </div>
                    &lt;!&ndash; END BLOG LISTING &ndash;&gt;--}}

                    {{--&lt;!&ndash; BEGIN PAGINATION &ndash;&gt;
                    <div class="pagination">
                        <ul id="previous">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        </ul>
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                        <ul id="next">
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    &lt;!&ndash; END PAGINATION &ndash;&gt;--}}
                {{--</div>
                &lt;!&ndash; END BLOG MAIN CONTENT &ndash;&gt;


                &lt;!&ndash; BEGIN SIDEBAR &ndash;&gt;
                <div class="sidebar col-sm-4">
                    <h2 class="section-title">Categories</h2>
                    <ul class="categories">
                        <li><a href="#">Wedding <span>(4)</span></a></li>
                        <li><a href="#">Honeymoon <span>(2)</span></a></li>
                        <li><a href="#">Ideas <span>(5)</span></a></li>
                        <li><a href="#">DIY <span>(1)</span></a></li>
                        <li><a href="#">Center pieces <span>(2)</span></a></li>
                        <li><a href="#">Bouquet <span>(1)</span></a></li>
                        <li><a href="#">Wedding Dresses <span>(3)</span></a></li>
                    </ul>

                    &lt;!&ndash; BEGIN ARCHIVES ACCORDION &ndash;&gt;
                    <h2 class="section-title">Archives</h2>
                    <div id="accordion" class="panel-group blog-accordion">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                                        <i class="fa fa-chevron-right"></i> 2015 (10)
                                    </a>
                                </div>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">July (3)</a></li>
                                        <li><a href="#">June (4)</a></li>
                                        <li><a href="#">May (1)</a></li>
                                        <li><a href="#">April (2)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                        <i class="fa fa-chevron-right"></i> 2014 (8)
                                    </a>
                                </div>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">May (1)</a></li>
                                        <li><a href="#">April (3)</a></li>
                                        <li><a href="#">March (1)</a></li>
                                        <li><a href="#">February (2)</a></li>
                                        <li><a href="#">January (1)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                        <i class="fa fa-chevron-right"></i> 2013 (5)
                                    </a>
                                </div>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">April (1)</a></li>
                                        <li><a href="#">March (1)</a></li>
                                        <li><a href="#">February (2)</a></li>
                                        <li><a href="#">January (1)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    &lt;!&ndash; END  ARCHIVES ACCORDION &ndash;&gt;

                    &lt;!&ndash; BEGIN TAGS &ndash;&gt;
                    <h2 class="section-title">Tags</h2>
                    <ul class="tags col-sm-12">
                        <li><a href="#">Wedding</a></li>
                        <li><a href="#">Bride</a></li>
                        <li><a href="#">Groom</a></li>
                        <li><a href="#">marriage</a></li>
                        <li><a href="#">Bouquets</a></li>
                        <li><a href="#">One-page</a></li>
                        <li><a href="#">Responsive</a></li>
                        <li><a href="#">Template</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Css3</a></li>
                    </ul>
                    &lt;!&ndash; END TAGS &ndash;&gt;
                </div>
                &lt;!&ndash; END SIDEBAR &ndash;&gt;--}}
            </div>
        </div>
    </section>
    <!-- END BLOG SECTION -->

    <!-- BEGIN CONTACTS SECTION -->
    <section id="rsvp" class="bg-color pattern" @if ($guest->status != 0 || !$guest->id) style='display:none' @endif>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title">RSVP</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 center">

                    <form id="form-rsvp" method="post" action="#" id="rsvp">
                        <div class="form-wrap">
                            <section class="highlighted">
                                <h3><i class="icon icon-arrow-right"></i>Will you be attending the wedding?<i class="icon icon-arrow-left"></i></h3>
                                <div data-value="attending_wedding" class="radio-lilac col-sm-12">
                                    <button class="btn btn-default" data-value="yes"><i class="fa fa-smile-o"></i>Yes</button>
                                    <button class="btn btn-default" data-value="no"><i class="fa fa-frown-o"></i>No</button>
                                </div>
                                {{--<div class="col-sm-6">
                                    <input type="text" name="Name" placeholder="YOUR NAME*" class="form-control required fromName" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="Email" placeholder="YOUR EMAIL*" class="form-control required fromEmail"  />
                                </div>--}}
                            </section>

                            <section class="rsvp-details">
                                @if($guest->age > 0)
                                <h3><i class="icon icon-arrow-right"></i>Who else is comming with you?<i class="icon icon-arrow-left"></i></h3>
                                <div class="col-md-8">
                                    <input type="text" name="guest" id="guest" placeholder="GUEST NAME" class="form-control" />
                                </div>
                                <div class="col-md-4">
                                    <button id="add_guest" class="btn btn-color add_button" data-input="guest" data-wrapper="guest_list">+ Add <span id="guest-count">({{ $guest->age }})</span> Guest</button>
                                </div>
                                @endif
                               <div id="guest_list" class="add_list col-md-12" data-count="2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="guest_1" value="{{ $guest->first_name.' '.$guest->last_name }}" />
                                        <span class="input-group-addon"><!--i class="fa fa-trash"></i--></span>
                                    </div>
                                </div>
                            </section>

                            <section class="highlighted rsvp-details">
                                <div class="col-sm-12">
                                    <textarea name="Message" placeholder="LEAVE A NOTE (OPTIONAL)" class="form-control"></textarea>
                                    <div class="form_status_message"></div>
                                </div>
                            </section>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="center rsvp-details">
                            <button type="submit" class="btn ribbon btn-color submit_form"><span class="line_above"></span><i class="icon icon-arrow-right"></i>Submit<i class="icon icon-arrow-left"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACTS SECTION -->

    <!-- BEGIN FOOTER -->
    <footer id="footer" class="bg-color pattern">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; 2018 Louise & Eping. All rights reserved.</p>

                    <!-- BEGIN SOCIAL ICONS -->
                    <ul class="sn-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <!-- END SOCIAL ICONS -->
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

</div>
<!-- END WRAPPER -->


<!-- Libs -->
<script src="{{ \Illuminate\Support\Facades\URL::asset('lilac/js/jquery-1.11.3.min.js') }}"></script>
<!-- Google Maps: change YOUR_API_KEY with your Google API Key. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB66kIZHfGP0FCDrEd3rIXegdiS0DXOO2w" type="text/javascript"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('lilac/js/common.js') }}" type="text/javascript"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('lilac/twitter/jquery.tweet.min.js') }}" type="text/javascript" charset="utf-8"></script>

<!-- Map  Louiseers list -->
<script src="{{ \Illuminate\Support\Facades\URL::asset('lilac/js/map.markers.js') }}"></script>

<!-- Template Scripts -->
<script src="{{ \Illuminate\Support\Facades\URL::asset('lilac/js/variables.js') }}"></script>
{{--<script src="{{ \Illuminate\Support\Facades\URL::asset('lilac/js/scripts.js') }}"></script>--}}

<!-- Hero Background Image Slideshow Scripts -->
<script src="{{ \Illuminate\Support\Facades\URL::asset('lilac/js/slideshow/supersized.js') }}" type="text/javascript"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('lilac/js/slideshow/slideshow.js') }}" type="text/javascript"></script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));


    /*
     * Author: Wisely Themes
     * Author URI: http://themeforest.net/user/wiselythemes
     * Theme Name: Lilac
     * Version: 1.0.0
     */

    /*jslint browser:true, devel: true, this: true */
    /*global google, window, RichMarker, jQuery, mobileMenuTitle, hero100PercentHeight, twitter_username, map_canvas_id, map_color, map_initial_zoom, map_initial_latitude, map_initial_longitude, use_default_map_style, contact_form_success_msg, contact_form_error_msg, c_days, c_hours, c_minutes, c_seconds, countdownEndMsg, Waypoint, Freewall, map_markers  */

    var Lilac;

    (function ($) {
        "use strict";

        $(document).ready(function () {

            $('.info').click(function(e) {
                e.preventDefault();
            });

            $('.rsvp-details').hide();

            $('.btn-default').click(function () {
                if($(this).data('value') == "no")
                {
                    $('.submit_form').click();
                }
                else
                {
                    $('.rsvp-details').show();
                    return false;
                }
            });

            Lilac = {

                initialized: false,
                mobMenuFlag: false,
                wookHandler: null,
                wookOptions: null,
                scrollPos: 0,
                sendingMail: false,
                mobileMenuTitle: mobileMenuTitle,
                hero100PercentHeight: hero100PercentHeight,
                twitter_username: twitter_username,
                map_canvas_id: map_canvas_id,
                map_color: map_color,
                map_initial_zoom: map_initial_zoom,
                map_initial_latitude: map_initial_latitude,
                map_initial_longitude: map_initial_longitude,
                use_default_map_style: use_default_map_style,
                contact_form_success_msg: contact_form_success_msg,
                contact_form_error_msg: contact_form_error_msg,
                c_days: c_days,
                c_hours: c_hours,
                c_minutes: c_minutes,
                c_seconds: c_seconds,
                countdownEndMsg: countdownEndMsg,

                init: function () {

                    var $tis = this;

                    if ($tis.initialized) {
                        return;
                    }

                    $tis.initialized = true;
                    $tis.build();
                    $tis.events();
                },

                build: function () {

                    var $tis = this;

                    /**
                     * Preloader
                     */
                    $tis.preloader();

                    /**
                     * Navigation
                     */
                    $tis.navigation();

                    /**
                     * Dinamically create the menu for mobile devices
                     */
                    $tis.createMobileMenu();

                    /**
                     * Set the hero height to 100% of window height
                     */
                    $tis.heroHeight();

                    /**
                     * Create curved text
                     */
                    $tis.curvedText();

                    /**
                     * Activate placeholder in older browsers
                     */
                    $('input, textarea').placeholder();

                    /**
                     * Create the Hero background image grid
                     */
                    $tis.bgImageGrid();

                    /**
                     * Initialize Google Maps and populate with concerts locations
                     */
                    $tis.googleMap();

                    /**
                     * Get latest tweets
                     */
                    $tis.getLatestTweets();

                    /**
                     * Get Instagram feed
                     */
                    $tis.getInstagram();

                    /**
                     * Create PrettyPhoto links
                     */
                    $tis.createPrettyPhoto();

                    /**
                     * Create Owl Sliders
                     */
                    $tis.createOwlSliders();

                    /**
                     * Create Gallery
                     */
                    $tis.createGallery();

                    /**
                     * Create Countdown
                     */
                    $tis.countdown();

                    /**
                     * Initiate Parallax
                     */
                    $tis.parallaxItems();

                    /**
                     * Start NiceScroll
                     */
                    $tis.startNiceScroll();
                },

                events: function () {

                    var $tis = this;

                    /**
                     * Functions called on window resize
                     */
                    $tis.windowResize();

                    /**
                     * Resize embed videos
                     */
                    $tis.resizeVideos();

                    /**
                     * Contact form submit
                     */
                    $tis.contactForm();

                    /**
                     * Capture buttons click event
                     */
                    $tis.buttons();

                    /**
                     * Animate elements on scrolling
                     */
                    $tis.animateElems();
                },

                preloader: function () {
                    var isLoaded = setInterval(function () {
                        if (/loaded|complete/.test(document.readyState)) {
                            clearInterval(isLoaded);
                            $('#preloader').fadeOut(500);
                        }
                    }, 10);
                },

                navigation: function () {

                    $('.nav li a').on('click', function (event) {
                        var navActive = $(this),
                            scroll = 0;
                        /*
                         if ($.browser.mobile){
                         $(".nav .dropdown-menu").attr('style', '');

                         if (navActive.parent().hasClass("dropdown") && (!navActive.closest(".dropdown").hasClass("open") || !navActive.closest(".dropdown-menu").css('display') === 'block')) {
                         event.preventDefault();
                         return false;
                         }
                         }
                         */

                        if (navActive.attr('href').charAt(0) === "#") {
                            event.preventDefault();

                            if (navActive.attr('href') !== "#home") {
                                scroll = $(navActive.attr('href')).offset().top - 65;
                            }

                            $('html, body').stop().animate({
                                scrollTop: scroll
                            }, 1500, 'easeInOutExpo', function () {
                                navActive.blur();


                                /*if ($.browser.mobile && navActive.closest(".dropdown").hasClass("open")){
                                 navActive.closest(".dropdown").removeClass("open").children("a:first").attr("aria-expanded", "false");
                                 navActive.closest(".dropdown-menu").css('display', 'none');
                                 }*/
                            });
                        } else {
                            window.open(navActive.attr('href'), "_self");
                        }
                    });

                    var sticky = new Waypoint.Sticky({
                        element: $('.nav-section')
                    });

                    sticky = sticky;

                    $("#wrapper > section").waypoint({
                        handler: function (direction) {
                            var tis = $(this),
                                id = tis[0].element.id;

                            if (direction === "up") {
                                id = tis[0].element.previousElementSibling.id;
                            }

                            $(".nav a").removeClass("active");
                            $('nav a[href="#' + id + '"]').addClass("active");
                        },
                        offset: '50%'
                    });

                    $(window).load(function () {
                        var hash = location.hash.replace('#', '');

                        if (hash !== '') {
                            location.hash = '';
                            $('html, body').stop().animate({
                                scrollTop: $('#' + hash).offset().top - 65
                            }, 1500, 'easeInOutExpo');
                        }

                        sticky = new Waypoint.Sticky({
                            element: $('.nav-section')
                        });
                    });
                },

                createMobileMenu: function (w) {

                    var $tis = this,
                        $wrapper = $('#wrapper'),
                        $navMobile,
                        etype;

                    if ($.browser.mobile) {
                        etype = 'touchstart';
                    } else {
                        etype = 'click';
                    }

                    if (w !== null) {
                        w = $(window).innerWidth();
                    }

                    if (w <= 975 && !$tis.mobMenuFlag) {

                        $('body').prepend('<nav class="nav-mobile"><i class="fa fa-times"></i><h2><i class="fa fa-bars"></i>' + $tis.mobileMenuTitle + '</h2><ul></ul></nav>');

                        $('.nav-mobile > ul').html($('.nav').html());

                        $('.nav-mobile b').remove();

                        $('.nav-mobile ul.dropdown-menu').removeClass().addClass("dropdown-mobile");

                        $navMobile = $(".nav-mobile");

                        $("#nav-mobile-btn").on(etype, function (e) {
                            e.stopPropagation();
                            e.preventDefault();

                            setTimeout(function () {
                                $wrapper.addClass('open');
                                $navMobile.addClass('open');
                                $navMobile.getNiceScroll().show();
                            }, 25);

                            $(document).on(etype, function (e) {
                                if (!$(e.target).hasClass('nav-mobile') && !$(e.target).parents('.nav-mobile').length) {
                                    $wrapper.removeClass('open');
                                    $navMobile.removeClass('open');
                                    $(document).off(etype);
                                }
                            });

                            $('>i', $navMobile).on(etype, function () {
                                $navMobile.getNiceScroll().hide();
                                $wrapper.removeClass('open');
                                $navMobile.removeClass('open');
                                $(document).off(etype);
                            });
                        });

                        $navMobile.niceScroll({
                            autohidemode: true,
                            cursorcolor: "#888888",
                            cursoropacitymax: "0.7",
                            cursorwidth: 10,
                            cursorborder: "0px solid #000",
                            horizrailenabled: false,
                            zindex: "1"
                        });

                        $navMobile.getNiceScroll().hide();

                        $tis.mobMenuFlag = true;

                        $('.nav-mobile li a').on('click', function (event) {
                            var navActive = $(this);
                            var scroll = 0;

                            if (navActive.attr('href') !== "#home") {
                                scroll = $(navActive.attr('href')).offset().top - 65;
                            }

                            $('html, body').stop().animate({
                                scrollTop: scroll
                            }, 1500, 'easeInOutExpo', function () {
                                navActive.blur();
                            });

                            $navMobile.getNiceScroll().hide();
                            $wrapper.removeClass('open');
                            $navMobile.removeClass('open');
                            $(document).off(etype);

                            event.preventDefault();
                        });
                    }
                },

                heroHeight: function () {

                    var $tis = this;

                    if ($tis.hero100PercentHeight) {
                        $("#home").css({minHeight: $(window).innerHeight() + 'px'});

                        $(window).resize(function () {
                            $("#home").css({minHeight: $(window).innerHeight() + 'px'});
                        });
                    }
                },

                bgImageGrid: function () {

                    if ($('#freewall').length) {
                        $("#freewall .item").each(function () {
                            var $item = $(this);
                            $item.width(Math.floor(260 + 200 * Math.random()));
                            $item.css({'background-image': 'url(' + $('>img', $item).attr('src') + ')'});
                            $('>img', $item).remove();
                        });

                        $("#freewall").appendTo("#wrapper");

                        var wall = new Freewall("#freewall");
                        wall.reset({
                            selector: '.item',
                            animate: false,
                            cellW: 20,
                            gutterX: 0,
                            gutterY: 0,
                            onResize: function () {
                                wall.fitWidth();
                            }
                        });
                        wall.fitWidth();
                    }
                },

                googleMap: function () {

                    if ($("#map_canvas").length === 0 || map_markers === 'undefined' || map_markers.length === 0) {
                        return false;
                    }

                    var $tis = this,
                        styles = [],
                        styledMap,
                        myLatlng,
                        mapOptions,
                        map,
                        createMarker,
                        i = 0;

                    if (!(/^\d|\.|-$/.test($tis.map_initial_latitude)) || !(/^\d|\.|-$/.test(map_initial_longitude))) {
                        $tis.map_initial_latitude = map_markers[0].latitude;
                        $tis.map_initial_longitude = map_markers[0].longitude;
                    }

                    myLatlng = new google.maps.LatLng($tis.map_initial_latitude, $tis.map_initial_longitude);

                    if (!this.use_default_map_style) {
                        styles = [
                            {
                                stylers: [
                                    {hue: map_color},
                                    {saturation: -75},
                                    {lightness: 5}
                                ]
                            },
                            {
                                featureType: "administrative",
                                elementType: "labels.text.fill",
                                stylers: [
                                    {saturation: 20},
                                    {lightness: -70}
                                ]
                            },
                            {
                                featureType: "water",
                                elementType: "geometry",
                                stylers: [
                                    {saturation: -50},
                                    {lightness: 40}
                                ]
                            },
                            {
                                featureType: "road",
                                elementType: "geometry",
                                stylers: [
                                    {hue: map_color},
                                    {saturation: -100},
                                    {lightness: 0}
                                ]
                            },
                            {
                                featureType: "road.highway",
                                elementType: "geometry",
                                stylers: [
                                    {hue: map_color},
                                    {saturation: 5},
                                    {lightness: 5}
                                ]
                            },
                            {
                                featureType: "road",
                                elementType: "geometry.stroke",
                                stylers: [
                                    {saturation: 10},
                                    {lightness: 0}
                                ]
                            },
                            {
                                featureType: "road.highway",
                                elementType: "geometry.stroke",
                                stylers: [
                                    {saturation: 0},
                                    {lightness: 20}
                                ]
                            },
                            {
                                featureType: "transit",
                                elementType: "geometry",
                                stylers: [
                                    {hue: map_color},
                                    {saturation: 30},
                                    {lightness: -30}
                                ]
                            }
                        ];
                    }

                    styledMap = new google.maps.StyledMapType(styles, {name: "Lilac"});

                    mapOptions = {
                        center: myLatlng,
                        zoom: $tis.map_initial_zoom,
                        scrollwheel: false,
                        panControl: false,
                        mapTypeControl: false,
                        zoomControl: true,
                        zoomControlOptions: {
                            position: google.maps.ControlPosition.RIGHT_CENTER
                        }
                    };

                    map = new google.maps.Map(document.getElementById($tis.map_canvas_id), mapOptions);
                    map.mapTypes.set('map_style', styledMap);
                    map.setMapTypeId('map_style');

                    createMarker = function (obj) {
                        var lat = obj.latitude,
                            lng = obj.longitude,
                            icon = obj.icon,
                            info = obj.infoWindow;

                        var infowindow = new google.maps.InfoWindow({
                            content: '<div class="infoWindow">' + info + '</div>'
                        });

                        var marker = new RichMarker({
                            position: new google.maps.LatLng(lat, lng),
                            map: map,
                            anchor: 8,
                            anchorPoint: new google.maps.Point(0, -40),
                            shadow: 'none',
                            content: '<div class="marker"><i class="fa ' + icon + '"></i></div>'
                        });

                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.open(map, marker);
                        });
                    };

                    while (i < map_markers.length) {
                        createMarker(map_markers[i]);
                        i += 1;
                    }
                },

                getLatestTweets: function () {

                    var $tis = this;

                    $('.tweet').html('<div class="heartbeat"></div>');

                    var twitterBox = document.createElement('div');
                    twitterBox.setAttribute('id', 'twitter-box');

                    $('body').append(twitterBox);

                    $("#twitter-box").css({display: 'none'});

                    try {
                        $("#twitter-box").tweet({
                            username: $tis.twitter_username,
                            modpath: 'twitter/',
                            count: 8,
                            loading_text: 'Loading tweets...',
                            template: '<h3>{screen_name}</h3><div class="info"><a href="http://twitter.com/{screen_name}" target="_blank">@{screen_name}</a> | <a href="http://twitter.com/{screen_name}/statuses/{tweet_id}/" target="_blank" class="time">{tweet_relative_time}</a></div><div>{text}</div>'
                        });
                    } catch (err) {
                        console.log("Your twitter account is misconfigured. " + err);
                    }

                    var index = 0,
                        len = $(".tweet").length;

                    $("#twitter-box li").each(function () {
                        if (index < len) {
                            $(".tweet").eq(index).html($(this).html());
                            index += 1;
                        } else {
                            return false;
                        }
                    });

                    $("#twitter-box").remove();
                },

                getInstagram: function () {

                    var $tis = this;

                    $('.instagram').html('<div class="heartbeat"></div>');

                    $.ajax({
                        type: 'post',
                        url: 'instagram/instagram.php',
                        contentType: 'application/json',
                        dataType: 'json',
                        success: function (json) {
                            var feed = $.parseJSON(json),
                                len = $(".instagram").length,
                                index = 0,
                                feedLen = 0,
                                i = 0;

                            if (feed !== '' && feed.hasOwnProperty("data")) {
                                feedLen = feed.data.length;
                            }

                            while (i < feedLen) {
                                if (index < len) {
                                    $(".instagram").eq(index).html('<img src="' + feed.data[i].images.standard_resolution.url + '" alt="" /><span><a href="' + feed.data[i].images.standard_resolution.url + '" data-gal="prettyPhoto[gallery]" title="' + feed.data[i].caption + '"><i class="fa fa-link"></i></a><a href="' + feed.data[i].link + '" target="_blank" title="View on Instagram"><i class="fa fa-external-link"></i></a></span>');
                                    index += 1;
                                }
                                i += 1;
                            }

                            $tis.createPrettyPhoto();
                        },
                        error: function () {
                            console.log("Error getting Instagram feed");
                        }
                    });
                },

                createPrettyPhoto: function () {

                    $("a[data-gal^='prettyPhoto']").prettyPhoto({theme: 'lilac', hook: 'data-gal'});
                },

                createOwlSliders: function () {

                    if ($(".timeline-gallery").length) {
                        $(".timeline-gallery").owlCarousel({
                            navigation: true,
                            navigationText: false,
                            pagination: false,
                            itemsCustom: [
                                [0, 1],
                                [392, 2],
                                [596, 3],
                                [751, 2],
                                [975, 3],
                                [1183, 3],
                                [1440, 3],
                                [1728, 3]
                            ]
                        });
                    }

                    if ($(".bridesmaids-groomsmen-slider").length) {
                        $(".bridesmaids-groomsmen-slider").owlCarousel({
                            itemsCustom: [
                                [0, 1],
                                [590, 2],
                                [751, 2],
                                [975, 3],
                                [1183, 4],
                                [1440, 4],
                                [1728, 4]
                            ]
                        });
                    }
                },

                createGallery: function () {

                    var $gallery = $(".gallery-scroller"),
                        scrolling = false;

                    $(".gallery-right").on('click', function () {
                        if (scrolling) {
                            return false;
                        }

                        scrolling = true;
                        $gallery.animate({scrollLeft: $gallery.scrollLeft() + 380}, function () {
                            scrolling = false;
                        });
                    });

                    $(".gallery-left").on('click', function () {
                        if (scrolling) {
                            return false;
                        }

                        scrolling = true;
                        $gallery.animate({scrollLeft: $gallery.scrollLeft() - 380}, function () {
                            scrolling = false;
                        });
                    });
                },

                curvedText: function () {

                    if ($(".curve").length) {
                        $('.curve').arctext({radius: 1000});

                        $(window).resize(function () {
                            $('.curve').arctext('set', {radius: 1000});
                        });
                    }

                    if ($(".curve2").length) {
                        $('.curve2').arctext({radius: 800, dir: -1});

                        $(window).resize(function () {
                            $('.curve2').arctext('set', {radius: 800, dir: -1});
                        });
                    }
                },

                countdown: function (parent, date) {

                    var $tis = this,
                        future = new Date(date),
                        counter,
                        $parent = $("" + parent);

                    $parent.html('<div class="days"><span>' + $tis.c_days + '</span><div></div></div>' +
                        '<div class="hours"><span>' + $tis.c_hours + '</span><div></div></div>' +
                        '<div class="minutes"><span>' + $tis.c_minutes + '</span><div></div></div>' +
                        '<div class="seconds"><span>' + $tis.c_seconds + '</span><div></div></div>');

                    function changeTime() {
                        var today = new Date(),
                            _dd = future - today;

                        if (_dd < 0) {
                            $parent.html('<div class="end">' + $tis.countdownEndMsg + '</div>');
                            clearInterval(counter);

                            return false;
                        }

                        var _dday = Math.floor(_dd / (60 * 60 * 1000 * 24) * 1),
                            _dhour = Math.floor((_dd % (60 * 60 * 1000 * 24)) / (60 * 60 * 1000) * 1),
                            _dmin = Math.floor(((_dd % (60 * 60 * 1000 * 24)) % (60 * 60 * 1000)) / (60 * 1000) * 1),
                            _dsec = Math.floor((((_dd % (60 * 60 * 1000 * 24)) % (60 * 60 * 1000)) % (60 * 1000)) / 1000 * 1);

                        $(".days > div", $parent).html(_dday);
                        $(".hours > div", $parent).html(_dhour);
                        $(".minutes > div", $parent).html(_dmin);
                        $(".seconds > div", $parent).html(_dsec);
                    }

                    counter = setInterval(changeTime, 1000);
                },

                parallaxItems: function () {

                    if (!$.browser.mobile) {
                        $.stellar();
                    } else {
                        $('.parallax').css({'background-position': '50% 50%', 'background-size': 'cover', 'background-attachment': 'scroll'});
                    }
                },

                startNiceScroll: function () {

                    $(document).ready(function () {
                        $(".gallery-scroller").niceScroll({
                            cursorcolor: '#fff',
                            cursorwidth: '0px',
                            background: '#fff',
                            cursorborder: '0px solid #1F2326',
                            zindex: '999',
                            autohidemode: false,
                            enablemousewheel: false,
                            touchbehavior: true
                        });
                    });
                },

                windowResize: function () {

                    var $tis = this;

                    $(window).resize(function () {
                        var w = $(window).innerWidth();

                        $tis.createMobileMenu(w);
                    });
                },

                resizeVideos: function () {

                    var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='https://player.vimeo.com'], iframe[src^='http://www.youtube.com'], iframe[src^='https://www.youtube.com'], object, embed"),
                        $fluidEl = $(".videoEmbed");

                    $allVideos.each(function () {
                        var $el = $(this);
                        $el.attr('data-aspectRatio', $el.height() / $el.width()).removeAttr('height').removeAttr('width');
                    });

                    $(window).resize(function () {
                        var newWidth = $fluidEl.width();

                        $allVideos.each(function () {
                            var $el = $(this);
                            $el.width(newWidth).height(newWidth * $el.attr('data-aspectRatio'));
                        });
                    }).resize();
                },

                contactForm: function () {

                    var $tis = this;

                    $(".submit_form").on('click', function (e) {
                        e.preventDefault();

                        var $submit_btn = $(this),
                            $form = $submit_btn.closest("form"),
                            $fields = $("input, textarea, .radio-lilac", $form),
                            len = 0,
                            re = /\S+@\S+\.\S+/,
                            html = "contact",
                            error = false,
                            showError,
                            showSuccess,
                            stopSpin,
                            spinIcon = [];

                        $fields.each(function () {
                            var $field = $(this);

                            if ($field.attr('type') === "hidden") {
                                if ($field.hasClass('subject')) {
                                    html += "&subject=" + $field.val();
                                } else if ($field.hasClass('fromName') || $field.hasClass('fromname')) {
                                    html += "&fromname=" + $field.val();
                                } else if ($field.hasClass('fromEmail') || $field.hasClass('fromemail')) {
                                    html += "&fromemail=" + $field.val();
                                } else if ($field.hasClass('emailTo') || $field.hasClass('emailto')) {
                                    html += "&emailto=" + $field.val();
                                }
                            } else {
                                if ($field.hasClass('required') && $field.val() === "") {
                                    $field.addClass('invalid');
                                    error = true;
                                } else if ($field.attr('type') === "email" && $field.val() !== "" && re.test($field.val()) === false) {
                                    $field.addClass('invalid');
                                    error = true;
                                } else if ($field.attr('id') !== "recaptcha_response_field") {
                                    $field.removeClass('invalid');
                                    if ($field.hasClass('subject')) {
                                        html += "&subject=" + $field.val();
                                        html += "&subject_label=" + $field.attr("name");
                                    } else if ($field.hasClass('fromName') || $field.hasClass('fromname')) {
                                        html += "&fromname=" + $field.val();
                                        html += "&fromname_label=" + $field.attr("name");
                                    } else if ($field.hasClass('fromEmail') || $field.hasClass('fromemail')) {
                                        html += "&fromemail=" + $field.val();
                                        html += "&fromemail_label=" + $field.attr("name");
                                    } else if ($field.hasClass('radio-lilac')) {
                                        html += "&field" + len + "_label=" + $field.data("value");
                                        html += "&field" + len + "_value=" + $('.active', $field).data("value");
                                        len += 1;
                                    } else {
                                        html += "&field" + len + "_label=" + $field.attr("name");
                                        html += "&field" + len + "_value=" + $field.val();
                                        len += 1;
                                    }
                                }
                            }
                        });

                        html += "&len=" + len;
                        html += "&_token = "+$('input[name="_token"]').val();
                        html += "&id={{ $guest->id }}";

                        showError = function () {
                            $submit_btn.width($submit_btn.width());

                            $('i', $submit_btn).each(function () {
                                var $icon = $(this),
                                    iClass = $icon.attr("class");

                                $icon.removeClass(iClass).addClass('fa fa-times').delay(1500).queue(function (next) {
                                    $(this).removeClass('fa fa-times').addClass(iClass);
                                    next();
                                });
                            });

                            $submit_btn.addClass('btn-danger').delay(1500).queue(function (next) {
                                $(this).removeClass('btn-danger');
                                next();
                            });

                            $(".form_status_message").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + contact_form_error_msg + '</div>');
                        };

                        showSuccess = function () {
                            $submit_btn.width($submit_btn.width());

                            $('i', $submit_btn).each(function () {
                                var $icon = $(this),
                                    iClass = $icon.attr("class");

                                $icon.removeClass(iClass).addClass('fa fa-check').delay(1500).queue(function (next) {
                                    $(this).removeClass('fa fa-check').addClass(iClass);
                                    next();
                                });
                            });

                            $submit_btn.addClass('btn-success').delay(1500).queue(function (next) {
                                $(this).removeClass('btn-success');
                                next();
                            });

                            $(".form_status_message").html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + contact_form_success_msg + '</div>');
                        };

                        stopSpin = function () {
                            $('i', $submit_btn).each(function (i) {
                                var $icon = $(this);

                                $icon.removeClass('fa fa-cog fa-spin').addClass(spinIcon[i]);
                            });

                            $submit_btn.removeClass('disabled');
                        };

                        if (!error && !$tis.sendingMail) {
                            $tis.sendingMail = true;

                            $('i', $submit_btn).each(function (i) {
                                var $icon = $(this);

                                spinIcon[i] = $icon.attr("class");

                                $icon.removeClass(spinIcon[i]).addClass('fa fa-cog fa-spin');
                            });
                            $submit_btn.addClass('disabled');

                            $.ajax({
                                type: 'POST',
                                url: 'confirm',
                                data: html,
                                success: function (msg) {
                                    stopSpin();
                                    if(msg.confirm_status == "yes") {
                                        alert('Thank you for confirming to us! See you on our Big Day! Thanks!');
                                        location.reload();
                                    }
                                    else
                                    {
                                        alert('Thank you for confirming to us! Thanks!');
                                        location.reload();
                                    }
                                },
                                error: function () {
                                    stopSpin();

                                    showError();
                                    $tis.sendingMail = false;
                                }
                            });

                        } else {
                            showError();
                        }

                        return false;
                    });
                },

                buttons: function () {

                    var first = true;

                    $('.nav-logo, .scrollto').on('click', function (event) {
                        var navActive = $(this);
                        var scroll = 0;

                        event.preventDefault();

                        if (navActive.attr('href') !== "#home") {
                            scroll = $(navActive.attr('href')).offset().top - 65;
                        }

                        $('html, body').stop().animate({
                            scrollTop: scroll
                        }, 1500, 'easeInOutExpo', function () {
                            navActive.blur();
                        });
                    });

                    // Capture .bridesmaids-groomsmen-buttons Buttons click event.
                    $(".bridesmaids-groomsmen-buttons .btn").on('click', function (e) {
                        e.preventDefault();

                        var t = $(this),
                            slider = t.data("slider");

                        if (!t.hasClass("active")) {
                            $(".bridesmaids-groomsmen-slider").addClass("hide").css({opacity: 0});

                            if (first) {
                                first = false;
                                $("#" + slider).removeClass("hide");
                            } else {
                                $("#" + slider).removeClass("hide").animate({opacity: 1}, 500);
                            }
                        }

                        $(".bridesmaids-groomsmen-buttons .btn").removeClass("active");
                        t.addClass("active");
                    });

                    // Capture custom radio buttons click event.
                    $(".radio-lilac button").on('click', function (e) {
                        e.preventDefault();

                        var $t = $(this);

                        if ($t.hasClass("active")) {
                            return false;
                        }

                        $t.parent().find("button").removeClass("active");
                        $t.addClass("active");
                    });

                    // Capture "Add guest" button click event.

                    var max_add_on = {{ $guest->age ?: 0 }};
                    $(".add_button").on('click', function (e) {
                        e.preventDefault();

                        var $t = $(this),
                            $wrapper = $t.data("wrapper"),
                            html,
                            count = parseInt($("#" + $wrapper).data("count"), 10) + 1 || 1,
                            $input = $("#" + $t.data("input")),
                            val = $input.val();
                        if((count - 2) > max_add_on)
                        {
                            alert('Ops! You can only add '+max_add_on+' persons together with you.');
                            $('input[name="guest"]').val('');
                            return false;
                        }

                        if (val === "") {
                            $input.addClass("invalid");
                            return false;
                        }

                        if((max_add_on - (count - 2)) > 0)
                            $('#guest-count').text('('+(max_add_on - (count - 2))+')');
                        else
                            $('#guest-count').text('');

                        html = '<div class="input-group">' +
                            '<input type="text" class="form-control" name="' + $t.data("input") + '_' + count + '" value="' + val + '" />' +
                            '<span class="input-group-addon"><!--i class="fa fa-trash"></i--></span>' +
                            '</div>';

                        $("#" + $wrapper).data("count", count).append(html);
                        $input.val('');
                        $input.removeClass("invalid");
                    });

                    // Capture "Remove guest" button click event.
                    /*$('.add_list').on('click', '.input-group-addon', function () {
                        $(this).closest(".input-group").remove();
                    });*/
                },

                animateElems: function () {

                    if ($.browser.mobile) {
                        return false;
                    }

                    var animate = function () {
                        $('[data-animation-delay]').each(function () {
                            var $this = $(this),
                                s = $(window).scrollTop(),
                                h = $(window).height(),
                                d = parseInt($this.attr('data-animation-delay'), 10),
                                dir = $this.data('animation-direction');

                            if (dir === undefined) {
                                return false;
                            }

                            $this.addClass('animate-' + dir);

                            if (s + h >= $this.offset().top) {
                                if (isNaN(d) || d === 0) {
                                    $this.removeClass('animate-' + dir).addClass('animation-' + dir);
                                } else {
                                    setTimeout(function () {
                                        $this.removeClass('animate-me').addClass('animation-' + dir);
                                    }, d);
                                }
                            }
                        });
                    };

                    if ($(window).innerWidth() >= 751) {
                        $(window).scroll(function () {
                            animate();
                        });

                        animate();
                    }
                }
            };

            Lilac.init();
        });
    }(jQuery));
</script>
</body>
</html>