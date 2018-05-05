<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="http://ionden.com/a/plugins/ion.rangeSlider/static/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="http://ionden.com/a/plugins/ion.rangeSlider/static/css/ion.rangeSlider.skinFlat.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,‌​700,500,300,100' rel='stylesheet'
          type='text/css'>
    <link href='{{ URL::asset('css/perfect-scrollbar.css') }}' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/roundslider.min.css') }}">


</head>
<!--<div class="col-md-9 col-sm-6 col-xs-12 green">-->
<body>

{{--<div id="loading" class="loading">
    <img id="loading-image"
         class="loading-image"
         src="{{ asset('images/loader.gif') }}"
         width="200px"
         height="200px"
         alt="Loading..."/>
</div>--}}

<div class="flexContainer">
    <div class="circle">
        <img src="{{ asset('images/Loading-img.png') }}" alt="" class="img-responsive loading-img-logo">
    </div>
</div>


@section('body')
@show



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="http://cdn.kendostatic.com/2011.3.1007/js/kendo.all.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.6/prefixfree.min.js"></script>
<script src="http://ionden.com/a/plugins/ion.rangeSlider/static/js/ion-rangeSlider/ion.rangeSlider.js"></script>
<script src="{{ URL::asset('js/perfect-scrollbar.jquery.js') }}"></script>
<script src="{{ URL::asset('js/roundslider.min.js') }}"></script>

<script src="{{ URL::asset('js/main.js') }}"></script>

@yield('page_script')

</body>


</html>