$(document).ready(function () {

    // $(".dropdown").active(
    //     function() {
    //         jQuery(this).children('.dropdown-menu').slideDown("400");
    //         jQuery(this).addClass('open');
    //
    //     },
    //     function() {
    //         jQuery(this).children('.dropdown-menu').slideUp("400");
    //         jQuery(this).removeClass('open');
    //     }
    // );

    /*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Humidity XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/

    $('.force-overflow-y').perfectScrollbar();
    $('.force-overflow').perfectScrollbar();

    var data = ([

        [
            1370563200000,
            0.7562
        ],
        [
            1370736000000,
            0.7574
        ],
        [
            1370822400000,
            0.7543
        ],
        [
            1370908800000,
            0.751
        ],
        [
            1370995200000,
            0.7498
        ],
        [
            1371081600000,
            0.7477
        ],
        [
            1371168000000,
            0.7492
        ],
        [
            1371340800000,
            0.7487
        ],
        [
            1371427200000,
            0.748
        ],
        [
            1371513600000,
            0.7466
        ],
        [
            1371600000000,
            0.7521
        ],
        [
            1371686400000,
            0.7564
        ],
        [
            1371772800000,
            0.7621
        ],
        [
            1371945600000,
            0.763
        ],
        [
            1372032000000,
            0.7623
        ],
        [
            1372118400000,
            0.7644
        ],
        [
            1372204800000,
            0.7685
        ],
        [
            1372291200000,
            0.7671
        ],
        [
            1372377600000,
            0.7687
        ]
    ]);

    // $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {

    if ($('#humidity').length > 0) {
        Highcharts.chart('humidity', {
            chart: {
                zoomType: 'x',
                backgroundColor:'rgba(255, 255, 255, 0.0)'
            },
            title: {
                text: 'Variance of Humidity'
            },
            /*subtitle: {
                text: document.ontouchstart === undefined ?
                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },*/
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Humidity'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, '#0515dd'],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: .5,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Humidity',
                data: data
            }]
        });
    }

    // });
