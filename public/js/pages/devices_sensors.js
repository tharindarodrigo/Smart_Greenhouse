var devSensor = {
    loadTemplate: function () {
        $('#formGh').on('submit', function (e) {
            e.preventDefault(e);
            // $('#loading').addClass('ajax-loading');
            $('.flexContainer').addClass('loading');

            $.ajax({
                url: create_gh + '?plant=' + $('#txtPlant').val() + '&width=' + $('#txtWidth').val() + '&height=' + $('#txtHeight').val(),
                type: 'GET',
                success: function (data) {
                    $("#devicesSensors").html(data);
                    devSensor.test();

                    setTimeout(function () {
                        // $("#loading").removeClass('ajax-loading');
                        $('.flexContainer').removeClass('loading');
                    }, 2500);
                },
                error: function (data) {
                    // console.log('error');
                    console.log(data);

                    setTimeout(function () {
                        // $("#loading").removeClass('ajax-loading');
                        $('.flexContainer').removeClass('loading');
                    }, 3500);
                    // $('#message').html(data.responseJSON.error);
                },
            });
        });
    },
    updateNumber: function (type, value) {

        // console.log(type, value);
        //alert('.'+type+' .number');
        $number = $('.'+type+' .number');
        console.log($number);
        devSensor.number[type] += value;
        $number.find('.fadeOutDown').remove(); // remove old numbers
        $number.find('.fadeOutUp').remove(); // remove old numbers
        $number.find('span').removeClass(); // clear current number

        if (value > 0) { // fadeUp Animation
            $number.find('span').addClass('fadeOutUp');
            $number.append('<span class="fadeInUp">' + devSensor.number[type] + '</span>');
        } else { // fadeDown Animation
            $number.find('span').addClass('fadeOutDown');
            $number.append('<span class="fadeInDown">' + devSensor.number[type] + '</span>');
        }
    },
    number: {
        'fan': 0,
        'sprinkler': 0,
        'hub':0,
        'humidity':0,
        'light':0,
        'temperature':0,
        'electrical':0,
        'ph':0
    },
    test: function () {
        if (parseInt($('.fan-count').text())) {
            devSensor.number['fan'] = parseInt($('.fan-count').text());
        }
        if (parseInt($('.sprinkler-count').text())) {
            devSensor.number['sprinkler'] = parseInt($('.sprinkler-count').text());
        }
        if (parseInt($('.hub-count').text())) {
            devSensor.number['hub'] = parseInt($('.hub-count').text());
        }
        if (parseInt($('.humidity-count').text())) {
            devSensor.number['humidity'] = parseInt($('.humidity-count').text());
        }
        if (parseInt($('.light-count').text())) {
            devSensor.number['light'] = parseInt($('.light-count').text());
        }
        if (parseInt($('.temperature-count').text())) {
            devSensor.number['temperature'] = parseInt($('.temperature-count').text());
        }
        if (parseInt($('.electrical-count').text())) {
            devSensor.number['electrical'] = parseInt($('.electrical-count').text());
        }
        if (parseInt($('.ph-count').text())) {
            devSensor.number['ph'] = parseInt($('.ph-count').text());
        }
        $('.minus').bind('click', function () {
            var type = '';
            if ($(this).hasClass('fan')) {
                type = 'fan';
            } else if ($(this).hasClass('sprinkler')) {
                type = 'sprinkler';
            }else if ($(this).hasClass('hub')) {
                type = 'hub';
            }else if ($(this).hasClass('humidity')) {
                type = 'humidity';
            }else if ($(this).hasClass('light')) {
                type = 'light';
            }else if ($(this).hasClass('temperature')) {
                type = 'temperature';
            }else if ($(this).hasClass('electrical')) {
                type = 'electrical';
            }else if ($(this).hasClass('ph')) {
                type = 'ph';
            }

            devSensor.updateNumber(type, -1);
        });

        $('.plus').bind('click', function () {
            var type = '';
            if ($(this).hasClass('fan')) {
                type = 'fan';
            } else if ($(this).hasClass('sprinkler')) {
                type = 'sprinkler';
            }else if ($(this).hasClass('hub')) {
                type = 'hub';
            }else if ($(this).hasClass('humidity')) {
                type = 'humidity';
            }else if ($(this).hasClass('light')) {
                type = 'light';
            }else if ($(this).hasClass('temperature')) {
                type = 'temperature';
            }else if ($(this).hasClass('electrical')) {
                type = 'electrical';
            }else if ($(this).hasClass('ph')) {
                type = 'ph';
            }

            devSensor.updateNumber(type, 1);
        });
    },
    init: function () {
        devSensor.loadTemplate();

        devSensor.test();

    }
}
$(document).ready(function () {
    devSensor.init();
});




// $('#formGh')
//     .on('submit', function (e) {
//         e.preventDefault(e);
//         // $('#message').addClass('hidden');
//         //
//         //     $("#loading").addClass('ajax-loading');
// alert(host);
// alert('test');
//             // $.ajax({
//             //     url: host+'/add',
//             //     type: 'POST',
//             //     data: $(this).serialize(),
//             //     success: function (data) {
//             //         $("#loading").removeClass('ajax-loading');
//             //     },
//             //     error: function (data) {
//             //         $("#loading").removeClass('ajax-loading');
//             //
//             //         $('#message').html(data.responseJSON.error);
//             //     },
//             // });
//
//     });
