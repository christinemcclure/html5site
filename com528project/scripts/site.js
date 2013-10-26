$(document).ready(function() {

  initBook=function(ele){
    // Account for varying window sizes
    var winHeight = $(window).height();
    var winWidth = $(window).width();
//    alert('height: '+winHeight+' width: '+winWidth);
 
    if ((winHeight < 550) || (winWidth < 800)){
      return; // don't initialize for small screens
    }

    if (winHeight > 1200)
      winHeight = 900;
    else
      winHeight= 480;

    winWidth=winHeight*2;

    
    // Initialize booklet object
    $(ele).booklet({
        closed: true,
        width: winWidth,
        height: winHeight,
        hash: true
    });
  }
  
  
});    