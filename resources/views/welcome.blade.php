<!doctype html>
<!--[if IE 7 ]>
<html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Folio</title>
    <meta name="description" content="">
    <meta name="author" content="bix">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('assets/css/isotope.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('assets/css/MDicon.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('assets/js/fancybox/jquery.fancybox.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('assets/css/da-slider.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('assets/js/owl-carousel/owl.carousel.css')}}"/>
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/css/styles.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('assets/font/css/font-awesome.min.css')}}"/>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

</head>

<body>
<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"
                        data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand scroll-top logo"><b>Neu Profile</b></a>
            </div>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                    <li class="active"><a href="#home" class="scroll-link">Home</a></li>
                    <li><a href="#aboutUs" class="scroll-link">About me</a></li>
                    <li><a href="#skills" class="scroll-link">Skills</a></li>
                    <li><a href="#portfolio" class="scroll-link">Portfolio</a></li>
                    <li><a href="#contactUs" class="scroll-link">Contact</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
    <!--/.container-->
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home">
    <div class="banner-container">
        <img src="/assets/images/banner-bg.jpg" alt="banner"/>

        <div class="container banner-content">
            <div id="da-slider" class="da-slider">
                <div class="da-slide">
                    <h2>Webdesigner</h2>

                    <p>Amazing free responsive website for free, enjoy!!!</p>

                    <div class="da-img"></div>
                </div>
                <div class="da-slide">
                    <h2>UX/UI Developer</h2>

                    <p>I develop website using Bootstrap front-end framework..</p>

                    <div class="da-img"></div>
                </div>
                <div class="da-slide">
                    <h2>HTML5/CSS3</h2>

                    <p>HTML5 is a markup language used for structuring and presenting Web.</p>

                    <div class="da-img"></div>
                </div>
                <div class="da-slide">
                    <h2>JavaScript/jQuery</h2>

                    <p>jQuery: Write Less, Do More...</p>

                    <div class="da-img"></div>
                </div>
                <!--  <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav> -->
            </div>
        </div>
    </div>
</section>
<section id="introText">
    <div class="container">
        <div class="text-center">
            <h1>I create beautiful responsive websites, Yes I am a UX geek</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt
                volutpat. Cras eget augue id dui varius pretium. Cras posuere dolor risus. Pellentesque elementum
                ultricies quam, sit amet rhoncus nisl viverra in. Cras imperdiet nisi a euismod molestie. Ut a metus
                arcu. Pellentesque feugiat dictum erat. Nulla vehicula condimentum purus, quis imperdiet nisl ultricies
                eleifend. Nulla quis rhoncus risus. Ut vel vehicula urna.</p>
        </div>
    </div>

</section>
<!--About-->
<section id="aboutUs" class="secPad">
    <div class="container">
        <div class="heading text-center">
            <!-- Heading -->
            <h2>I am Sam, a UI Designer & developer</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
        <div class="row">
            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"><i class="mdicon man-cycling "></i>

                    <h3>Responsive <span class="id-color">Design</span></h3></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt
                    volutpat. Cras eget augue id dui varius pretium.</p>
            </div>
            <!-- end: -->

            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"><i class="mdicon shining-sun"></i>

                    <h3>HTML5/CSS3 <span class="id-color">Dev</span></h3></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt
                    volutpat. Cras eget augue id dui varius pretium.</p>
            </div>
            <!-- end: -->

            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"><i class="mdicon fill-mood"></i>

                    <h3>JavaScript <span class="id-color">jQuery</span></h3></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt
                    volutpat. Cras eget augue id dui varius pretium.</p>
            </div>
            <!-- end: -->
        </div>
    </div>
</section>
<!--Quote-->
<section id="quote" class="bg-parlex">
    <div class="parlex-back">
        <div class="container secPad text-center">
            <h2>If I asked people what they wanted, they would have said ‘Faster Horses’.</h2>

            <h3>-Henry Ford</h3>
        </div>
        <!--/.container-->
    </div>
</section>

