
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>

<script>
function ajaxCall() {
    $.ajax({
        url: "detail.php", 
        success: (function (result) {
            $("#div1").html(result);
        })
    })
};

ajaxCall(); 
setInterval(ajaxCall, (2 * 1000)); // x * 1000 to get it in seconds
</script>
<div id="div1"></div> 