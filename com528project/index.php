<?php include "includes/header.html"; ?>
<body>

<div id="portfolio" class="clear">

  <div>
    <p id="noJS" class="warning">All elements of this portfolio are visible, but viewing it in booklet form requires JavaScript</p>

    <div id="desc">
        <p class="heading">Project:</p>   <p class="item">Portfolio in book form</p>
        <p class="heading">Class:</p>      <p class="item">Document Design</p>
        <p class="heading">Degree:</p>     <p class="item"><a href="http://www.iit.edu/human-sciences/hum/programs/grad/iarc.shtml">M.S., Information Architecture</a></p>
        <p class="heading">University:</p>  <p class="item"><a href="http://www.iit.edu">Illinois Institute of Technology</a></p>
        <p class="clear"></p>
    </div>
  </div>

    <div id="cover">
    </div>


    <div class="left">
        <h2>Table of Contents</h2>
        <?php include "includes/toc-text.html"; ?>
    </div>
    <div class="right no-background">
        <?php include "includes/toc-images.html"; ?>
    </div>

  <!-- INTRO-->
    <div class="left">
    </div>
    <div class="right chapter">
        <img src="/images/chap-intro.png" />
    </div>


    <div class="left">
        <?php include "includes/intro-1.html"; ?>
    </div>
    <div class="right">
        <?php include "includes/intro-2.html"; ?>
    </div>
    <div class="left">
      <?php include "includes/intro-3.html"; ?>
    </div>

 <!-- DRAW LETTERS-->
    <div class="right chapter">
       <img src="/images/chap-letters.png" />
    </div>
    <div class="left">
        <?php include "includes/letters-1.html"?>
        <img src="images/draw-letters-orig.png" />
    </div>
    <div class="right">
        <?php include "includes/letters-2.html"?>
        <img src="images/draw-letters.png" />
    </div>


<!-- WORDS-->
    <div class="left">
    </div>
    <div class="right chapter">
       <img src="/images/chap-words.png" />
    </div>
    <div class="left">
        <?php include "includes/words-intro.html"?>
    </div>
    <div class="right">
        <?php include "includes/words-intro2.html"?>
    </div>
    <div class="left">
        <?php include "includes/words-expansion.comments.html"?>
    </div>
    <div class="right">
        <img src="images/words-1.jpg" />
    </div>
    <div class="left">
        <?php include "includes/words-contraction-comments.html"?>
    </div>
    <div class="right">
        <img src="images/words-2.jpg" />
    </div>


<!-- TEXT -->
    <div class="left">
    </div>
    <div class="right chapter">
       <img src="/images/chap-text.png" />
    </div>
    <div class="left">
        <?php include "includes/text-1.html"?>
    </div>

    <div class="right">
        <?php include "includes/text-2.html"?>
    </div>

    <div class="left">
        <?php include "includes/text-3.html"?>
    </div>

    <div class="right">
        <img src="images/text.png" />
    </div>


<!-- POINT/LINE/PLANE-->
    <div class="left">
    </div>
    <div class="right chapter">
       <img src="/images/chap-plp.png" />
    </div>
    <div class="left">
        <?php include "includes/plp1.html"?>
    </div>
    <div class="right">
        <?php include "includes/plp2.html"?>
        <img src="images/plp-small.jpg" />
    </div>
    <div class="left">
        <h3>point</h3>
        <img class="fit" src="images/point.jpg" />
    </div>
    <div class="right">
        <h3>plane</h3>
        <img class="fit" src="images/plane.jpg" />
    </div>
    <div class="left">
        <h3>line</h3>
        <img class="fit" src="images/line.jpg" />
    </div>