<!--Skills-->
<section id="skills" class="secPad white">
    <div class="container">
        <div class="heading text-center">
            <!-- Heading -->
            <h2>My Skills</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h2>Programming <strong>Skills</strong></h2>

                <p class="mrgBtm20">
                    It takes knowledge, smart work, and dedication to make great ideas come to life. I have been helping
                    make great ideas happen for the past 7 years and am always ready for new challenges.

                </p>

                <div class="row">
                    <div class="col-md-2 skilltitle">HTML5</div>
                    <div class="col-md-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%;">
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 skilltitle">CSS/CC3</div>
                    <div class="col-md-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%;">
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 skilltitle">JavaScript</div>
                    <div class="col-md-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 80%;">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 skilltitle">jQuery/Ajax</div>
                    <div class="col-md-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%;">
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>Designing <strong>Skills</strong></h2>

                <p class="mrgBtm20">
                    Problem solving is not always about sitting in a board room talking about the way things should be
                    done. I have a strong background in UI design which allows me to think on my feet and act upon it.

                </p>

                <div class="row">
                    <div class="col-md-2 skilltitle">Photoshop</div>
                    <div class="col-md-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%;">
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 skilltitle">Illustrator</div>
                    <div class="col-md-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 80%;">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 skilltitle">Indesign</div>
                    <div class="col-md-8">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 75%;">
                                <span class="sr-only">75% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Portfolio-->
<section id="portfolio" class="page-section section appear clearfix secPad">
    <div class="container">

        <div class="heading text-center">
            <!-- Heading -->
            <h2>Portfolio</h2>

            <p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
        </div>

        <div class="row">
            <nav id="filter" class="col-md-12 text-center">
                <ul>
                    <li><a href="#" id="showall" class="current btn-theme btn-small" data-filter="*">All</a></li>
                    @foreach ($categories as $d)
                        <li><a href="#" class="btn-theme btn-small" data-filter=".{{$d->name }}">{{$d->name }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <div class="col-md-12">
                <div class="row">
                    <div class="portfolio-items isotopeWrapper clearfix" id="3">
                        @foreach ($items as $item)
                            <?php foreach ($item->categories as $key):?>

                            <?php $arr[] = $key->name ?>
                            <?php endforeach;?>
                            <article class="col-sm-4 isotopeItem {{implode(" ",$arr)}}">
                                <div class="portfolio-item">
                                    <img src="assets/images/portfolio/img1.jpg" alt=""/>

                                    <div class="portfolio-desc align-center">
                                        <div class="folio-info" data-toggle="modal" data-target="#modal{{$item->id}}">
                                            <h5>{{ $item->name }}</h5>
                                            <i class="fa fa-heart-o fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <script>
                        $(document).ready(function () {
                            function myFunction() {
                                document.getElementById("showall").click(); // Click on the checkbox
                            }
                        });

                    </script>
                </div>


            </div>
        </div>

    </div>
</section>

<!--Contact -->
<section id="contactUs" class="page-section secPad">
    <div class="container">

        <div class="row">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>Contact me</h2>

            </div>
        </div>

        <div class="row mrgn30">
            <div id="formholder" class="col-md-6">
                <form method="post" action="/messages" id="contactfrm" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                               title="Please enter your name (at least 2 characters)">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"
                               title="Please enter a valid email address">
                    </div>
                    <div class="form-group">
                        <label for="comments">Comments</label>
                        <textarea name="message" class="form-control" id="comments" cols="3" rows="5"
                                  placeholder="Enter your message…"
                                  title="Please enter your message (at least 10 characters)"></textarea>
                    </div>
                    <button name="submit" type="submit" class="btn btn-lg btn-block btn-primary" id="submit">Submit
                    </button>
                    <div class="last-msg" id="last-msg" style="display: none">
                        <h4 class="text-center"><i class="fa fa-smile-o fa-3x"></i>
                            <br/>
                            Thank you for your message
                        </h4>
                    </div>
                    <div class="result">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div id="map"></div>
            </div>
        </div>
    </div>
    <!--/.container-->
</section>
<footer>
    <div class="container">
        <div class="social text-center">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-flickr"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>

        <div class="clear"></div>
        <!--CLEAR FLOATS-->
        @foreach($items as $item)
            <div class="modal fade" id="modal{{$item->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{{$item->name}}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img img-responsive" src="assets/images/portfolio/img3.jpg" alt=""/>
                                </div>
                                <div class="col-md-8">
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">link</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div><!-- /.modal -->
        @endforeach
    </div>
</footer>
<!--/.page-section-->
<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                Copyright 2015 | All Rights Reserved -- Template by <a href="#">Bix</a>
            </div>
        </div>
        <!-- / .row -->
    </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

<!--[if lte IE 8]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<![endif]-->
<script src=""></script>
<script src="{{URL::asset('assets/js/modernizr-latest.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery-1.8.2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.isotope.min.js')}}"></script>
<script src="{{URL::asset('assets/js/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.nav.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.cslider.js')}}"></script>
<script src="{{URL::asset('assets/js/custom.js')}}"></script>
<script src="{{URL::asset('assets/js/contact.js')}}"></script>
<script src="{{URL::asset('assets/js/owl-carousel/owl.carousel.js')}}"></script>
</body>
</html>