/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Temperature XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/


    // $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {
    if ($('#temperature').length > 0) {
        Highcharts.chart('temperature', {
            chart: {
                zoomType: 'x',
                backgroundColor: 'rgba(255, 255, 255, 0.0)'
            },
            title: {
                text: 'Variance of Temperature'
            },
            /*subtitle: {
                text: document.ontouchstart === undefined ?
                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },*/
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Temperature'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, '#ff000c'],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: .5,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Temperature',
                data: data
            }]
        });
    }
    // });



    /*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX PH XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/


    // $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {
    if ($('#ph').length > 0) {
        Highcharts.chart('ph', {
            chart: {
                zoomType: 'x',
                backgroundColor: 'rgba(255, 255, 255, 0.0)'
            },
            title: {
                text: 'Variance of pH Value'
            },
            /*subtitle: {
                text: document.ontouchstart === undefined ?
                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },*/
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'pH value'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, '#a0ff3e'],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: .5,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'pH Value',
                data: data
            }]
        });
    }
    // });




    /*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Light XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/



    // $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {
    if ($('#light').length > 0) {
        Highcharts.chart('light', {
            chart: {
                zoomType: 'x',
                backgroundColor: 'rgba(255, 255, 255, 0.0)'
            },
            title: {
                text: 'Variance of Light Intensity'
            },
            /*subtitle: {
                text: document.ontouchstart === undefined ?
                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },*/
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Light Intensity'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, '#fffea5'],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: .5,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Light Intensity',
                data: data
            }]
        });
    }
    // });

    /*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Electrical XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/

    // $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {
    if ($('#electrical').length > 0) {
        Highcharts.chart('electrical', {
            chart: {
                zoomType: 'x',
                backgroundColor: 'rgba(255, 255, 255, 0.0)'
            },
            title: {
                text: 'Variance of Electrical Conductivity'
            },
            /*subtitle: {
                text: document.ontouchstart === undefined ?
                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },*/
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Electrical Conductivity'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, '#87fff2'],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: .5,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Electrical Conductivity',
                data: data
            }]
        });
    }
    // });


    /*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX Soil XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/

    // $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {
    if ($('#soil').length > 0) {
        Highcharts.chart('soil', {
            chart: {
                zoomType: 'x',
                backgroundColor: 'rgba(255, 255, 255, 0.0)'
            },
            title: {
                text: 'Variance of SOIL MOISTURE'
            },
            /*subtitle: {
                text: document.ontouchstart === undefined ?
                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },*/
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Soil Moisture'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, '#e88c64'],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: .5,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Soil Moisture',
                data: data
            }]
        });
    }


    // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

    var $range = $(".js-range-slider"),
        $from = $(".js-from"),
        $to = $(".js-to"),
        range,
        min = 0,
        max = 100,
        from = 10,
        to = 70;

    var updateValues = function () {
        $from.prop("value", from);
        $to.prop("value", to);
    };

    $range.ionRangeSlider({
        type: "double",
        min: min,
        max: max,
        from: from,
        to: to,
        prettify_enabled: true,
        grid: true,
        postfix: " Kg/m",
        // grid_num: 10,
        onChange: function (data) {
            from = data.from;
            to = data.to;

            updateValues();
        }
    });

    range = $range.data("ionRangeSlider");

    var updateRange = function () {
        range.update({
            from: from,
            to: to
        });
    };

    $from.on("change", function () {
        from = +$(this).prop("value");
        if (from < min) {
            from = min;
        }
        if (from > to) {
            from = to;
        }

        updateValues();
        updateRange();
    });

    $to.on("change", function () {
        to = +$(this).prop("value");
        if (to > max) {
            to = max;
        }
        if (to < from) {
            to = from;
        }

        updateValues();
        updateRange();
    });




    // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

    $('ul .mega-dropdown-menu').on('click', function(event){
        // The event won't be propagated up to the document NODE and
        // therefore delegated events won't be fired
        event.stopPropagation();
    });






    /*$("#handle1").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        radius: 105,
        width: 16,
        value: 75,
        handleSize: 0,
        handleShape: "square",
        circleShape: "pie",
        startAngle: 315,
        // tooltipFormat: "changeTooltip"
    });
*/
    // function changeTooltip(e) {
    //     var val = e.value, speed;
    //     if (val < 20) speed = "Slow";
    //     else if (val < 40) speed = "Normal";
    //     else if (val < 70) speed = "Speed";
    //     else speed = "Very Speed";
    //
    //     return val + " km/h" + "<div>" + speed + "<div>";
    // }

    $("#handle2").roundSlider({
        sliderType: "min-range",
        radius: 130,
        showTooltip: true,
        width: 16,
        value: 80,
        handleSize: 0,
        handleShape: "square",
        circleShape: "half-top"

    });
    $("#handle2").addClass('custom-rs-handle');
    // $("#handle2 .rs-container").addClass('custom-rs-container');


    $("#handle3").roundSlider({
        sliderType: "min-range",
        radius: 130,
        showTooltip: true,
        width: 16,
        value: 80,
        handleSize: 0,
        handleShape: "square",
        circleShape: "half-top"

    });
    $("#handle2").addClass('custom-rs-handle');









    var htmlTimerLoc = 'h1#timer';
    var htmlStartLoc = 'div#start';
    var min;
    var afterStart; //minute after starting
    var sec;
    var timer;
    var paused;
    var startTimes = 0;
    var totalSec;
    var currentTotalSec;

    $(document).ready(function() {
        min = 25;
        afterStart = min - 1; //minute after starting
        sec = 60;
        timer;
        // running = false;

        $("h3.minutes").text(min);
        $(htmlTimerLoc).text(min + ":00");
    });

    $("div#decrease").click(function() {
        if (min > 1) {
            min -= 1;
            $("h3.minutes").text(min);
        }
    });


// $(document).keydown(function(e) {
//   if(e.which == 37) { // left
//     if (min > 1) {
//     min -= 1;
//     $("span.minutes").text(min);
//   }
//   }
//   else if(e.which == 39) { // right
//       if (min < 60) {
//     min += 1;
//     $("span.minutes").text(min);
//   }
//   }
// });

    $("div#increase").click(function() {
        if (min < 60) {
            min += 1;
            $("h3.minutes").text(min);
        }
    });

//pause and unpause on click of timer
    $(htmlTimerLoc).click(function() {
        //pauses timer
        if (timer != null) {
            clearInterval(timer);
            timer = null;
            paused = true;
        } else {
            //resumes timer
            timer = setInterval(startTimer, 1000);
            paused = false;
        }
    });

