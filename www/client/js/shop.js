var Shop = (function () {
    "use strict";

    var pub = {};
    

    function purchaseItem() {
        $(".button").click(function () {
            var buttonVal = $(".product-name").val();
            var ajaxurl = 'ajax.php',
            data = {'action': buttonVal};
            $.post(ajaxurl, data, function(respose) {
                alert("action performed success");
            });
        });
    };


    pub.setup = function() {
        purchaseItem();
    };

    return pub;
}());

$(document).ready(Shop.setup)