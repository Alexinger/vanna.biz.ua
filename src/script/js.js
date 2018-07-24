/**
 * Created by Александр on 31.10.2017.
 */
$(document).ready(function() {
    $('#form-restavrator').submit(function() {
        var vid = 'реставрация';
        var name = $("#name").val();
        var phone = $("#phone").val();
        var quession = $("#quession").val();
        var email = $("#email").val();
        var city = $("#city").val();
        var http = new XMLHttpRequest();
        var url = "https://script.google.com/macros/s/AKfycbwF90i6TZiG-FFpeUjcMFtU-H0oeqoenaEHyh_mMpfUHtQNF9HG/exec";
        var params = "p1="+name+"&p2="+phone+"&p3="+city+"&p4="+email+"&p5="+quession+"&p6="+vid;
        http.open("GET", url+"?"+params, true);
        http.onreadystatechange = function() {
            if(http.readyState == 4 && http.status == 200) {
                // alert(http.responseText);
            }
        };
        http.send(null);
    });

    $('#form-vanna').submit(function() {
        var vid = 'ванна в ванну';
        var names = $("#names").val();
        var phones = $("#phones").val();
        var quessions = $("#quessions").val();
        var emails = $("#emails").val();
        var citys = $("#citys").val();
        var http = new XMLHttpRequest();
        var url = "https://script.google.com/macros/s/AKfycbwF90i6TZiG-FFpeUjcMFtU-H0oeqoenaEHyh_mMpfUHtQNF9HG/exec";
        var paramss = "p1="+names+"&p2="+phones+"&p3="+citys+"&p4="+emails+"&p5="+quessions+"&p6="+vid;
        http.open("GET", url+"?"+paramss, true);
        http.onreadystatechange = function() {
            if(http.readyState == 4 && http.status == 200) {
                // alert(http.responseText);
            }
        };
        http.send(null);
    });

    // Initialize collapsible
    // $('.collapse').collapse();

    // Initialize tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Onclick .card-restavrator
    $('.card-restavrator button').on('click', function () {
        $('.card-restavrator').hide();
        $('.card-restavrator-order').show();
    });
    $('.btn-back').on('click', function () {
        $('.card-restavrator').show();
        $('.card-restavrator-order').hide();
    });

    // Onclick .card-vanna-v-vanna
    $('.card-vanna-v-vanna button').on('click', function () {
        $('.card-vanna-v-vanna').hide();
        $('.card-vanna-v-vanna-order').show();
    });
    $('.btn-vanna-back').on('click', function () {
        $('.card-vanna-v-vanna').show();
        $('.card-vanna-v-vanna-order').hide();
    });


});

