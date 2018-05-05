@extends('layout.app')

@section('title','Smart Greenhouse Analytics')

@section('body')

    {{--@if(Session::has('message'))--}}
    {{--<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>--}}
    {{--@endif--}}
    <div class="col-xs-12 col-sm-12 col-xs-12 main-heading">
        <div class="col-xs-3 logo-img"><img src="images/logo.png"></div>
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
                        <ul class="nav navbar-nav">
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">GREENHOUSE<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu mega-dropdown-menu dropdown-menu-custom">
                                    {{--@if (Auth::user()->can('create_greenhouse'))--}}
                                    {{--<div class="col-md-3">--}}
                                    {{--<div class="item-greenhouse col-xs-3">--}}
                                    {{--<div><span class="greenhouse-item">Add Greenhouse</span></div>--}}
                                    {{--<div><span class="greenhouse-item plant-item">CARROT</span></div>--}}
                                    {{--<img class="add-greenhouse"  src="{{ asset('images/add-greenhouse.png') }}">--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--@endif--}}
                                    {{--<div class="col-xs-9 force-overflow-y">--}}
                                    <div class="force-overflow-y col-xs-12">
                                        @if (Auth::user()->can('create_greenhouse'))
                                            <a href="{{route('create_greenhouse')}}">
                                                <div class="item-greenhouse col-xs-3">
                                                    <div><span class="greenhouse-item">Add Greenhouse</span></div>
                                                    {{--<div><span class="greenhouse-item plant-item">CARROT</span></div>--}}
                                                    <img class="add-greenhouse"
                                                         src="{{ asset('images/add-greenhouse.png') }}">
                                                </div>
                                            </a>
                                        @endif
                                        <div class="item-greenhouse col-xs-3">
                                            <div><span class="greenhouse-item">Greenhouse 2</span></div>
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="images/greenhouse-icon.png">
                                        </div>
                                        <div class="item-greenhouse col-xs-3">
                                            <div><span class="greenhouse-item">Greenhouse 3</span></div>
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="images/greenhouse-icon.png">
                                        </div>
                                        <div class="item-greenhouse col-xs-3">
                                            <div><span class="greenhouse-item">Greenhouse 4</span></div>
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="images/greenhouse-icon.png">
                                        </div>
                                        <div class="item-greenhouse col-xs-3">
                                            <div><span class="greenhouse-item">Greenhouse 5</span></div>
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="images/greenhouse-icon.png">
                                        </div>
                                        <div class="item-greenhouse col-xs-3">
                                            <div><span class="greenhouse-item">Greenhouse 6</span></div>
                                            <div><span class="greenhouse-item plant-item">CARROT</span></div>
                                            <img src="images/greenhouse-icon.png">
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">SCENES<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu mega-dropdown-menu dropdown-menu-custom">
                                    <div class="col-xs-12 no-padding">

                                        <div class="col-md-4 no-padding float-left">
                                            @if (Auth::user()->can('create_greenhouse'))
                                                <div class="col-md-12 no-padding float-left">
                                                    <div class="col-xs-12 no-padding float-left new-btn-div">
                                                        <button type="button" class="btn btn-success scene-new-btn">
                                                            Create New
                                                        </button>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-xs-12 no-padding force-overflow">
                                                <!--sigle scene-->

                                                <div class="col-xs-12 scene-single-item">
                                                    <div class="col-xs-2 no-padding float-left">
                                                        <img src="images/scene-icon.png">
                                                    </div>
                                                    <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                        <span class="scene-topic">Scene ID :<span
                                                                    class="scene-topic-value">scene001</span> </span>
                                                    </div>
                                                </div>

                                                <!--sigle scene-->

                                                <div class="col-xs-12 scene-single-item">
                                                    <div class="col-xs-2 no-padding float-left">
                                                        <img src="images/scene-icon.png">
                                                    </div>
                                                    <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                        <span class="scene-topic">Scene ID :<span
                                                                    class="scene-topic-value">scene001</span> </span>
                                                    </div>
                                                </div>

                                                <!--sigle scene-->

                                                <div class="col-xs-12 scene-single-item">
                                                    <div class="col-xs-2 no-padding float-left">
                                                        <img src="images/scene-icon.png">
                                                    </div>
                                                    <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                        <span class="scene-topic">Scene ID :<span
                                                                    class="scene-topic-value">scene001</span> </span>
                                                    </div>
                                                </div>

                                                <!--sigle scene-->

                                                <div class="col-xs-12 scene-single-item">
                                                    <div class="col-xs-2 no-padding float-left">
                                                        <img src="images/scene-icon.png">
                                                    </div>
                                                    <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                        <span class="scene-topic">Scene ID :<span
                                                                    class="scene-topic-value">scene001</span> </span>
                                                    </div>
                                                </div>

                                                <!--sigle scene-->

                                                <div class="col-xs-12 scene-single-item">
                                                    <div class="col-xs-2 no-padding float-left">
                                                        <img src="images/scene-icon.png">
                                                    </div>
                                                    <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                        <span class="scene-topic">Scene ID :<span
                                                                    class="scene-topic-value">scene001</span> </span>
                                                    </div>
                                                </div>

                                                <!--sigle scene-->

                                                <div class="col-xs-12 scene-single-item">
                                                    <div class="col-xs-2 no-padding float-left">
                                                        <img src="images/scene-icon.png">
                                                    </div>
                                                    <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                        <span class="scene-topic">Scene ID :<span
                                                                    class="scene-topic-value">scene001</span> </span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 scene-single-item">
                                                    <div class="col-xs-2 no-padding float-left">
                                                        <img src="images/scene-icon.png">
                                                    </div>
                                                    <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                        <span class="scene-topic">Scene ID :<span
                                                                    class="scene-topic-value">scene001</span> </span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 scene-single-item">
                                                    <div class="col-xs-2 no-padding float-left">
                                                        <img src="images/scene-icon.png">
                                                    </div>
                                                    <div class="col-xs-10 no-padding float-left">
                                                        <span class="scene-topic">Scene Name :<span
                                                                    class="scene-topic-value">Carrot</span> </span><br>
                                                        <span class="scene-topic">Scene ID :<span
                                                                    class="scene-topic-value">scene001</span> </span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-xs-8 no no-padding padding-left float-left">


                                            <div class="col-sx-12 scene-control float-left">
                                                <div class="col-xs-8 no-padding ">

                                                    <!--HUMIDITY-->

                                                    <div class="col-xs-12 no-padding">


                                                        <div class="col-xs-2 no-padding paddingtopnew widthimage">
                                                            <img src="images/humidity-icon.png">
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
                                                            <img src="images/temparature-icon.png">
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
                                                                <img src="images/Light-icon.png">
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
                                                                    <img src="images/pH-icon.png">
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
                                                                        <img src="images/electrical-icon.png">
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

                                                        {{--<div class="container-fluid">

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

                                                                --}}{{--<div class="col-12">
                                                                    <div class='progress'>
                                                                        <div class="progress-bar bg-success"
                                                                             role="progressbar" style="width: 0%"
                                                                             aria-valuenow="0" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>--}}{{--
                                                                <div class="col-12 btn btn-primary" id="start">Exicute
                                                                </div>

                                                            </div>
                                                        </div>--}}


                                                    </div>


                                                </div>
                                                <div class="col-md-12 no-padding float-left" style="text-align: right;">

                                                    <div class="col-xs-4 no-padding float-left edit-btn-div">
                                                        @if (Auth::user()->can('create_greenhouse'))
                                                            <button type="button"
                                                                    class="btn btn-success scene-edit-btn">Edit
                                                            </button>
                                                        @endif
                                                    </div>
                                                    <div class="col-xs-4 no-padding float-left edit-btn-div">
                                                        @if (Auth::user()->can('create_greenhouse'))
                                                            <button type="button"
                                                                    class="btn btn-success scene-save-btn">Save
                                                            </button>
                                                        @endif
                                                    </div>

                                                    <div class="col-xs-4 no-padding float-left edit-btn-div">
                                                        <button type="button" class="btn btn-success scene-exicute-btn">
                                                            Exicute
                                                        </button>
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

                                        <div class="col-md-12 no-padding float-left padleft">

                                            <div class="col-md-12 sensor-heading">
                                                <div class="col-md-6 text-left no-padding">HUMIDITY</div>
                                                <div class="col-md-6 text-right no-padding">No of Sensors
                                                    {{--: @if(count($details)) ? {{count($details['humidity'])}} : 0 @endif</div>--}}
                                                    : {{ (count($details)) ? count($details['humidity']) : 0 }}</div>

                                            </div>
                                            @if(count($details))
                                                @foreach($details['humidity'] as $humidityDetail)
                                                    <div class="col-md-4 no-padding outter-div float-left">

                                                        <div class="col-md-12 float-left single-sensor no-padding">
                                                            <div class="col-md-12 individual-sensor-padding">

                                                                <div class="col-xs-3 no-padding float-left individual-sensor-icon">
                                                                    <img src="images/humidity-icon.png">
                                                                </div>
                                                                <div class="col-xs-9 no-padding float-left individual-sensor-details">
                                                                <span class="scene-topic">Sensor ID :<span
                                                                            class="scene-topic-value">--</span> </span><br>
                                                                    <span class="scene-topic">State :<span
                                                                                class="scene-topic-value">{{$humidityDetail['state']}}</span> </span><br>
                                                                    <span class="scene-topic">Value :<span
                                                                                class="scene-topic-value">{{$humidityDetail['value']}}
                                                                            Kg/m</span> </span><br>
                                                                    <span class="scene-topic">Time :<span
                                                                                class="scene-topic-value">{{$humidityDetail['time']}}</span> </span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif


                                        </div>


                                        <div class="col-md-12 no-padding float-left padleft">

                                            <div class="col-md-12 sensor-heading">
                                                <div class="col-md-6 text-left no-padding">TEMPERATURE</div>
                                                <div class="col-md-6 text-right no-padding">No of Sensors
                                                    {{--                                                    : {{count(isset($details['temperature']))}}</div>--}}
                                                    : {{ (count($details)) ? count($details['temperature']) : 0 }}</div>

                                            </div>

                                            @if(count($details))
                                                @foreach($details['temperature'] as $temperatureDetail)
                                                    <div class="col-md-4 no-padding outter-div float-left">
                                                        <div class="col-md-12 float-left single-sensor no-padding">
                                                            <div class="col-md-12 individual-sensor-padding">

                                                                <div class="col-xs-3 no-padding float-left individual-sensor-icon">
                                                                    <img src="images/temparature-icon.png">
                                                                </div>
                                                                <div class="col-xs-9 no-padding float-left individual-sensor-details">
                                                                <span class="scene-topic">Sensor ID :<span
                                                                            class="scene-topic-value">--</span> </span><br>
                                                                    <span class="scene-topic">State :<span
                                                                                class="scene-topic-value">{{$temperatureDetail['state']}}</span> </span><br>
                                                                    <span class="scene-topic">Value :<span
                                                                                class="scene-topic-value">{{$temperatureDetail['value']}}
                                                                            <sup>0</sup>C</span> </span><br>
                                                                    <span class="scene-topic">Time :<span
                                                                                class="scene-topic-value">{{$temperatureDetail['time']}}</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            @endif
                                        </div>


                                        <div class="col-md-12 no-padding float-left padleft">
                                            <div class="col-md-12 sensor-heading">
                                                <div class="col-md-6 text-left no-padding">LIGHT INTENSITY</div>
                                                <div class="col-md-6 text-right no-padding">No of Sensors
                                                    {{--                                                    : {{count(isset($details['light']))}}</div>--}}
                                                    : {{ (count($details)) ? count($details['light']) : 0 }}</div>
                                            </div>
                                            @if(count($details))
                                                @foreach($details['light'] as $lightDetail)
                                                    <div class="col-md-4 no-padding outter-div float-left">
                                                        <div class="col-md-12 float-left single-sensor no-padding">
                                                            <div class="col-md-12 individual-sensor-padding">

                                                                <div class="col-xs-3 no-padding float-left individual-sensor-icon">
                                                                    <img src="images/Light-icon.png">
                                                                </div>
                                                                <div class="col-xs-9 no-padding float-left individual-sensor-details">
                                                                <span class="scene-topic">Sensor ID :<span
                                                                            class="scene-topic-value">--</span> </span><br>
                                                                    <span class="scene-topic">State :<span
                                                                                class="scene-topic-value">{{$lightDetail['state']}}</span> </span><br>
                                                                    <span class="scene-topic">Value :<span
                                                                                class="scene-topic-value">{{$lightDetail['value']}}
                                                                            lux</span> </span><br>
                                                                    <span class="scene-topic">Time :<span
                                                                                class="scene-topic-value">
                                                                                {{$lightDetail['time']}}</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif


                                        </div>

                                        <div class="col-md-12 no-padding float-left padleft">
                                            <div class="col-md-12 sensor-heading">
                                                <div class="col-md-6 text-left no-padding">PH</div>
                                                <div class="col-md-6 text-right no-padding">No of Sensors : 1
                                                </div>
                                            </div>
                                            <div class="col-md-4 no-padding outter-div float-left">
                                                <div class="col-md-12 float-left single-sensor no-padding">
                                                    <div class="col-md-12 individual-sensor-padding">
                                                        <div class="col-xs-3 no-padding float-left individual-sensor-icon">
                                                            <img src="images/pH-icon.png">
                                                        </div>
                                                        <div class="col-xs-6 no-padding float-left individual-sensor-details">
                                                                <span class="scene-topic">Sensor ID :<span
                                                                            class="scene-topic-value">--</span> </span><br>
                                                            <span class="scene-topic">State :<span
                                                                        class="scene-topic-value"></span> </span><br>
                                                            <span class="scene-topic">Value :<span
                                                                        class="scene-topic-value">
                                                                            </span> </span><br>
                                                            <span class="scene-topic">Time :<span
                                                                        class="scene-topic-value">
                                                                                </span>
                                                                    </span>
                                                        </div>
                                                        <div class="col-xs-3 no-padding float-left individual-sensor-details">
                                                            <div class="toggle-switch-bg">
                                                                <div class="toggle-switch"><label class="switch lable-new">
                                                                        <input type="checkbox">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!--</div>-->


                                    </div>
                                </ul>
                            </li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <div class="profile">
                                <div class="col-xs-12 no-padding">
                                    {{--<div class="col-xs-2 no-padding user-image float-left"><img
                                                src="images/user-image.png"></div>--}}
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
                                                        <img src="images/humidity-icon.png">
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

            <div class="col-md-5 small-padding">
                <div class="col-xs-5 greehouse-view-heading float-left">GREENHOUSE VIEW</div>
                <div class="col-xs-12 section-bg float-left">
                    <div class="col-xs-9">
                        <div class="col-xs-4 no-padding"><p class="filed">Name <span class="value">House01</span></p>
                        </div>
                        <div class="col-xs-4 no-padding"><p class="filed">Square fts <span class="value">1000ft</span>
                            </p>
                        </div>
                        <div class="col-xs-4 no-padding"><p class="filed">Crops <span class="value">12-02-2017</span>
                            </p>
                        </div>
                        <div class="col-xs-4 no-padding"><p class="filed">ID <span class="value">001</span></p></div>
                        <div class="col-xs-4 no-padding">
                            <div class="col-xs-12">
                                <div class="col-xs-6">
                                    <p class="filed status-algn">Status</p>
                                </div>
                                <div class="col-xs-6 status-switch">
                                    <div class="toggle-switch"><label class="switch lable-new">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 no-padding"><p class="filed">Scene<span class="value">Scene001</span></div>
                    </div>

                    <div class="col-xs-3">
                        <div class="col-xs-12 no-padding plant text-center">
                            <p class="filed plant-filed">Plant <span class="value">Carrot</span></p>
                            <img class="img-class-plant" src="images/carrot.png">
                        </div>
                    </div>


                </div>
                <div class="col-xs-12 section-bg greenhouse-map bot-pad-new float-left">
                    <div class="col-xs-12 float-left">
                        <img class="img-responsive" src="images/map.png">
                    </div>

                </div>
            </div>
        </div>

        <div class="greenhouse-status1">
            <div class="col-md-4 small-padding">
                <div class="col-xs-5 greehouse-view-heading">GREENHOUSE STATUS</div>
                <div class="col-xs-12 section-bg no-padding top-padding float-left" style="padding-bottom: 18px;">
                    <!--<div class="col-md-12 top-padding">-->
                    <!--content holder-->
                    <!--</div>-->
                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-3 no-padding"><img class="img-responsive device-icon"
                                                                  src="images/Fan-animation.gif"></div>
                            <div class="col-xs-6 no-padding"><span class="sensor-name">FAN SPEED</span>
                                <h2 class="sensor-value">300 RPM</h2></div>
                            <div class="col-xs-3 no-padding"><i class="fa fa-circle status-mark"
                                                                aria-hidden="true"></i><span
                                        class="device-status">ON</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-3 no-padding"><img class="img-responsive device-icon"
                                                                  src="images/sprinkler-animation.gif"></div>
                            <div class="col-xs-6 no-padding"><span class="sensor-name">SPRINKLER</span>
                                <h2 class="sensor-value">01:45:34</h2></div>
                            <div class="col-xs-3 no-padding"><i class="fa fa-circle status-mark"
                                                                aria-hidden="true"></i><span
                                        class="device-status">ON</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 section-bg no-padding top-padding top-margin bot-pad float-left">
                    <!--============================-->


                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1">
                        <img class="select img-res-new" src="images/graph-humidity.png">
                        <img class="unselect img-res-new" src="images/graph-humidity-unselected.png">
                    </label>

                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">
                        <img class="select img-res-new" src="images/graph-temp.png">
                        <img class="unselect img-res-new" src="images/graph-temp-unselected.png">
                    </label>

                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3">
                        <img class="select img-res-new" src="images/graph-light.png">
                        <img class="unselect img-res-new" src="images/graph-light-unselected.png">

                    </label>

                    <input id="tab4" type="radio" name="tabs">
                    <label for="tab4">
                        <img class="select img-res-new" src="images/graph-pH.png">
                        <img class="unselect img-res-new" src="images/graph-pH-unselected.png">

                    </label>

                    <input id="tab5" type="radio" name="tabs">
                    <label for="tab5">
                        <img class="select img-res-new" src="images/graph-electrical.png">
                        <img class="unselect img-res-new" src="images/graph-electrical-unselected.png">

                    </label>

                    <input id="tab6" type="radio" name="tabs">
                    <label for="tab6">
                        <img class="select img-res-new" src="images/graph-soil.png">
                        <img class="unselect img-res-new" src="images/graph-soil-unselected.png">

                    </label>


                    <section id="content1">
                        <div id="humidity" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </section>

                    <section id="content2">
                        <div id="temperature" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </section>

                    <section id="content3">
                        <div id="light" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </section>

                    <section id="content4">
                        <div id="ph" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </section>

                    <section id="content5">
                        <div id="electrical" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </section>

                    <section id="content6">
                        <div id="soil" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </section>


                    <!--<section id="content5">-->
                    <!--&lt;!&ndash;<div id="electrical" style="min-width: 310px; height: 400px; margin: 0 auto"></div>&ndash;&gt;-->
                    <!--asdadas-->
                    <!--</section>-->


                    <!--============================-->
                </div>
            </div>
        </div>

        <div class="greenhouse-status2">
            <div class="col-md-3 small-padding">
                <div class="col-xs-5 greehouse-view-heading">SENSORS DETAILS</div>
                <div class="col-xs-12 section-bg float-left">

                    <!--Sensor value Humidity-->

                    <div class="col-xs-6 sensor-single-section">
                        <div class="col-xs-12  ">
                            <div class="col-xs-4 sensor-icon"><img class="img-responsive sensor-icon-cls"
                                                                   src="images/humidity-icon.png">
                            </div>
                            <div class="col-xs-8 sensor-status"><h2
                                        class="sensor-status-value High-Low blink blink-furiously blink-infinite"><i
                                            class="fa fa-caret-up icon-padding "></i>HIGH</h2></div>
                            <div class="col-xs-12 sensor-values"><span class="sensor-name">HUMIDITY</span>
                                {{--<h2 class="sensor-value">{{$humidityDetail['value']}} Kg/m</h2>--}}
                                <h2 class="sensor-value">60 Kg/m</h2>
                            </div>
                        </div>

                    </div>

                    <!--Sensor Temperature-->

                    <div class="col-xs-6 sensor-single-section">
                        <div class="col-xs-12  ">
                            <div class="col-xs-4 sensor-icon"><img class="img-responsive sensor-icon-cls"
                                                                   src="images/temparature-icon.png">
                            </div>
                            <div class="col-xs-8 sensor-status"><h2 class="sensor-status-value medium">MEDIUM</h2></div>
                            <div class="col-xs-12 sensor-values"><span class="sensor-name">TEMPERATURE</span>
                                {{--<h2 class="sensor-value">{{$temperatureDetail['value']}} <sup>0</sup>C</h2>--}}
                                <h2 class="sensor-value">23 <sup>0</sup>C</h2>
                            </div>
                        </div>

                    </div>

                    <!--Sensor Light-->

                    <div class="col-xs-6 sensor-single-section">
                        <div class="col-xs-12  ">
                            <div class="col-xs-4 sensor-icon"><img class="img-responsive sensor-icon-cls"
                                                                   src="images/Light-icon.png">
                            </div>
                            <div class="col-xs-8 sensor-status"><h2 class="sensor-status-value medium">MEDIUM</h2></div>
                            <div class="col-xs-12 sensor-values"><span class="sensor-name">LIGHT INTENSITY</span>
                                {{--<h2 class="sensor-value">{{$lightDetail['value']}} lux</h2>--}}
                                <h2 class="sensor-value">1267 lux</h2>
                            </div>
                        </div>

                    </div>

                    <!--Sensor PH-->

                    <div class="col-xs-6 sensor-single-section">
                        <div class="col-xs-12  ">
                            <div class="col-xs-4 sensor-icon"><img class="img-responsive sensor-icon-cls"
                                                                   src="images/pH-icon.png">
                            </div>
                            <div class="col-xs-8 sensor-status"><h2 class="sensor-status-value medium">MEDIUM</h2></div>
                            <div class="col-xs-12 sensor-values"><span class="sensor-name">pH VALUE</span>
                                <h2 class="sensor-value">--</h2></div>
                        </div>

                    </div>

                    <!--Electrical Conductivity-->

                    <div class="col-xs-6 sensor-single-section">
                        <div class="col-xs-12  ">
                            <div class="col-xs-4 sensor-icon"><img class="img-responsive sensor-icon-cls"
                                                                   src="images/electrical-icon.png">
                            </div>
                            <div class="col-xs-8 sensor-status"><h2
                                        class="sensor-status-value High-Low blink blink-furiously blink-infinite"><i
                                            class="fa fa-caret-down icon-padding "></i>LOW</h2></div>
                            <div class="col-xs-12 sensor-values"><span
                                        class="sensor-name">ELECTRICAL CONDUCTIVITY</span>
                                <h2 class="sensor-value">--{{--<span class=" electrical-units">mmho/cm</span>--}}</h2>
                            </div>
                        </div>

                    </div>

                    <!--Sensor Soil MOisture-->

                    <div class="col-xs-6 sensor-single-section">
                        <div class="col-xs-12  ">
                            <div class="col-xs-4 sensor-icon"><img class="img-responsive sensor-icon-cls"
                                                                   src="images/soil-icon.png">
                            </div>
                            <div class="col-xs-8 sensor-status"><h2 class="sensor-status-value medium">MEDIUM</h2></div>
                            <div class="col-xs-12 sensor-values"><span class="sensor-name">SOIL<br>MOISTURE</span>
                                <h2 class="sensor-value">--</h2></div>
                        </div>

                    </div>


                    <!--Sensor PH-->

                    <div class="col-xs-6 sensor-single-section">
                        <div class="col-xs-12  ">
                            <div class="col-xs-4 sensor-icon"><img class="img-responsive sensor-icon-cls"
                                                                   src="images/pH-icon.png">
                            </div>
                            <div class="col-xs-8 sensor-status"><h2 class="sensor-status-value medium">MEDIUM</h2></div>
                            <div class="col-xs-12 sensor-values"><span class="sensor-name">pH VALUE</span>
                                <h2 class="sensor-value">--</h2></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

