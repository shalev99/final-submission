$(document).ready(function(){
    $.getJSON("couponnames.json",function(data){
      $("#1").html(data.names[0]);
      $("#2").html(data.names[1]);
      $("#3").html(data.names[2]);
      $("#4").html(data.names[3]);
      $("#5").html(data.names[4]);

    });
})