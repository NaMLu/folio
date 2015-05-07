@if(Auth::check())
    <div class="nav-bar-container">

        <!-- BEGIN ICONS -->
        <div class="nav-menu">
            <div class="hamburger">
                <span class="patty"></span>
                <span class="patty"></span>
                <span class="patty"></span>
                <span class="patty"></span>
                <span class="patty"></span>
                <span class="patty"></span>
            </div>
            <!--.hamburger-->
        </div>
        <!--.nav-menu-->

        <div class="nav-search">
            <span class="search"></span>
        </div>
        <!--.nav-search-->

        <div class="nav-user">
            <div class="user">
                <img src="/backend/assets/globals/img/faces/tolga-ergin.jpg" alt="">
                <span class="badge">3</span>
            </div>
            <!--.user-->
            <div class="cross">
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <!--.cross-->
        </div>
        <!--.nav-user-->
        <!-- END OF ICONS -->

        <div class="nav-bar-border"></div>
        <!--.nav-bar-border-->

        <!-- BEGIN OVERLAY HELPERS -->
        <div class="overlay">
            <div class="starting-point">
                <span></span>
            </div>
            <!--.starting-point-->
            <div class="logo">PLEASURE</div>
            <!--.logo-->
        </div>
        <!--.overlay-->

        <div class="overlay-secondary"></div>
        <!--.overlay-secondary-->
        <!-- END OF OVERLAY HELPERS -->

    </div>
@endif