//start / restart
    $(htmlStartLoc).click(function() {
        totalSec = min * 60;
        currentTotalSec = 0;
        sec = 60;
        //starts coutdown by going down a minute
        afterStart = min - 1;
        //using start time to keep timer from speeding up
        if (startTimes == 0 || paused === true) {
            timer = setInterval(startTimer, 1000);
            startTimes += 1;
        }  else {
            //if already started once, just starts timer to keep from speeding up faster
            timer();
        }

        paused = false;
    });

    function startTimer() {
        sec -= 1;
        currentTotalSec += 1;
        var percentage = Math.round(currentTotalSec / totalSec * 100);
        if (sec < 10) {
            $(htmlTimerLoc).text(afterStart + ":0" + sec);
        } else {
            $(htmlTimerLoc).text(afterStart + ":" + sec);
        }
        if (afterStart === -1) {
            $(htmlTimerLoc).text("0:00");
            alert("Time is up!");
            clearInterval(timer);
        } else if (sec === 0) {
            afterStart -= 1;
            sec = 60;
        }
        $('div.progress').html('<div class="progress-bar bg-success" role="progressbar" style="width: ' + percentage + '%" aria-valuenow="' + percentage + '" aria-valuemin="0" aria-valuemax="100"></div>');
    }




    // ZZZZZZZZZZZZZZZZZz


    // if (parseInt($('.fan-count').text())) {
    //     var number = parseInt($('.fan-count').text());
    // }
    // else {
    //     var number = 0;
    // }
    //
    // var $number = $('.fan .number');
    //
    // $('.fan .minus').bind('click', function() {
    //     updateNumber(-1);
    // });
    //
    // $('.fan .plus').bind('click', function() {
    //     updateNumber(1);
    // });
    //
    // function updateNumber(value) {
    //     number += value;
    //     $number.find('.fadeOutDown').remove(); // remove old numbers
    //     $number.find('.fadeOutUp').remove(); // remove old numbers
    //     $number.find('span').removeClass(); // clear current number
    //
    //     if (value > 0) { // fadeUp Animation
    //         $number.find('span').addClass('fadeOutUp');
    //         $number.append('<span class="fadeInUp">' + number + '</span>');
    //     } else { // fadeDown Animation
    //         $number.find('span').addClass('fadeOutDown');
    //         $number.append('<span class="fadeInDown">' + number + '</span>');
    //     }
    // }



    // if (parseInt($('.sprinkler-count').text())) {
    //     var numberspi = parseInt($('.sprinkler-count').text());
    // }
    // else {
    //     var numberspi = 0;
    // }
    //
    // var $numberspi = $('.sprinkler .number');
    //
    // $('.sprinkler .minus').bind('click', function() {
    //     updateNumberspi(-1);
    // });
    //
    // $('.sprinkler .plus').bind('click', function() {
    //     updateNumberspi(1);
    // });
    //
    // function updateNumberspi(value) {
    //     numberspi += value;
    //     $numberspi.find('.fadeOutDown').remove(); // remove old numbers
    //     $numberspi.find('.fadeOutUp').remove(); // remove old numbers
    //     $numberspi.find('span').removeClass(); // clear current number
    //
    //     if (value > 0) { // fadeUp Animation
    //         $numberspi.find('span').addClass('fadeOutUp');
    //         $numberspi.append('<span class="fadeInUp">' + numberspi + '</span>');
    //     } else { // fadeDown Animation
    //         $numberspi.find('span').addClass('fadeOutDown');
    //         $numberspi.append('<span class="fadeInDown">' + numberspi + '</span>');
    //     }
    // }



    /*if (parseInt($('.fogger-count').text())) {
        var numberfog = parseInt($('.fogger-count').text());
    }
    else {
        var numberfog = 0;
    }

    var $numberfog = $('.fogger .number');

    $('.fogger .minus').bind('click', function() {
        updateNumberfog(-1);
    });

    $('.fogger .plus').bind('click', function() {
        updateNumberfog(1);
    });

    function updateNumberfog(value) {
        numberfog += value;
        $numberfog.find('.fadeOutDown').remove(); // remove old numbers
        $numberfog.find('.fadeOutUp').remove(); // remove old numbers
        $numberfog.find('span').removeClass(); // clear current number

        if (value > 0) { // fadeUp Animation
            $numberfog.find('span').addClass('fadeOutUp');
            $numberfog.append('<span class="fadeInUp">' + numberfog + '</span>');
        } else { // fadeDown Animation
            $numberfog.find('span').addClass('fadeOutDown');
            $numberfog.append('<span class="fadeInDown">' + numberfog + '</span>');
        }
    }


    if (parseInt($('.hub-counter').text())) {
        var numberhub = parseInt($('.hub-counter').text());
    }
    else {
        var numberhub = 0;
    }

    var $numberhub = $('.hub .number');

    $('.hub .minus').bind('click', function() {
        updatenumberhub(-1);
    });

    $('.hub .plus').bind('click', function() {
        updatenumberhub(1);
    });

    function updatenumberhub(value) {
        numberhub += value;
        $numberhub.find('.fadeOutDown').remove(); // remove old numbers
        $numberhub.find('.fadeOutUp').remove(); // remove old numbers
        $numberhub.find('span').removeClass(); // clear current number

        if (value > 0) { // fadeUp Animation
            $numberhub.find('span').addClass('fadeOutUp');
            $numberhub.append('<span class="fadeInUp">' + numberhub + '</span>');
        } else { // fadeDown Animation
            $numberhub.find('span').addClass('fadeOutDown');
            $numberhub.append('<span class="fadeInDown">' + numberhub + '</span>');
        }
    }



    if (parseInt($('.humidity-counter').text())) {
        var numberhumidity = parseInt($('.humidity-counter').text());
    }
    else {
        var numberhumidity = 0;
    }

    var $numberhumidity = $('.humidity .number');

    $('.humidity .minus').bind('click', function() {
        updatenumberhumidity(-1);
    });

    $('.humidity .plus').bind('click', function() {
        updatenumberhumidity(1);
    });

    function updatenumberhumidity(value) {
        numberhumidity += value;
        $numberhumidity.find('.fadeOutDown').remove(); // remove old numbers
        $numberhumidity.find('.fadeOutUp').remove(); // remove old numbers
        $numberhumidity.find('span').removeClass(); // clear current number

        if (value > 0) { // fadeUp Animation
            $numberhumidity.find('span').addClass('fadeOutUp');
            $numberhumidity.append('<span class="fadeInUp">' + numberhumidity + '</span>');
        } else { // fadeDown Animation
            $numberhumidity.find('span').addClass('fadeOutDown');
            $numberhumidity.append('<span class="fadeInDown">' + numberhumidity + '</span>');
        }
    }


    if (parseInt($('.light-counter').text())) {
        var numberlight = parseInt($('.light-counter').text());
    }
    else {
        var numberlight = 0;
    }

    var $numberlight = $('.light .number');

    $('.light .minus').bind('click', function() {
        updatenumberlight(-1);
    });

    $('.light .plus').bind('click', function() {
        updatenumberlight(1);
    });

    function updatenumberlight(value) {
        numberlight += value;
        $numberlight.find('.fadeOutDown').remove(); // remove old numbers
        $numberlight.find('.fadeOutUp').remove(); // remove old numbers
        $numberlight.find('span').removeClass(); // clear current number

        if (value > 0) { // fadeUp Animation
            $numberlight.find('span').addClass('fadeOutUp');
            $numberlight.append('<span class="fadeInUp">' + numberlight + '</span>');
        } else { // fadeDown Animation
            $numberlight.find('span').addClass('fadeOutDown');
            $numberlight.append('<span class="fadeInDown">' + numberlight + '</span>');
        }
    }

    if (parseInt($('.temperature-counter').text())) {
        var numbertemperature = parseInt($('.temperature-counter').text());
    }
    else {
        var numbertemperature = 0;
    }

    var $numbertemperature = $('.temperature .number');

    $('.temperature .minus').bind('click', function() {
        updatenumbertemperature(-1);
    });

    $('.temperature .plus').bind('click', function() {
        updatenumbertemperature(1);
    });

    function updatenumbertemperature(value) {
        numbertemperature += value;
        $numbertemperature.find('.fadeOutDown').remove(); // remove old numbers
        $numbertemperature.find('.fadeOutUp').remove(); // remove old numbers
        $numbertemperature.find('span').removeClass(); // clear current number

        if (value > 0) { // fadeUp Animation
            $numbertemperature.find('span').addClass('fadeOutUp');
            $numbertemperature.append('<span class="fadeInUp">' + numbertemperature + '</span>');
        } else { // fadeDown Animation
            $numbertemperature.find('span').addClass('fadeOutDown');
            $numbertemperature.append('<span class="fadeInDown">' + numbertemperature + '</span>');
        }
    }


    if (parseInt($('.electrical-counter').text())) {
        var numberelectrical = parseInt($('.electrical-counter').text());
    }
    else {
        var numberelectrical = 0;
    }

    var $numberelectrical = $('.electrical .number');

    $('.electrical .minus').bind('click', function() {
        updatenumberelectrical(-1);
    });

    $('.electrical .plus').bind('click', function() {
        updatenumberelectrical(1);
    });

    function updatenumberelectrical(value) {
        numberelectrical += value;
        $numberelectrical.find('.fadeOutDown').remove(); // remove old numbers
        $numberelectrical.find('.fadeOutUp').remove(); // remove old numbers
        $numberelectrical.find('span').removeClass(); // clear current number

        if (value > 0) { // fadeUp Animation
            $numberelectrical.find('span').addClass('fadeOutUp');
            $numberelectrical.append('<span class="fadeInUp">' + numberelectrical + '</span>');
        } else { // fadeDown Animation
            $numberelectrical.find('span').addClass('fadeOutDown');
            $numberelectrical.append('<span class="fadeInDown">' + numberelectrical + '</span>');
        }
    }

    if (parseInt($('.ph-counter').text())) {
        var numberph = parseInt($('.ph-counter').text());
    }
    else {
        var numberph = 0;
    }

    var $numberph = $('.ph .number');

    $('.ph .minus').bind('click', function() {
        updatenumberph(-1);
    });

    $('.ph .plus').bind('click', function() {
        updatenumberph(1);
    });

    function updatenumberph(value) {
        numberph += value;
        $numberph.find('.fadeOutDown').remove(); // remove old numbers
        $numberph.find('.fadeOutUp').remove(); // remove old numbers
        $numberph.find('span').removeClass(); // clear current number

        if (value > 0) { // fadeUp Animation
            $numberph.find('span').addClass('fadeOutUp');
            $numberph.append('<span class="fadeInUp">' + numberph + '</span>');
        } else { // fadeDown Animation
            $numberph.find('span').addClass('fadeOutDown');
            $numberph.append('<span class="fadeInDown">' + numberph + '</span>');
        }
    }*/





    // $(function() {
    //     $( ".calendar" ).datepicker({
    //         dateFormat: 'dd/mm/yy',
    //         firstDay: 1
    //     });
    //
    //     $('.btn-date-picker').on('click', '.date-picker .input', function(e){
    //         var $me = $(this),
    //             $parent = $me.parents('.date-picker');
    //         $parent.toggleClass('open');
    //     });
    //
    //
    //     $(".calendar").on("change",function(){
    //         var $me = $(this),
    //             $selected = $me.val(),
    //             $parent = $me.parents('.date-picker');
    //         $parent.find('.result').children('span').html($selected);
    //     });
    // });

    $('#date1').datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: "m/d/yy"
    });


});




// $(document).ready(function(){
//     // $(".dropdown").active(
//     //     function() {
//     //         $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
//     //         // $(this).toggleClass('open');
//     //     },
//     //     function() {
//     //         $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
//     //         // $(this).toggleClass('open');
//     //     }
//     // );
//
//     $( ".dropdown" ).click(function() {
//         // jQuery(this).children('.dropdown-menu').toggle("400");
//         // jQuery(this).removeChild('open');
//         // jQuery(this).toggleClass('open');
//         // $('.dropdown-menu').slideUp("400");
//     });
// });




//Just for show
var navtoggle = document.querySelectorAll('#navtoggle')[0]
var deltoggle = document.querySelectorAll('#deletetoggle')[0]

setTimeout(function(){
    deltoggle.checked = true;
}, 300);

setTimeout(function(){
    deltoggle.checked = false;
}, 2000);





