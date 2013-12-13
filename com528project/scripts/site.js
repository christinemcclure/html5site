$(document).ready(function() {

// arrary of element stub names to use for ToC images and text
var tocImages = new Array ('intro','letters','words','text','plp','symmAsymm',
  'scale','texture','color','fg', 'hier', 'layers', 'grid', 'rules');

  initBook=function(ele){
    // Account for varying window sizes
    var winHeight = $(window).height();
    var winWidth = $(window).width();
    var minWin = 900;
    var aspectRatio = Math.round((winWidth/winHeight)*100)/100;
    var limit = 2.38;
//    alert('width: '+ winWidth + ' height: '+winHeight +' aspect ratio: ' + aspectRatio);
 
    if ( (winWidth < minWin) || (winHeight < winWidth/limit) ){
//    alert(winHeight +' width/'+limit + winWidth/limit);
      $('#noJS').text('All elements of this portfolio are visible, but viewing it in booklet form requires a screen width of at least ' + minWin + ' pixels wide and '+
        'a maximum height-to-width ratio of 1 to '+ limit+ '. Your browser is '+ winWidth + ' pixels wide with a height-to-width ratio is  1 to ' +
        aspectRatio +'.');
      $('body').addClass('noPortfolio');
      return; // don't initialize for small screens or portrait mode
    }

    winHeight = winWidth/2.4;

    // remove no JS/size message
    $('p#noJS').addClass('hide');

    var winPadding = 40; // show page edges
    winHeight -= winPadding;
    winWidth = winHeight*2.25; // keep aspect ratio same regardless of monitor size

    
    // Initialize booklet object
    $(ele).booklet({
        closed: false,
        width: winWidth,
        height: winHeight,
        arrows: true,
        pageNumbers: false,
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


$("#rollover").hover(
  function() {
  $("#layers").addClass("hide");
  $("#layersHover").removeClass('hide');


  }, function() {
  $("#layersHover").addClass("hide");
  $("#layers").removeClass('hide');
  }
);

  
});    