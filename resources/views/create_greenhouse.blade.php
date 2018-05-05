@extends('layout.app')

@section('title','Smart Greenhouse Analytics')

@section('body')

    {{--@if(Session::has('message'))--}}
    {{--<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>--}}
    {{--@endif--}}
    <div class="col-xs-12 col-sm-12 col-xs-12 main-heading">
        <div class="col-xs-3 logo-img"><img src="{{ asset('images/logo.png') }}"></div>
        <div class="col-xs-9">
            <header class="header">
                <nav class="col-xs-12 navbar">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse"
                                data-target=".js-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse js-navbar-collapse navbar-collapse-custom">
                        {{--<ul class="nav navbar-nav">
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">GREENHOUSE<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu mega-dropdown-menu dropdown-menu-custom">
                                    <div class="col-xs-12 force-overflow-y">
                                        <div class="item-greenhouse col-xs-3 add-greenhouse-div">
                                            --}}{{--<div><span class="greenhouse-item">Greenhouse 1</span></div>--}}{{--
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="{{ asset('images/add-greenhouse.png') }}">
                                        </div>
                                        <div class="item-greenhouse col-xs-3">
                                            <div><span class="greenhouse-item">Greenhouse 2</span></div>
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="{{ asset('images/greenhouse-icon.png') }}">
                                        </div>
                                        <div class="item-greenhouse col-xs-3">
                                            <div><span class="greenhouse-item">Greenhouse 3</span></div>
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="{{ asset('images/greenhouse-icon.png') }}">
                                        </div>
                                        <div class="item-greenhouse col-xs-3">
                                            <div><span class="greenhouse-item">Greenhouse 4</span></div>
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="{{ asset('images/greenhouse-icon.png') }}">
                                        </div>
                                        <div class="item-greenhouse col-xs-3">
                                            <div><span class="greenhouse-item">Greenhouse 5</span></div>
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="{{ asset('images/greenhouse-icon.png') }}">
                                        </div>
                                        <div class="item-greenhouse col-xs-3">
                                            <div><span class="greenhouse-item">Greenhouse 6</span></div>
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="{{ asset('images/greenhouse-icon.png') }}">
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">SCENES<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu mega-dropdown-menu dropdown-menu-custom">
                                    <div class="col-xs-12 no-padding">
                                        <div class="col-xs-4 no-padding force-overflow">
                                            <!--sigle scene-->

                                            <div class="col-xs-12 scene-single-item">
                                                <div class="col-xs-2 no-padding float-left">
                                                    <img src="{{ asset('images/scene-icon.png') }}">
                                                </div>
                                                <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                    <span class="scene-topic">Scene ID :<span class="scene-topic-value">scene001</span> </span>
                                                </div>
                                            </div>

                                            <!--sigle scene-->

                                            <div class="col-xs-12 scene-single-item">
                                                <div class="col-xs-2 no-padding float-left">
                                                    <img src="{{ asset('images/scene-icon.png') }}">
                                                </div>
                                                <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                    <span class="scene-topic">Scene ID :<span class="scene-topic-value">scene001</span> </span>
                                                </div>
                                            </div>

                                            <!--sigle scene-->

                                            <div class="col-xs-12 scene-single-item">
                                                <div class="col-xs-2 no-padding float-left">
                                                    <img src="{{ asset('images/scene-icon.png') }}">
                                                </div>
                                                <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                    <span class="scene-topic">Scene ID :<span class="scene-topic-value">scene001</span> </span>
                                                </div>
                                            </div>

                                            <!--sigle scene-->

                                            <div class="col-xs-12 scene-single-item">
                                                <div class="col-xs-2 no-padding float-left">
                                                    <img src="{{ asset('images/scene-icon.png') }}">
                                                </div>
                                                <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                    <span class="scene-topic">Scene ID :<span class="scene-topic-value">scene001</span> </span>
                                                </div>
                                            </div>

                                            <!--sigle scene-->

                                            <div class="col-xs-12 scene-single-item">
                                                <div class="col-xs-2 no-padding float-left">
                                                    <img src="{{ asset('images/scene-icon.png') }}">
                                                </div>
                                                <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                    <span class="scene-topic">Scene ID :<span class="scene-topic-value">scene001</span> </span>
                                                </div>
                                            </div>

                                            <!--sigle scene-->

                                            <div class="col-xs-12 scene-single-item">
                                                <div class="col-xs-2 no-padding float-left">
                                                    <img src="{{ asset('images/scene-icon.png') }}">
                                                </div>
                                                <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                    <span class="scene-topic">Scene ID :<span class="scene-topic-value">scene001</span> </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xs-8 no no-padding padding-left float-left">


                                            <div class="col-sx-12 scene-control float-left">
                                                <div class="col-xs-8 no-padding ">

                                                    <!--HUMIDITY-->

                                                    <div class="col-xs-12 no-padding">


                                                        <div class="col-xs-2 no-padding paddingtopnew widthimage">
                                                            <img src="{{ asset('images/humidity-icon.png') }}">
                                                        </div>
                                                        <div class="col-xs-3 no-padding toppadding">
                                                            <span class="scene-control-value">HUMIDITY</span>
                                                        </div>
                                                        <div class="col-xs-7 no-padding paddingleft">
                                                            <div class="range-slider">
                                                                <input type="text" class="js-range-slider"
                                                                       value="0 100"/>
                                                            </div>
                                                        </div>


                                                    </div>


                                                    <!--Temperature-->

                                                    <div class="col-xs-12 no-padding">


                                                        <div class="col-xs-2 no-padding paddingtopnew widthimage">
                                                            <img src="{{ asset('images/temparature-icon.png') }}">
                                                        </div>
                                                        <div class="col-xs-3 no-padding toppadding">
                                                            <span class="scene-control-value">TEMPERATURE</span>
                                                        </div>
                                                        <div class="col-xs-7 no-padding paddingleft">
                                                            <div class="range-slider">
                                                                <input type="text" class="js-range-slider"
                                                                       value="0 100"/>
                                                            </div>
                                                        </div>


                                                        <!--LIGHT INTENSITY-->

                                                        <div class="col-xs-12 no-padding">


                                                            <div class="col-xs-2 no-padding paddingtopnew widthimage">
                                                                <img src="{{ asset('images/Light-icon.png') }}">
                                                            </div>
                                                            <div class="col-xs-3 no-padding toppadding">
                                                                <span class="scene-control-value">LIGHT INTENSITY</span>
                                                            </div>
                                                            <div class="col-xs-7 no-padding paddingleft">
                                                                <div class="range-slider">
                                                                    <input type="text" class="js-range-slider"
                                                                           value="0 100"/>
                                                                </div>
                                                            </div>


                                                            <!--pH VALUE-->

                                                            <div class="col-xs-12 no-padding">


                                                                <div class="col-xs-2 no-padding paddingtopnew widthimage">
                                                                    <img src="{{ asset('images/pH-icon.png') }}">
                                                                </div>
                                                                <div class="col-xs-3 no-padding toppadding">
                                                                    <span class="scene-control-value">pH VALUE</span>
                                                                </div>
                                                                <div class="col-xs-7 no-padding paddingleft">
                                                                    <div class="range-slider">
                                                                        <input type="text" class="js-range-slider"
                                                                               value="0 100"/>
                                                                    </div>
                                                                </div>


                                                                <!--CONDUCTIVITY-->

                                                                <div class="col-xs-12 no-padding">


                                                                    <div class="col-xs-2 no-padding paddingtopnew widthimage">
                                                                        <img src="{{ asset('images/electrical-icon.png') }}">
                                                                    </div>
                                                                    <div class="col-xs-3 no-padding toppadding">
                                                                        <span class="scene-control-value">CONDUCTIVITY</span>
                                                                    </div>
                                                                    <div class="col-xs-7 no-padding paddingleft">
                                                                        <div class="range-slider">
                                                                            <input type="text" class="js-range-slider"
                                                                                   value="0 100"/>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-4 no-padding float-left">

                                                    <div class="col-xs-12 no-padding float-left">
                                                        <div id="handle2" class="rs-handle"
                                                             style="height: 0!important; width: 0!important;"></div>
                                                        <div class="col-xs-12 no-padding float-left devicecontrol">
                                                            <span class="scene-control-value">FAN SPEED</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 no-padding float-left">
                                                        <!--<div id="handle3" class="rs-handle" style="height: 0!important; width: 0!important;"></div>-->
                                                        <!--<div class="col-xs-12 no-padding float-left devicecontrol">-->
                                                        <!--<span class="scene-control-value">FAN SPEED</span>-->
                                                        <!--</div>-->

                                                        <div class="container-fluid">

                                                            <div class="main-contents">
                                                                <div class="col-12">
                                                                    <h1 id="timer"></h1></div>
                                                                <div class="col-12" id="selector">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="btn btn-secondary"
                                                                                 id="decrease">-
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <h3 class="minutes"></h3></div>
                                                                        <div class="col">
                                                                            <div class="btn btn-secondary"
                                                                                 id="increase">+
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class='progress'>
                                                                        <div class="progress-bar bg-success"
                                                                             role="progressbar" style="width: 0%"
                                                                             aria-valuenow="0" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 btn btn-primary" id="start">Exicute
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>


                                                </div>

                                                <div class="col-xs-12 no-padding float-left">
                                                    <div class="col-xs-6 no-padding float-left"></div>
                                                    <div class="col-xs-6 no-padding float-left">
                                                        <div class="col-xs-12 no-padding float-left">
                                                            <div class="col-xs-6 no-padding float-left">
                                                                <button type="button" class="btn btn-success">Success
                                                                </button>
                                                            </div>
                                                            <div class="col-xs-6 no-padding float-left">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>

                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">DEVICES<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu mega-dropdown-menu dropdown-menu-custom">

                                </ul>
                            </li>

                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">SENSORS<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu mega-dropdown-menu dropdown-menu-custom">
                                    <div class="col-md-12 no-padding force-overflow">


                                        <!--</div>-->


                                    </div>
                                </ul>
                            </li>

                        </ul>--}}

                        <ul class="nav navbar-nav navbar-right">
                            <div class="profile">
                                <div class="col-xs-12 no-padding">
                                    {{--<div class="col-xs-2 no-padding user-image float-left"><img
                                                src="{{ asset('images/user-image.png"></div>--}}
                                    <div class="col-xs-12 no-padding user-name float-left">
                                        @guest
                                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            <li><a class="nav-link"
                                                   href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                       role="button" data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            <i class="fa fa-power-off"></i> {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                              method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                                @endguest
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">NOTIFICATIONS<span class="caret"></span></a>
                                 <ul class="dropdown-menu" role="menu">


                                 </ul>
                             </li>
                             <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">WARNINGS<span class="caret"></span></a>
                                 <ul class="dropdown-menu" role="menu">


                                 </ul><i class="fa fa-circle status-mark"
                                                                 aria-hidden="true"></i>
                             </li>-->


                            <div class="nav">
                                <input type="checkbox" id="navtoggle"/>
                                <input type="checkbox" id="deletetoggle"/>
                                <!--<div class="title">An Experiment</div>-->
                                <div class="toggleNotifications">
                                    <div class="count">
                                        <div class="num">1</div>
                                        <div class="num">2</div>
                                        <div class="num">3</div>
                                        <div class="num">4</div>
                                    </div>
                                    <label class="show" for="navtoggle"><i class="fa fa-bell">
                                            <!--notifications--></i></label>
                                    <div class="notifications">
                                        <div class="btnbar">
                                            <div class="text full">NOTIFICATIONS</div>
                                            <div class="text empty">RESTORE NOTIFICATIONS</div>
                                            <label class="delete" for="deletetoggle">
                                                <i class="fa fa-minus-circle full"></i>
                                                <i class="fa fa-window-restore empty"></i>
                                            </label>
                                        </div>
                                        <div class="groupofnotes">
                                            <div class="note">
                                                <div class="col-md-xs no-padding float-left padtopbot">
                                                    <div class="col-xs-8 no-padding float-left">
                                                        <div class="col-xs-12 no-padding float-left notify-heading">
                                                            SPRINKLER
                                                        </div>
                                                        <div class="col-xs-12 no-padding float-left notify-subline">
                                                            SPRINKLER TIME IS OVER
                                                        </div>
                                                        <div class="col-xs-12 no-padding float-left notify-subline2">
                                                            00:00:00
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 no-padding float-left notify-icon">
                                                        <i class="fa fa-check full"></i></div>
                                                    <div class="notify-time">
                                                        2 min ago
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note sensor-notification">
                                                <div class="col-xs-12 no-padding float-left padtopbot">
                                                    <div class="col-xs-8 no-padding float-left">
                                                        <div class="col-xs-12 no-padding float-left notify-heading">
                                                            HUMIDITY
                                                        </div>
                                                        <div class="col-xs-12 no-padding float-left notify-subline">
                                                            HUMIDITY IS INCREASING NOW. YOU MAY SWITCH ON ALL FANS NOW
                                                        </div>
                                                        <div class="col-xs-12 no-padding float-left notify-subline2">
                                                            <!--YOU MAY SWITCH ON ALL FANS NOW-->
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 no-padding float-left notify-icon sensor-notification-icon">
                                                        <img src="{{ asset('images/humidity-icon.png') }}">
                                                        <div class="notify-time">
                                                            2 min ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note read">
                                                <div class="col-xs-12 no-padding float-left padtopbot">
                                                    <div class="col-xs-8 no-padding float-left">
                                                        <div class="col-xs-12 no-padding float-left notify-heading">
                                                            SPRINKLER
                                                        </div>
                                                        <div class="col-xs-12 no-padding float-left notify-subline">
                                                            SPRINKLER TIME IS OVER
                                                        </div>
                                                        <div class="col-md-12 no-padding float-left notify-subline2">
                                                            00:00:00
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 no-padding float-left notify-icon"><i
                                                                class="fa fa-check full"></i>
                                                        <div class="notify-time">
                                                            2 min ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="note read">
                                                <div class="col-md-12 no-padding float-left padtopbot">
                                                    <div class="col-md-8 no-padding float-left">
                                                        <div class="col-md-12 no-padding float-left notify-heading">
                                                            SPRINKLER
                                                        </div>
                                                        <div class="col-md-12 no-padding float-left notify-subline">
                                                            SPRINKLER TIME IS OVER
                                                        </div>
                                                        <div class="col-md-12 no-padding float-left notify-subline2">
                                                            00:00:00
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 no-padding float-left notify-icon"><i
                                                                class="fa fa-check full"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </ul>


                    </div><!-- /.nav-collapse -->
                </nav>

            </header>

        </div>
    </div>

    @if(Session::has('message'))
        {{--<div class="col-md-12 ">--}}
        <div class="col-md-12 no-padding err-msg alert {{ Session::get('alert-class', 'alert-info') }}">
            {{ Session::get('message') }}
        </div>
        {{--</div>--}}
    @endif
    <div class="col-md-12 content-area">
        <div class="greenhouse-view">

            <div class="col-md-6 small-padding">
                <div class="col-xs-5 greehouse-view-heading float-left">GREENHOUSE VIEW</div>
                <div class="col-xs-12 section-bg float-left top-padding">
                    <div class="col-xs-12 no-padding">
                        <form role="form">
                            <div class="col-md-6 no-padding float-left input-details-form-element">
                                <div class="form-group">
                                    {{--<label class="input-details-lable" for="usr">No of Square feets</label>--}}
                                    <input type="text" class="form-control input-details-text-box" id="greenhouseName"
                                           placeholder="Greenhouse Name">
                                </div>
                            </div>
                            <div class="col-md-6 no-padding float-left input-details-form-element">
                                <div class="form-group">
                                    {{-- <label class="input-details-lable" for="usr"></label>--}}
                                    <input type="text" class="form-control input-details-text-box" id="greenhouseID"
                                           placeholder="Greenhouse ID">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 no-padding outter-tool-sec">
                        <form role="form">
                            <div class="col-md-4 no-padding float-left create-gh-tool">
                                <div class="col-md-12 no-padding float-left tool-main-fram">
                                    <div class="col-md-12 no-padding float-left tool-topic">Add Main Floor</div>
                                    <div class="col-md-12 no-padding float-left tool-img-cls">
                                        <img width="50%" class="img-responsive" src="{{ asset('images/main-floor.png') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 no-padding float-left create-gh-tool">
                                <div class="col-md-12 no-padding float-left tool-main-fram">
                                    <div class="col-md-12 no-padding float-left tool-topic">Add a section</div>
                                    <div class="col-md-12 no-padding float-left tool-img-cls">
                                        <img width="50%" class="img-responsive" src="{{ asset('images/section-floor.png') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 no-padding float-left create-gh-tool">
                                <div class="col-md-12 no-padding float-left tool-main-fram">
                                    <div class="col-md-12 no-padding float-left tool-topic">Add a door</div>
                                    <div class="col-md-12 no-padding float-left tool-img-cls">
                                        <img width="50%" class="img-responsive" src="{{ asset('images/door.png') }}">
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
                <div class="col-xs-12 section-bg greenhouse-map bot-pad-new float-left">
                    <div class="col-xs-12 float-left">
                        <img class="img-responsive" src="{{ asset('images/greenhouse-map-create.png') }}">
                    </div>

                </div>
            </div>
        </div>

        <div class="greenhouse-status1">
            <div class="col-md-6 small-padding">
                <div class="col-xs-5 greehouse-view-heading">GREENHOUSE STATUS</div>
                <div class="col-xs-12 section-bg no-padding top-padding float-left">
                    <form id="formGh" role="form">
                        <div class="col-md-6 no-padding float-left input-details-form-element">

                            <div class="form-group">

                                {{--<div class="col-md-12 no-padding float-left"></div>--}}

                                <input class="form-control input-details-text-box" type="text" id="date1" name="date1"
                                       placeholder="Crope date"/>


                            </div>

                        </div>
                        <div class="col-md-6 no-padding float-left input-details-form-element">

                            <div class="form-group">
                                {{--<label class="input-details-lable" for="usr">Type of plant</label>--}}
                                <select class="form-control input-details-text-box" id="txtPlant">
                                    <option class="plant-first-element">Type of plant</option>
                                    <option value="tomato">Tomato</option>
                                    <option value="carrot">Carrot</option>
                                    <option value="cabbage">Cabbage</option>
                                    <option value="cucumber">Cucumber</option>
                                    <option value="celery">Celery</option>
                                    <option value="radish">Radish</option>
                                    <option value="eggplant">Eggplant</option>
                                    <option value="daikon">Daikon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 no-padding float-left input-details-form-element">
                            <div class="form-group">
                                {{--<label class="input-details-lable" for="usr">No of Square feets</label>--}}
                                <input type="text" class="form-control input-details-text-box" id="txtWidth"
                                       placeholder="Greenhouse Width(ft)">
                            </div>
                        </div>
                        <div class="col-md-6 no-padding float-left input-details-form-element">
                            <div class="form-group">
                                {{-- <label class="input-details-lable" for="usr"></label>--}}
                                <input type="text" class="form-control input-details-text-box" id="txtHeight"
                                       placeholder="Greenhouse Height(ft)">
                            </div>
                        </div>
                        <div class="col-md-12 no-padding float-left input-details-form-element button-aligment-cls">
                            <div class="form-group" style="text-align: center">

                                <button class="btn btn-success">Next &nbsp; <i class="fa fa-angle-down"></i></button>
                                {{--<button class="btn btn-primary">Next &nbsp; <i--}}
                                {{--class="fa fa-angle-down"></i></button>--}}
                                {{--<button class="btn btn-success"></button>--}}
                            </div>
                        </div>

                    </form>

                </div>
                <div id="devicesSensors"
                     class="col-xs-12 section-bg no-padding top-padding top-margin bot-pad float-left">
                    @include('devices_sensors')
                </div>
            </div>
        </div>


    </div>

    <div>
    </div>

@endsection

@section('page_script')
    <script>
        create_gh = '{{url('create_greenhouse/add')}}';
    </script>
    <script src="{{asset('js/pages/devices_sensors.js')}}"></script>
@endsection


