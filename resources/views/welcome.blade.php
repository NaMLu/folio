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
    <title>{{$site_options['site_name']}}</title>
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
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

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
                <a href="#" class="navbar-brand scroll-top logo"><b>{{$site_options['site_name']}}</b></a>
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
                @foreach($slides as $slide)
                    <div class="da-slide">
                        <h2>{{$slide->name}}</h2>

                        <p>{{$slide->description}}</p>

                        <div class="da-img"></div>
                    </div>
                @endforeach
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
            <h1>A bit of Arduino here....etc and so on</h1>

            <p>Minions ipsum incididunt ad hahaha daa. Exercitation nisi aaaaaah hana dul sae po kass sed ad exercitation labore.
                Sit amet nisi tempor incididunt cillum qui. Aliqua me want bananaaa! Uuuhhh tank yuuu!
                Ullamco bappleees nisi ti aamoo! Belloo! Ad la bodaaa.
                Bee do bee do bee do qui dolor ut qui qui exercitation. Tempor pepete aaaaaah pepete commodo.
                Reprehenderit qui aute cillum esse. </p>
        </div>
    </div>

</section>
<!--About-->
<section id="aboutUs" class="secPad">
    <div class="container">
        <div class="heading text-center">
            <!-- Heading -->
            <h2>{{$site_options['about_me_intro']}}</h2>

            <p>{{$site_options['about_me_subintro']}}</p>
        </div>
        <div class="row">
            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"><i class="mdicon memory-chip "></i>

                    <h3>Arduino <span class="id-color"></span></h3></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt
                    volutpat. Cras eget augue id dui varius pretium.</p>
            </div>
            <!-- end: -->

            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"><i class="mdicon android"></i>

                    <h3>Robotics</h3></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt
                    volutpat. Cras eget augue id dui varius pretium.</p>
            </div>
            <!-- end: -->

            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"><i class="mdicon laptop"></i>

                    <h3>C Dev</h3></div>
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
            @foreach($skills as $key => $value)
                <div class="col-sm-6">
                    @foreach($value as $skill)
                        <div class="row">
                            <div class="col-md-2 skilltitle">{{$skill['name']}}</div>
                            <div class="col-md-8">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"
                                         aria-valuenow="{{$skill['percentage']}}" aria-valuemin="0"
                                         aria-valuemax="100" style="width: {{$skill['percentage']}}%;">
                                        <span class="sr-only">{{$skill['percentage']}}% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
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
                                    <img src="assets/images/portfolio/img{{rand(1,9)}}.jpg" alt=""/>

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
                        <input type="text" class="form-control" required="true" name="name" id="name"
                               placeholder="Enter name"
                               title="Please enter your name (at least 2 characters)">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" required="true" name="email" id="email"
                               placeholder="Enter email"
                               title="Please enter a valid email address">
                    </div>
                    <div class="form-group">
                        <label for="email">Quote (USD)</label>
                        <input type="number" class="form-control" name="quote" min="0" step="50" max="50000" id="quote"
                               placeholder="estimated cost of project">
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
            <div class="modal" id="modal{{$item->id}}">
                <div class="modal-dialog modal-lg animated zoomIn">
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
                                    <p>{!!$item->description!!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <h4>
                                <a target="_blank" href="{{$item->link}}">check {{$item->name}} out</a>
                            </h4>
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
                <?php $dt = Carbon::now();?>
                Copyright {{$dt->toFormattedDateString()}} | All Rights Reserved.
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
<script>
    $(document).ready(function () {
        function myFunction() {
            document.getElementById("showall").click(); // Click on the checkbox
        }
    });
</script>
</body>
</html>
