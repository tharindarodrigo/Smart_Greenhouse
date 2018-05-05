<div class="col-md-12 no-padding float-left middle-div">
    <div class="col-md-12 no-padding float-left devices-count-heading">
        Devices
    </div>
    <div class="col-md-12 no-padding float-left">
        <div class="single-device no-padding float-left single-item-counter-outter">
            <div class="col-md-12 no-padding float-left single-item-counter">
                <div class="col-md-12 float-left no-padding device-count-fram">
                    <img class="dev-img" src="{{ asset('images/fan.png') }}">
                </div>
                <div class="col-md-12 float-left no-padding">
                    <div class="counter fan">
                        <div class="minus fan">
                            <div class="line"></div>
                        </div>
                        <div class="number">
                            <span class="fadeIn fan-count">@if(isset($newArray)){{$newArray['Fan']}} @else 0 @endif</span>
                        </div>
                        <div class="plus fan">
                            <div class="line-h"></div>
                            <div class="line-v"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-name">FAN</div>
        </div>
        <div class="single-device no-padding float-left single-item-counter-outter">
            <div class="col-md-12 no-padding float-left single-item-counter">
                <div class="col-md-12 float-left no-padding device-count-fram">
                    <img class="dev-img" src="{{ asset('images/sprinkler.png') }}">
                </div>
                <div class="col-md-12 float-left no-padding">
                    <div class="counter sprinkler">
                        <div class="minus sprinkler">
                            <div class="line"></div>
                        </div>
                        <div class="number">
                            <span class="fadeIn sprinkler-count">@if(isset($newArray)){{$newArray['Sprinkler']}} @else 0 @endif</span>
                        </div>
                        <div class="plus sprinkler">
                            <div class="line-h"></div>
                            <div class="line-v"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-name">SPRINKLER</div>
        </div>

        {{--<div class="single-device no-padding float-left single-item-counter-outter">--}}
            {{--<div class="col-md-12 no-padding float-left single-item-counter">--}}
                {{--<div class="col-md-12 float-left no-padding device-count-fram">--}}
                    {{--<img class="dev-img" src="{{ asset('images/fogger.png') }}">--}}
                {{--</div>--}}
                {{--<div class="col-md-12 float-left no-padding">--}}
                    {{--<div class="counter fogger">--}}
                        {{--<div class="minus">--}}
                            {{--<div class="line"></div>--}}
                        {{--</div>--}}
                        {{--<div class="number">--}}
                            {{--<span class="fadeIn fogger-count">@if(isset($newArray)) {{$newArray}} @else 0 @endif</span>--}}
                        {{--</div>--}}
                        {{--<div class="plus">--}}
                            {{--<div class="line-h"></div>--}}
                            {{--<div class="line-v"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="device-name">FOGGER</div>--}}
        {{--</div>--}}
        <div class="single-device no-padding float-left single-item-counter-outter">
            <div class="col-md-12 no-padding float-left single-item-counter">
                <div class="col-md-12 float-left no-padding device-count-fram">
                    <img class="dev-img" src="{{ asset('images/hub.png') }}">
                </div>
                <div class="col-md-12 float-left no-padding">
                    <div class="counter hub">
                        <div class="minus hub">
                            <div class="line"></div>
                        </div>
                        <div class="number">
                            <span class="fadeIn hub-count">@if(isset($newArray)){{$newArray['HUB']}} @else 0 @endif</span>
                        </div>
                        <div class="plus hub">
                            <div class="line-h"></div>
                            <div class="line-v"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-name">HUB</div>
        </div>
    </div>
</div>
<div class="col-md-12 no-padding float-left middle-div">
    <div class="col-md-12 no-padding float-left devices-count-heading">
        Sensors
    </div>
    <div class="col-md-12 no-padding float-left">
        <div class="single-device no-padding float-left single-item-counter-outter">
            <div class="col-md-12 no-padding float-left single-item-counter">
                <div class="col-md-12 float-left no-padding device-count-fram">
                    <img class="dev-img" src="{{ asset('images/humidity-icon.png') }}">
                </div>
                <div class="col-md-12 float-left no-padding">
                    <div class="counter humidity">
                        <div class="minus humidity">
                            <div class="line"></div>
                        </div>
                        <div class="number">
                            <span class="fadeIn humidity-count">@if(isset($newArray)){{$newArray['Humidity']}} @else 0 @endif</span>
                        </div>
                        <div class="plus humidity">
                            <div class="line-h"></div>
                            <div class="line-v"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-name">HUMIDITY</div>
        </div>
        <div class="single-device no-padding float-left single-item-counter-outter">
            <div class="col-md-12 no-padding float-left single-item-counter">
                <div class="col-md-12 float-left no-padding device-count-fram">
                    <img class="dev-img" src="{{ asset('images/Light-icon.png') }}">
                </div>
                <div class="col-md-12 float-left no-padding">
                    <div class="counter light">
                        <div class="minus light">
                            <div class="line"></div>
                        </div>
                        <div class="number">
                            <span class="fadeIn light-count">@if(isset($newArray)){{$newArray['Light_intensity']}} @else 0 @endif</span>
                        </div>
                        <div class="plus light">
                            <div class="line-h"></div>
                            <div class="line-v"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-name">LIGHT</div>
        </div>

        <div class="single-device no-padding float-left single-item-counter-outter">
            <div class="col-md-12 no-padding float-left single-item-counter">
                <div class="col-md-12 float-left no-padding device-count-fram">
                    <img class="dev-img" src="{{ asset('images/temparature-icon.png') }}">
                </div>
                <div class="col-md-12 float-left no-padding">
                    <div class="counter temperature">
                        <div class="minus temperature">
                            <div class="line"></div>
                        </div>
                        <div class="number">
                            <span class="fadeIn temperature-count">@if(isset($newArray)){{$newArray['Temperature']}} @else 0 @endif</span>
                        </div>
                        <div class="plus temperature">
                            <div class="line-h"></div>
                            <div class="line-v"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-name">TEMPERATURE</div>
        </div>
        <div class="single-device no-padding float-left single-item-counter-outter">
            <div class="col-md-12 no-padding float-left single-item-counter">
                <div class="col-md-12 float-left no-padding device-count-fram">
                    <img class="dev-img" src="{{ asset('images/electrical-icon.png') }}">
                </div>
                <div class="col-md-12 float-left no-padding">
                    <div class="counter electrical">
                        <div class="minus electrical">
                            <div class="line"></div>
                        </div>
                        <div class="number">
                            <span class="fadeIn electrical-count">@if(isset($newArray)){{$newArray['Light_intensity']}} @else 0 @endif</span>
                        </div>
                        <div class="plus electrical">
                            <div class="line-h"></div>
                            <div class="line-v"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-name">ELECTRICAL</div>
        </div>
        <div class="single-device no-padding float-left single-item-counter-outter">
            <div class="col-md-12 no-padding float-left single-item-counter">
                <div class="col-md-12 float-left no-padding device-count-fram">
                    <img class="dev-img" src="{{ asset('images/pH-icon.png') }}">
                </div>
                <div class="col-md-12 float-left no-padding">
                    <div class="counter ph">
                        <div class="minus ph">
                            <div class="line"></div>
                        </div>
                        <div class="number">
                            <span class="fadeIn ph-count">@if(isset($newArray)){{$newArray['pH']}} @else 0 @endif</span>
                        </div>
                        <div class="plus ph">
                            <div class="line-h"></div>
                            <div class="line-v"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-name">PH</div>
        </div>
    </div>
</div>
<div>
</div>