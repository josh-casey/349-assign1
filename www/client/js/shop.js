var Shop = (function () {
    "use strict";

    var pub = {};
    

    function purchaseItem() {
        $("#buy").click(function () {
            var buttonVal = $(this).val();
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