// Load contents in div
(function($, window, document) { 
$(".tiksetting").click(function(){ 
  event.preventDefault(); 
  var divid = $(this).attr("divsettingid"); 
  $("#"+divid).toggle();   
   
});

}(window.jQuery, window, document)); 