<!-- SYMMETRY/ASYMMETRY-->

    <div class="right chapter">
       <img src="/images/chap-symmetry.png" />
    </div>
    <div class="left">
        <?php include "includes/symmetry.html"?>
        <?php include "includes/symmetry-comments-1.html"?>
    </div>
    <div class="right">
        <img src="images/symmetry.png" />
    </div>    
    <div class="left">
        <?php include "includes/symmetry-comments-2.html"?>
    </div>
    <div class="right">
        <img src="images/asymmetry.png" />
    </div>


 <!-- SCALE -->
    <div class="left">
    </div>
    <div class="right chapter">
       <img src="/images/chap-scale.png" />
    </div>
    <div class="left">
        <?php include "includes/scale-1.html"?>
    </div>
    <div class="right">
        <?php include "includes/scale-2.html"?>
    </div>
 <div class="left">
        <img src="images/scale.png" />
    </div>


 <!-- TEXTURE -->
    <div class="right chapter">
       <img src="/images/chap-texture.png" />
    </div>
    <div class="left">
        <?php include "includes/texture-1.html"?>
    </div>
    <div class="right">
        <?php include "includes/texture-2.html"?>
    </div>
    <div class="left">
        <img id="portrait" src="images/texture-1.jpg" />
    </div>
    <div class="right">
        <img id="portrait" src="images/texture-2.jpg" />
    </div>

 <!-- COLOR -->
    <div class="left">
    </div>
    <div class="right chapter">
       <img src="/images/chap-color.png" />
    </div>
    <div class="left">
        <?php include "includes/color-1.html"?>
        <?php include "includes/color-2.html"?>
    </div>
    <div class="right">
        <img src="images/color.png" />
    </div>


 <!-- FIGURE/GROUND -->
    <div class="left">
    </div>
    <div class="right chapter">
       <img src="/images/chap-figure.png" />
    </div>
    <div class="left">
        <?php include "includes/fg-1.html"?>
    </div>
    <div class="right">
        <?php include "includes/fg-2.html"?>
    </div>
    <div class="left">
      <h3>Stable</h3>
        <img class="fit" src="images/fg-stable.png" />
    </div>
    <div class="right">
      <h3>Reversible</h3>
        <img class="fit" src="images/fg-reversible.png" />
    </div>
    <div class="left">
      <h3>Ambiguous</h3>
        <img class="fit" src="images/fg-ambiguous.png" />
    </div>

  <!-- HIERARCHY -->
    <div class="right chapter">
       <img src="/images/chap-hierarchy.png" />
    </div>
    <div class="left">
        <?php include "includes/hier-1.html"?>
    </div>
    <div class="right">
        <?php include "includes/hier-2.html"?>
    </div>
    <div class="left">
      <h2>Example 1</h2>
        <img class="fit" src="images/hier1.png" />
    </div>
    <div class="right">
      <h2>Example 2</h2>
        <img class="fit" src="images/hier2.png" />
    </div>
    <div class="left">
      <h2>Example 3</h2>
        <img class="fit" src="images/hier3.png" />
    </div>


 <!-- LAYERS -->
    <div class="right chapter">
       <img src="/images/chap-layers.png" />
    </div>
    <div class="left">
        <h1>Layers</h1>
        <?php include "includes/layers.html"?>
    </div>
    <div class="right">
        <img id="layers" src="images/layers.png" />
        <img id="layersHover" class="hide" src="images/layers-hover.png" />
    </div>

  <!-- GRID -->
    <div class="left">
    </div>
    <div class="right chapter">
       <img src="/images/chap-grid.png" />
    </div>
    <div class="left">
        <h1>Grid</h1>
        <?php include "includes/grid.html"?>
    </div>
    <div class="right">
      <h2>Simple</h2>
        <img class="fit" src="images/grid-simple.png" />
    </div>
    <div class="left">
      <h2>Complex</h2>
      <img class="fit" src="images/grid-complex.png" />
    </div>
  
<!--  RULES AND RANDOMNESS-->
    <!-- INTRO-->
    <div class="right chapter">
        <img src="/images/chap-rules.png" />
    </div>
    <div class="left">
        <?php include "includes/rules1.html"; ?>
    </div>

<!--  BACK COVER-->
  <div class="right">
    </div>
  <div id="back-cover">
  </div>

</div>
<nav>
  <a href="/#/page/1">Front cover</a> | <a href="/#/page/3">Table of Contents</a> | <a href="/#/page/77">Back cover</a> | <a href="http://www.christinemcclure.com">Main website</a>
</nav>


  <script>
    $(document).ready(function() {
        //single book
        initBook('#portfolio');
        tocImageListeners();
    });    
  </script>    
</body>
</html>