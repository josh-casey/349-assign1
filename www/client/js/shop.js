var Shop = (function () {
    "use strict";

    var pub = {};
    var cartData = window.localStorage.getItem('cart');

    pub.setup = function() {
        $.ajax({
            type: "POST",
            url: 'processCartContents.php',
            cache: false,
            data: cartData,
            datatype: 'JSON',
            contentType: "application/json; charset=utf-8",
            success: function(data) {
                // do something with html later
                //$("#order").html(data);
                window.localStorage.clear();
            },

            error: function(data){
                alert("Ajax Failed");
            }
        });
    };

    return pub;
}());

$(document).ready(Shop.setup)