$(document).ready(function() {

// arrary of element stub names to use for ToC images and text
var tocImages = new Array ('intro','letters','words','text','plp','symmAsymm',
  'scale','texture','color','fg');

  initBook=function(ele){
    // Account for varying window sizes
    var winHeight = $(window).height();
    var winWidth = $(window).width();
//    alert('height: '+winHeight+' width: '+winWidth);
 
    if ((winHeight < 520) || (winWidth < 780)){
      return; // don't initialize for small screens
    }

    // remove no JS/size message
    $('p#noJS').addClass('hide');

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


imageHighlightOn=function(elementStub){
  $('#'+elementStub+'Img').fadeIn();
}

imageHighlightOff=function(elementStub){
  $('#'+elementStub+'Img').fadeOut();
}

tocImageListeners=function(){
  tocImages.forEach(function(eleStub){
    $('#'+eleStub+'Link').hover(
      function(){
        imageHighlightOn(eleStub);
      }, function(){
        imageHighlightOff(eleStub);
      }
    )
  })
}


//$("#introLink").hover(
//  function() {
//    $("#introImg").addClass("hover");
//    $("#introImg").fadeIn('slow');
//
//
//  }, function() {
//    $("#introImg").fadeOut('slow');
//    $("#introImg").removeClass("hover");
//  }
//);
//
  
});    