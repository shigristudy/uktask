//@prepros-prepend libs/bootstrap.min.js



$(function() { $("#colldate").datepicker({  minDate: '0'}); });


/*chrome anchor bug fixed*/

$(document).ready(function () {
        var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
        if (window.location.hash && isChrome) {
            setTimeout(function () {
                var hash = window.location.hash;
                window.location.hash = "";
                window.location.hash = hash;
            }, 300);
        }
    });

