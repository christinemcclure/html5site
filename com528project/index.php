<?php include "includes/header.html"; ?>
<body>

<div id="portfolio" class="clear">

  <div>
    <p id="noJS" class="warning">All elements of this portfolio are visible, but viewing it in booklet form requires JavaScript</p>

    <div id="desc">
        <p class="heading">Project:</p>   <p class="item">Portfolio book</p>
        <p class="heading">Class:</p>      <p class="item">Document Design</p>
        <p class="heading">Semester:</p>      <p class="item">Fall 2013</p>
        <p class="heading">Degree:</p>     <p class="item"><a href="http://www.iit.edu/human-sciences/hum/programs/grad/iarc.shtml">M.S., Information Architecture</a></p>
        <p class="heading">University:</p>  <p class="item"><a href="http://www.iit.edu">Illinois Institute of Technology</a></p>
        <p class="clear"></p>
    </div>
  </div>

    <div id="cover">
    </div>


    <div class="left">
        <h1>Table of Contents</h1>
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
        <img class="small" src="images/scale.jpg" />
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
        <img class="small" src="images/hier1.png" />
    </div>
    <div class="right">
      <h2>Example 2</h2>
        <img class="small" src="images/hier2.png" />
    </div>
    <div class="left">
      <h2>Example 3</h2>
        <img class="small" src="images/hier3.png" />
    </div>


 <!-- LAYERS -->
    <div class="right chapter">
       <img src="/images/chap-layers.png" />
    </div>
    <div class="left">
        <?php include "includes/layers.html"?>
    </div>
    <div class="right">
        <img class="fit" id="layers" src="images/layers.png" />
        <img class="fit hide" id="layersHover" src="images/layers-hover.png" />
        <p id="rollover">Hover image</p>
    </div>

  <!-- GRID -->
    <div class="left">
    </div>
    <div class="right chapter">
       <img src="/images/chap-grid.png" />
    </div>
    <div class="left">
        <?php include "includes/grid.html"?>
    </div>
    <div class="right">
      <h3>simple</h3>
        <img class="fit" src="images/grid-simple.png" />
    </div>
    <div class="left">
      <h3>complex</h3>
      <img class="fit" src="images/grid-complex.png" />
    </div>
  
<!--  RULES AND RANDOMNESS-->
    <!-- INTRO-->
    <div class="right chapter">
        <img src="/images/chap-rules.png" />
    </div>
    <div class="left text-heavy">
        <?php include "includes/rules1.html"; ?>
    </div>
    <div class="right text-heavy">
        <?php include "includes/rules2.html"; ?>
    </div>

    <!--  BACK COVER-->
  <div id="back-cover">
    <h1>early reviews for "portfolio"</h1>
    <h4>James Maciukenas, Ph.D.</h4>
    <p>professor and taskmaster</p>
    <blockquote class="review">
      "Another great result driven by careful analysis, review, and editing what is 
      necessary to shape the final composition. [...] Well done."
    </blockquote>
    <h4>Pete Valavanis</h4>
    <p>spouse and E.E. Cummings fan</p>
    <blockquote class="review">"very, very cool."</blockquote>
    <h4>Yvonne McClure</h4>
    <p>skeptical parent</p>
    <blockquote class="review">"What's this degree you're getting again?"</blockquote>
    <p class="copyright">&copy;2013 Christine McClure (design and content)</p>
  </div>

</div>
<nav>
  <a href="/#/page/1">Front cover</a>  | <a href="/#/page/3">Table of Contents</a> | <a href="/#/page/77">Back cover</a> | <a href="http://www.christinemcclure.com">Main website</a>
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