<div class="layer-container">

    <!-- BEGIN MENU LAYER -->
    <div class="menu-layer">
        <ul>
            <li>
                <a href="index-2.html">Dashboard</a>
            </li>
            <li>
                <a href="javascript:;">Portfolio</a>
                <ul class="child-menu">
                    <li><a href="/portfolio/"><span class="text-center">View all</span><i
                                    class="fa fa-list-alt pull-right"></i></a></li>
                    <li><a href="{{route('create-new-item')}}"><span class="text-center">Add New</span><i
                                    class="fa fa-file-o pull-right"></i></a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('view-all-messages')}}">Messages <i class="fa fa-list-alt pull-right"></i></a>
            </li>
            <li>
                <a href="{{ url('/settings')}}">Site Settings <i class="fa fa-list-alt pull-right"></i></a>
            </li>
            <li>
                <a href="{{ url('/auth/logout') }}">
                    <i class="fa fa-sign-out fa-fw"></i> Logout
                </a>
            </li>
        </ul>
    </div>
    <!--.menu-layer-->
    <!-- END OF MENU LAYER -->

    <!-- BEGIN SEARCH LAYER -->
    <div class="search-layer">
        <div class="search">
            <form action="/">
                <div class="form-group">
                    <input type="text" id="input-search" class="form-control" placeholder="type something">
                    <button type="submit" class="btn btn-default disabled"><i class="ion-search"></i></button>
                </div>
            </form>
        </div>
        <!--.search-->

        <div class="results">
            <div class="row">
                <div class="col-md-4">

                    <!--.results-user-->
                </div>
                <!--.col-->
                <div class="col-md-4">

                    <!--.results-posts-->
                </div>
                <!--.col-->
                <div class="col-md-4">
                    <div class="result result-files">
                        <h4>FILES
                            <small>(0)</small>
                        </h4>
                        <p>No results were found</p>
                    </div>
                    <!--.results-files-->
                </div>
                <!--.col-->

            </div>
            <!--.row-->
        </div>
        <!--.results-->
    </div>
    <!--.search-layer-->
    <!-- END OF SEARCH LAYER -->

    <!-- BEGIN USER LAYER -->
    <div class="user-layer">
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="active"><a href="#messages" data-toggle="tab">Messages</a></li>
            <li><a href="#notifications" data-toggle="tab">Notifications <span class="badge">3</span></a></li>
            <li><a href="#settings" data-toggle="tab">Settings</a></li>
        </ul>

        <div class="row no-gutters tab-content">

            <div class="tab-pane fade in active" id="messages">
                <div class="col-md-4">
                    <div class="message-list-overlay"></div>


                </div>
                <!--.col-->
                <div class="col-md-8">
                    <div class="message-send-container">


                        <!--.messages-->

                        <div class="send-message">
                            <div class="input-group">
                                <div class="inputer inputer-blue">
                                    <div class="input-wrapper">
                                        <textarea rows="1" id="send-message-input" class="form-control js-auto-size"
                                                  placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <!--.inputer-->
									<span class="input-group-btn">
										<button id="send-message-button" class="btn btn-blue" type="button">Send
                                        </button>
									</span>
                            </div>
                        </div>
                        <!--.send-message-->

                    </div>
                    <!--.message-send-container-->
                </div>
                <!--.col-->

                <div class="mobile-back">
                    <div class="mobile-back-button"><i class="ion-android-arrow-back"></i></div>
                </div>
                <!--.mobile-back-->
            </div>
            <!--.tab-pane #messages-->

            <div class="tab-pane fade" id="notifications">

                <div class="col-md-6 col-md-offset-3">

                    <ul class="list-material has-hidden">
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <i class="ion-locked icon"></i>
                                </div>
                                <div class="list-content">
                                    <span class="caption">Phosfluorescently engage worldwide methodologies with web-enabled technology.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">9 Jan</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <img src="/backend/assets/globals/img/faces/17.jpg" class="face-radius" alt="">
                                </div>
                                <div class="list-content">
                                    <span class="caption">Synergistically evolve 2.0 technologies rather than just in time initiatives. Quickly deploy strategic networks with compelling e-business. Credibly pontificate highly efficient manufactured products and enabled data.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">7 Jan</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                        <li class="has-action-left has-action-right has-long-story">
                            <a href="#" class="hidden"><i class="ion-android-delete"></i></a>
                            <a href="#" class="visible">
                                <div class="list-action-left">
                                    <i class="ion-navigate text-indigo icon"></i>
                                </div>
                                <div class="list-content">
                                    <span class="caption">Objectively pursue diverse catalysts for change for interoperable meta-services. Dramatically mesh low-risk high-yield alignments before transparent e-tailers.</span>
                                </div>
                                <div class="list-action-right">
                                    <span class="top">7 Jan</span>
                                    <i class="ion-android-done bottom"></i>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>
                <!--.col-->
            </div>
            <!--.tab-pane #notifications-->

            <div class="tab-pane fade" id="settings">
                <div class="col-md-6 col-md-offset-3">

                    <div class="settings-panel">
                        <p class="text-grey">Here's where you can check your settings of Pleasure Admin Panel. If you
                            need an extra information from us, do not hesitate to contact.</p>

                        <div class="legend">Privacy Controls</div>
                        <ul>
                            <li>
                                Show my profile on search results
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings1" type="checkbox" hidden="hidden" checked="checked">
                                    <label for="settings1"></label>
                                </div>
                                <!--.switcher-->
                            </li>
                            <li>
                                Only God can judge me
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings2" type="checkbox" hidden="hidden" checked="checked">
                                    <label for="settings2"></label>
                                </div>
                                <!--.switcher-->
                            </li>
                            <li>
                                Review tags people add to your own posts
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings3" type="checkbox" hidden="hidden">
                                    <label for="settings3"></label>
                                </div>
                                <!--.switcher-->
                            </li>
                        </ul>

                        <div class="legend">Notifications</div>
                        <ul>
                            <li>
                                Activity that involves you
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings4" type="checkbox" hidden="hidden" checked="checked">
                                    <label for="settings4"></label>
                                </div>
                                <!--.switcher-->
                            </li>
                            <li>
                                Birthdays
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings5" type="checkbox" hidden="hidden">
                                    <label for="settings5"></label>
                                </div>
                                <!--.switcher-->
                            </li>
                            <li>
                                Calendar events
                                <div class="switcher switcher-indigo pull-right">
                                    <input id="settings6" type="checkbox" hidden="hidden">
                                    <label for="settings6"></label>
                                </div>
                                <!--.switcher-->
                            </li>
                        </ul>

                        <div class="legend">Newsletter</div>
                        <ul>
                            <li>
                                Friend requests
                                <div class="checkboxer checkboxer-indigo pull-right">
                                    <input type="checkbox" id="checkboxSettings1" value="option1" checked="checked">
                                    <label for="checkboxSettings1"></label>
                                </div>
                            </li>
                            <li>
                                People you may know
                                <div class="checkboxer checkboxer-indigo pull-right">
                                    <input type="checkbox" id="checkboxSettings2" value="option1">
                                    <label for="checkboxSettings2"></label>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!--.settings-panel-->

                </div>
                <!--.col-->
            </div>
            <!--.tab-pane #settings-->

        </div>
        <!--.row-->
    </div>
    <!--.user-layer-->
    <!-- END OF USER LAYER -->

</div>