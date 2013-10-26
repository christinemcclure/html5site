$(document).ready(function() {

  initBook=function(ele){
    // Account for varying window sizes
    var winHeight = $(window).height();
    var winWidth = $(window).width();
//    alert('height: '+winHeight+' width: '+winWidth);
 
    if ((winHeight < 550) || (winWidth < 800)){
      return; // don't initialize for small screens
    }

    winHeight='80%';
    winWidth='80%';

    
    // Initialize booklet object
    $(ele).booklet({
        closed: true,
        width: winWidth,
        height: winHeight,
        hash: true
    });
  }
  
  
});    