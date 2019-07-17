function sendVIP(id) {
    
    var forquery="id="+id
    
    $.ajax({
        method: "POST",
        url: "actionForVIP.php",
        data: forquery,
        cache: true,
        success: function(){
            alert("new VIP added");
        }  
    });
}