@extends('frontend')

@section('content')
    <div class="sections">
        <div class="sections-wrapper clearfix">

            <!-- Home -->
            <section id="section1" class="no-padding-bottom active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 vertical-center padding-fix">
                            <h1>Discover<sup>+</sup> Innovate<sup>+</sup> Build<sup>+</sup> Technology<sup>+</sup>
                            </h1>

                            <p>{{$site_options['about_me_intro_home']}}</p>

                            <p class="button-row"><a href="#" class="button solid-button white">Hire Me Now</a>
                        </div>
                        <!-- end .col-sm-7 -->
                        <div class="col-sm-5 vertical-center">
                            <img src="/v2/images/man01.png" alt="man" class="img-responsive section-img">
                        </div>
                        <!-- end .col-sm-5 -->
                    </div>
                    <!-- end .row -->
                </div>
                <!-- end .container -->
            </section>
            <!-- end #section1 -->

            <!-- About -->
            <section id="section2">
                <div class="container">
                    <h2>About Me</h2>

                    <div class="row">
                        <div class="col-sm-3">
                            <img src="/v2/images/man02.png" alt="man" class="img-responsive section-img">
                        </div>
                        <!-- end .col-sm-3 -->
                        <div class="col-sm-9">
                            <h3 class="small-margin-bottom">{{$site_options['site_admin']}}</h3>
                            <h5>{{$site_options['site_admin_title']}}</h5>

                            <p>{{$site_options['about_']}}</p>


                            <ul class="list-unstyled text-uppercase">
                                <li><b>Date Of Birth:</b> 25 May 1989</li>
                                <li><b>Phone:</b> 254-724149923</li>
                                <li><b>Email:</b> {{$site_options['admin_email']}}</li>
                                <li><b>Address:</b> Nairobi, Kenya.</li>
                                <li><b>Website:</b> {{$site_options['site_address']}}</li>
                            </ul>
                            <!-- end .list-unstyled -->
                            <div class="spacer"></div>
                            <h3>Interests and Hobbies</h3>
                            <div class="row">
                                <div class="col-sm-2 col-sm-offset-1 col-xs-6">
                                    <div class="icon-box">
                                        <div class="icon"><i class="ion-ios-film"></i></div>
                                        <h6>Movies</h6>
                                    </div>
                                    <!-- end .icon-box -->
                                </div>
                                <!-- end .col-sm-2 -->
                                <div class="col-sm-2 col-xs-6">
                                    <div class="icon-box">
                                        <div class="icon"><i class="ion-ios-camera-outline"></i></div>
                                        <h6>Photography</h6>
                                    </div>
                                    <!-- end .icon-box -->
                                </div>
                                <!-- end .col-sm-2 -->
                                <div class="col-sm-2 col-xs-6">
                                    <div class="icon-box">
                                        <div class="icon"><i class="ion-plane"></i></div>
                                        <h6>Travelling</h6>
                                    </div>
                                    <!-- end .icon-box -->
                                </div>
                                <!-- end .col-sm-2 -->
                                <div class="col-sm-2 col-xs-6">
                                    <div class="icon-box">
                                        <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                                        <h6>Reading</h6>
                                    </div>
                                    <!-- end .icon-box -->
                                </div>
                                <!-- end .col-sm-2 -->
                                <div class="col-sm-2 col-xs-6">
                                    <div class="icon-box">
                                        <div class="icon"><i class="ion-ios-musical-notes"></i></div>
                                        <h6>Music</h6>
                                    </div>
                                    <!-- end .icon-box -->
                                </div>
                                <!-- end .col-sm-2 -->
                            </div>
                            <!-- end .row -->
                        </div>
                        <!-- end .col-sm-9 -->
                    </div>
                    <!-- end .row -->
                </div>
                <!-- end .container -->
            </section>
            <!-- end #section1 -->

            <!-- Skills -->
            <section id="section3">
                <div class="container">
                    <h2>My Skills Values</h2>

                    <div class="row">

                        <h4>Technical Skills</h4>
                        @foreach($skills as $key => $value)
                            <div class="col-sm-6">
                                @foreach($value as $skill)
                                    <label class="progress-bar-label">{{$skill['name']}}</label>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                             aria-valuenow="{{$skill['percentage']}}" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span>{{$skill['percentage']}}%</span>
                                        </div>
                                        <!-- end .progress-bar -->
                                    </div>
                                @endforeach
                            </div>
                            @endforeach


                                    <!-- end .col-sm-12 -->
                    </div>
                    <!-- end .row -->
                    <div class="spacer"></div>
                    <h4>Languages</h4>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="circle-progress-wrapper clearfix">
                                <div class="circle-progress">
                                    <input type="text" class="dial" value="99" data-color="#7c4dff" data-from="0"
                                           data-to="99"/>
                                </div>
                                <!-- end .circle-progress -->
                                <div class="circle-progress-label-wrapper"><label class="circle-progress-label">English
                                        Fluent</label></div>
                            </div>
                            <!-- end .circle-progress-wrapper -->
                        </div>
                        <!-- end .col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="circle-progress-wrapper clearfix">
                                <div class="circle-progress">
                                    <input type="text" class="dial" value="80" data-color="#7c4dff" data-from="0"
                                           data-to="80"/>
                                </div>
                                <!-- end .circle-progress -->
                                <div class="circle-progress-label-wrapper"><label class="circle-progress-label">Kiswahili
                                        Fluent</label></div>
                            </div>
                            <!-- end .circle-progress-wrapper -->
                        </div>
                        <!-- end .col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="circle-progress-wrapper clearfix">
                                <div class="circle-progress">
                                    <input type="text" class="dial" value="69" data-color="#7c4dff" data-from="0"
                                           data-to="69"/>
                                </div>
                                <!-- end .circle-progress -->
                                <div class="circle-progress-label-wrapper"><label class="circle-progress-label">German
                                        Basic</label></div>
                            </div>
                            <!-- end .circle-progress-wrapper -->
                        </div>
                        <!-- end .col-sm-4 -->
                    </div>
                    <!-- end .row -->
                </div>
                <!-- end .container -->
            </section>
            <!-- end #section1 -->
{{-- 
            <!-- Experience -->
            <section id="section4">
                <div class="container">
                    <h2>8 Years Experience</h2>

                    <div class="experience-timeline">
                        <div class="experience-block clearfix">
                            <div class="meta">
                                <span class="year">2012 - Current</span>
                                <span class="company">Themeforest</span>
                            </div>
                            <!-- end .meta -->
                            <div class="content">
                                <h5>Senior Web & UX Designer</h5>

                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci
                                    velitus sed quia non num quam eius modi tempora incidunt ut labore et dolore magnam
                                    aliquam quaerat voluptatem.</p>
                            </div>
                            <!-- end .content -->
                            <div class="icon">
                                <i class="ion-easel"></i>
                            </div>
                            <!-- end .icon -->
                            <div class="line"></div>
                        </div>
                        <!-- end .experience-block -->
                        <div class="experience-block clearfix">
                            <div class="meta">
                                <span class="year">2008 - 2012</span>
                                <span class="company">Graphicriver</span>
                            </div>
                            <!-- end .meta -->
                            <div class="content">
                                <h5>Graphic Designer</h5>

                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci
                                    velitus sed quia non num quam eius modi tempora incidunt ut labore et dolore magnam
                                    aliquam quaerat voluptatem.</p>
                            </div>
                            <!-- end .content -->
                            <div class="icon">
                                <i class="ion-images"></i>
                            </div>
                            <!-- end .icon -->
                            <div class="line"></div>
                        </div>
                        <!-- end .experience-block -->
                        <div class="experience-block clearfix">
                            <div class="meta">
                                <span class="year">2006 - 2008</span>
                                <span class="company">Codecanyon</span>
                            </div>
                            <!-- end .meta -->
                            <div class="content">
                                <h5>Web Developer</h5>

                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci
                                    velitus sed quia non num quam eius modi tempora incidunt ut labore et dolore magnam
                                    aliquam quaerat voluptatem.</p>
                            </div>
                            <!-- end .content -->
                            <div class="icon">
                                <i class="ion-card"></i>
                            </div>
                            <!-- end .icon -->
                        </div>
                        <!-- end .experience-block -->
                    </div>
                    <!-- end .experience-timeline -->

                    <!-- Testimonials -->
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="testimonial-slider owl-carousel">
                                <div>
                                    <div class="image"><img src="/v2/images/testimonial.jpg" alt="alt text"></div>
                                    <div class="sep"></div>
                                    <p>" Awesome to work with. Incredibly organized, easy to communicate with,
                                        responsive
                                        with next iterations, and beautiful work. "</p>
                                    <span class="author">swetain , CEO of Texco Company</span>
                                </div>
                                <div>
                                    <div class="image"><img src="/v2/images/testimonial.jpg" alt="alt text"></div>
                                    <div class="sep"></div>
                                    <p>" Awesome to work with. Incredibly organized, easy to communicate with,
                                        responsive
                                        with next iterations, and beautiful work. "</p>
                                    <span class="author">swetain , CEO of Texco Company</span>
                                </div>
                                <div>
                                    <div class="image"><img src="/v2/images/testimonial.jpg" alt="alt text"></div>
                                    <div class="sep"></div>
                                    <p>" Awesome to work with. Incredibly organized, easy to communicate with,
                                        responsive
                                        with next iterations, and beautiful work. "</p>
                                    <span class="author">swetain , CEO of Texco Company</span>
                                </div>
                            </div>
                            <!-- end .testimonial-slider -->
                        </div>
                        <!-- end .col-sm-8 -->
                    </div>
                    <!-- end .row -->

                </div>
                <!-- end .container -->
            </section>
            <!-- end #section1 -->

            <!-- Education -->
            <section id="section5">
                <div class="container">
                    <h2>Educational Value</h2>

                    <div class="education clearfix">
                        <div class="item">
                            <div class="marker"></div>
                            <div class="content">
                                <span>University Of Design</span>
                                <h4>Master Degree of Design</h4>
                            </div>
                            <div class="year">2005 - 2006</div>
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <div class="marker"></div>
                            <div class="content">
                                <span>University Of Design</span>
                                <h4>Master Degree of Design</h4>
                            </div>
                            <div class="year">2005 - 2006</div>
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <div class="marker"></div>
                            <div class="content">
                                <span>University Of Design</span>
                                <h4>Master Degree of Design</h4>
                            </div>
                            <div class="year">2005 - 2006</div>
                        </div>
                        <!-- end item -->
                        <div class="item">
                            <div class="marker"></div>
                            <div class="content">
                                <span>University Of Design</span>
                                <h4>Master Degree of Design</h4>
                            </div>
                            <div class="year">2005 - 2006</div>
                        </div>
                        <!-- end item -->
                        <div class="line"></div>
                    </div>
                    <!-- end .education -->



                    <!-- end .row -->
                </div>
                <!-- end .container -->
            </section>
            <!-- end #section1 --> --}}

            <!-- Portfolio -->
            <section id="section6">
                <div class="container">
                    <h2>Portfolio</h2>

                    <div class="portfolio-wrapper">
                        <div id="portfolio-filters" class="portfolio-filters">
                            <button class="button solid-button white-purple small" data-filter="*">Show All</button>
                            @foreach($categories as $category)
                            <button class="button solid-button white-purple small" data-filter=".{{ $category->name }}">
                            {{ $category->name }}
                            </button>
                            @endforeach
                        </div>
                        <div id="portfolio" class="portfolio">
                        @foreach($items as $item)
                            <div class="item @foreach($item->categories as $cat) {{ $cat->name }} @endforeach">
                                <img src="/uploads/work/{{$item->id}}/thumb.jpg" alt="alt text" class="img-responsive">
                                <a href="{{ $item->link }}" target="_blank" class="overlay">
                                    <div class="background"></div>
                                    <div class="meta">
                                        <span class="title">{{ $item->name }}</span>
                                        <span class="category">
                                        @foreach($item->categories as $cat) 
                                        {{ $cat->name }} 
                                        @endforeach

                                        </span>
                                    </div>
                                    <!-- end .meta -->
                                </a> <!-- end .overlay -->
                            </div>
                            <!-- end .item -->
                          @endforeach  
                        </div>
                        <!-- end .portfolio -->
                       <!--  <div class="portfolio-load-more">
                            <a href="single-portfolio.html" class="button solid-button white icon-right">Load More
                                Work<i
                                        class="md-refresh"></i></a>
                        </div> -->
                        <!-- end .portfolio-load-more -->
                    </div>
                    <!-- end .portfolio-wrapper -->
                </div>
                <!-- end .container -->
            </section>
            <!-- end #section1 -->

            <!-- Blog -->
            {{--<section id="section7">--}}
                {{--<div class="container">--}}
                    {{--<h2>Blog Post</h2>--}}

                    {{--<div class="blog-posts masonry" id="blog-masonry">--}}
                        {{--<div class="blog-grid-sizer"></div>--}}
                        {{--<div class="blog-post image-left">--}}
                            {{--<div class="inner">--}}
                                {{--<a href="single-blog-post.html">--}}
                                    {{--<div class="image"--}}
                                         {{--style="background-image: url('images/blog-post-image01.jpg');"></div>--}}
                                {{--</a>--}}

                                {{--<div class="content">--}}
                                    {{--<span class="date">March 14, 2015</span>--}}
                                    {{--<h4><a href="single-blog-post.html">We Support Any Type Of Design</a></h4>--}}
                                    {{--<footer>--}}
                                        {{--<span class="comments-link"><a href="single-blog-post.html">3--}}
                                                {{--Comments</a></span>--}}
                                    {{--<span class="share-link"><a href="single-blog-post.html"><i--}}
                                                    {{--class="fa fa-share-alt"></i></a></span>--}}
                                    {{--</footer>--}}
                                {{--</div>--}}
                                {{--<!-- end .content -->--}}
                            {{--</div>--}}
                            {{--<!-- end .inner -->--}}
                        {{--</div>--}}
                        {{--<!-- end .blog-post -->--}}
                        {{--<div class="blog-post">--}}
                            {{--<div class="inner">--}}
                                {{--<div class="content">--}}
                                    {{--<span class="date">March 15, 2015</span>--}}
                                    {{--<h4><a href="single-blog-post.html">We Give 99% Satisfy In All Work</a></h4>--}}
                                    {{--<footer>--}}
                                        {{--<span class="comments-link"><a href="single-blog-post.html">7--}}
                                                {{--Comments</a></span>--}}
                                    {{--<span class="share-link"><a href="single-blog-post.html"><i--}}
                                                    {{--class="fa fa-share-alt"></i></a></span>--}}
                                    {{--</footer>--}}
                                {{--</div>--}}
                                {{--<!-- end .content -->--}}
                            {{--</div>--}}
                            {{--<!-- end .inner -->--}}
                        {{--</div>--}}
                        {{--<!-- end .blog-post -->--}}
                        {{--<div class="blog-post image-top">--}}
                            {{--<div class="inner">--}}
                                {{--<a href="single-blog-post.html">--}}
                                    {{--<div class="image"--}}
                                         {{--style="background-image: url('images/blog-post-image02.jpg');"></div>--}}
                                {{--</a>--}}

                                {{--<div class="content">--}}
                                    {{--<span class="date">March 13, 2015</span>--}}
                                    {{--<h4><a href="single-blog-post.html">We Won CSS Design Of The Year</a></h4>--}}
                                    {{--<footer>--}}
                                        {{--<span class="comments-link"><a href="single-blog-post.html">4--}}
                                                {{--Comments</a></span>--}}
                                    {{--<span class="share-link"><a href="single-blog-post.html"><i--}}
                                                    {{--class="fa fa-share-alt"></i></a></span>--}}
                                    {{--</footer>--}}
                                {{--</div>--}}
                                {{--<!-- end .content -->--}}
                            {{--</div>--}}
                            {{--<!-- end .inner -->--}}
                        {{--</div>--}}
                        {{--<!-- end .blog-post -->--}}
                        {{--<div class="blog-post image-top">--}}
                            {{--<div class="inner">--}}
                                {{--<a href="single-blog-post.html">--}}
                                    {{--<div class="image"--}}
                                         {{--style="background-image: url('images/blog-post-image03.jpg');"></div>--}}
                                {{--</a>--}}

                                {{--<div class="content">--}}
                                    {{--<span class="date">March 12, 2015</span>--}}
                                    {{--<h4><a href="single-blog-post.html">How to Launch Website Easily</a></h4>--}}
                                    {{--<footer>--}}
                                        {{--<span class="comments-link"><a href="single-blog-post.html">10--}}
                                                {{--Comments</a></span>--}}
                                    {{--<span class="share-link"><a href="single-blog-post.html"><i--}}
                                                    {{--class="fa fa-share-alt"></i></a></span>--}}
                                    {{--</footer>--}}
                                {{--</div>--}}
                                {{--<!-- end .content -->--}}
                            {{--</div>--}}
                            {{--<!-- end .inner -->--}}
                        {{--</div>--}}
                        {{--<!-- end .blog-post -->--}}
                        {{--<div class="blog-post image-right">--}}
                            {{--<div class="inner">--}}
                                {{--<a href="single-blog-post.html">--}}
                                    {{--<div class="image"--}}
                                         {{--style="background-image: url('images/blog-post-image04.jpg');"></div>--}}
                                {{--</a>--}}

                                {{--<div class="content">--}}
                                    {{--<span class="date">March 11, 2015</span>--}}
                                    {{--<h4><a href="single-blog-post.html">Music Is Help To Relax Body And Mind</a></h4>--}}
                                    {{--<footer>--}}
                                        {{--<span class="comments-link"><a href="single-blog-post.html">5--}}
                                                {{--Comments</a></span>--}}
                                    {{--<span class="share-link"><a href="single-blog-post.html"><i--}}
                                                    {{--class="fa fa-share-alt"></i></a></span>--}}
                                    {{--</footer>--}}
                                {{--</div>--}}
                                {{--<!-- end .content -->--}}
                            {{--</div>--}}
                            {{--<!-- end .inner -->--}}
                        {{--</div>--}}
                        {{--<!-- end .blog-post -->--}}
                        {{--<div class="blog-post">--}}
                            {{--<div class="inner">--}}
                                {{--<div class="content">--}}
                                    {{--<span class="date">March 10, 2015</span>--}}
                                    {{--<h4><a href="single-blog-post.html">We Support any Type of Design</a></h4>--}}
                                    {{--<footer>--}}
                                        {{--<span class="comments-link"><a href="single-blog-post.html">3--}}
                                                {{--Comments</a></span>--}}
                                    {{--<span class="share-link"><a href="single-blog-post.html"><i--}}
                                                    {{--class="fa fa-share-alt"></i></a></span>--}}
                                    {{--</footer>--}}
                                {{--</div>--}}
                                {{--<!-- end .content -->--}}
                            {{--</div>--}}
                            {{--<!-- end .inner -->--}}
                        {{--</div>--}}
                        {{--<!-- end .blog-post -->--}}
                        {{--<div class="blog-post image-left">--}}
                            {{--<div class="inner">--}}
                                {{--<a href="single-blog-post.html">--}}
                                    {{--<div class="image"--}}
                                         {{--style="background-image: url('images/blog-post-image05.jpg');"></div>--}}
                                {{--</a>--}}

                                {{--<div class="content">--}}
                                    {{--<span class="date">March 9, 2015</span>--}}
                                    {{--<h4><a href="single-blog-post.html">Change Your Domain Without Risk</a></h4>--}}
                                    {{--<footer>--}}
                                        {{--<span class="comments-link"><a href="single-blog-post.html">6--}}
                                                {{--Comments</a></span>--}}
                                    {{--<span class="share-link"><a href="single-blog-post.html"><i--}}
                                                    {{--class="fa fa-share-alt"></i></a></span>--}}
                                    {{--</footer>--}}
                                {{--</div>--}}
                                {{--<!-- end .content -->--}}
                            {{--</div>--}}
                            {{--<!-- end .inner -->--}}
                        {{--</div>--}}
                        {{--<!-- end .blog-post -->--}}
                    {{--</div>--}}
                    {{--<!-- end .blog-posts -->--}}
                    {{--<div class="blog-load-more">--}}
                        {{--<a href="single-blog-post.html" class="button solid-button white icon-right">Load More Posts<i--}}
                                    {{--class="md-refresh"></i></a>--}}
                    {{--</div>--}}
                    {{--<!-- end .blog-load-more -->--}}
                {{--</div>--}}
                {{--<!-- end .container -->--}}
            {{--</section>--}}
            <!-- end #section1 -->

            <!-- Contact -->
            <section id="section8">
                <div class="container">
                    <h2>Get In Touch With Me</h2>

                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Contact Address</h5>
                            <ul class="list-icons list-unstyled">
                                <li><i class="ion-ios-location-outline"></i>{{$site_options['my_adress'] or 'Nairobi'}}<br/>Naiorbi,
                                    Kenya.
                                </li>
                                <li><i class="ion-iphone"></i>Phone: {{$site_options['mobile_number']}}</li>
                                <li><i class="ion-ios-email-outline"></i>Email: <a
                                            href="mailto:{{$site_options['admin_email']}}">{{$site_options['admin_email']}}</a></li>
                                <li><i class="ion-ios-home-outline"></i>Website: <a href="#">{{$site_options['site_address']}}</a></li>
                            </ul>
                            <div class="spacer"></div>
                            <div class="social-icons">
                                <a href="{{$site_options['facebook_link']}}" target="_blank" class="social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="{{$site_options['twitter_handle']}}" target="_blank" class="social-icon"><i class="fa fa-twitter"></i></a>
                                <a href="{{$site_options['google_plus_page']}}" target="_blank" class="social-icon"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- end .social-icons -->
                            <div class="spacer"></div>
                        </div>
                        <div class="col-sm-7">
                            <h5>Contact Form</h5>

                            <form action="/messages" method="post"
                                  class="form-horizontal contact-form">
                                <input type="hidden" name="_token" class="token_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="contact-name" name="name"/>
                                    </div>
                                    <!-- end .col-sm-10 -->
                                </div>
                                <!-- end .form-group -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="contact-email" name="email"/>
                                    </div>
                                    <!-- end .col-sm-10 -->
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Quote[IN DOLLARS]</label>

                                    <div class="col-sm-10">
                                        <input class="contact-quote" type="number" min="0" step="50" max="50000"
                                               name="quote" id="quote"
                                               placeholder="estimated cost of project">
                                    </div>
                                    <!-- end .col-sm-10 -->
                                </div>
                                <!-- end .form-group -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Message</label>

                                    <div class="col-sm-10">
                                        <textarea name="message" class="contact-message" rows="3"></textarea>
                                    </div>
                                    <!-- end .col-sm-10 -->
                                </div>
                                <!-- end .form-group -->
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <button type="submit" class="button solid-button purple">Send Message</button>
                                    </div>
                                    <!-- end .col-sm-10 -->
                                </div>
                                <!-- end .form-group -->
                                <div class="contact-loading alert alert-info form-alert">
                                    <span class="message">Loading...</span>
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i
                                                class="fa fa-times"></i></button>
                                </div>
                                <div class="contact-success alert alert-success form-alert">
                                    <span class="message">Success!</span>
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i
                                                class="fa fa-times"></i></button>
                                </div>
                                <div class="contact-error alert alert-danger form-alert">
                                    <span class="message">Error!</span>
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i
                                                class="fa fa-times"></i></button>
                                </div>
                            </form>
                            <!-- end contact-form -->
                        </div>
                    </div>
                    <div class="map" id="map"></div>
                </div>
                <!-- end .container -->
            </section>
            <!-- end #section1 -->

        </div>
        <!-- end .sections-wrapper -->
    </div>
@endsection