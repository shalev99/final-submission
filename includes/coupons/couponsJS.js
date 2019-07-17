function sendName(couponid) {
    
    var forquery="id="+couponid
    
    $.ajax({
        method: "POST",
        url: "action.php",
        data: forquery,
        cache: true,
        success: function(){
            $("#"+couponid).css('display','none');
        }  
    });
}