$(document).ready(function() {

  initBook=function(ele){
    // Account for varying window sizes
    var winHeight = $(window).height();
    var winWidth = $(window).width();
    if (winHeight < 800){
      winHeight = '100%';
    }
    else {
      winHeight = '800px'; // change these setting when font size is determined. 
    }                      // Also include making font size smaller via a class
    if (winWidth < 1100){
      winWidth = '100%';
    }
    else {
      winWidth = '1200px';
    }
    
    // Initialize booklet object
    $(ele).booklet({
        closed: true,
        width: winWidth,
        height: winHeight,
        hash: true
    });
  }
  
  
});    