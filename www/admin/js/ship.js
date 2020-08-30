var Ship = (function () {
    "use strict";

    var pub = {};
    function toggleShip() {
        $("#toggleShip").click(function() {
            $.ajax({
                dataType: 'json',
                url: 'toggleShip.php',
                success:function(resultData) {
                },
                error: function(data){
                    alert("Ajax Failed");
                }
            });
        })

    }


    pub.setup = function() {
        toggleShip();
    };

    return pub;
}());

$(document).ready(Ship.setup)