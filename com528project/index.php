<?php include "includes/header.html"; ?>
<body>
<!--
<nav id="main">
  <ul>
    <li><a href="http://www.christinemcclure.com">Website</a></li>
    <li><a title="Front Cover" href="#/page/1"><img src="images/ico-front.png" /></a></li>
    <li><a title="Table of Contents" href="#/page/3"><img src="images/ico-toc.png" /></a></li>
    <li><a title="Back Cover" href="#/page/45"><img src="images/ico-back.png" /></a></li>
        NOTE: This will need updating with each new page added. 
  </ul>
</nav>-->

<div id="portfolio" class="clear">

  <div id="not-a-page">
        <p id="noJS">All elements of this portfolio are visible, but viewing it in booklet form requires JavaScript</p>
    <p id="desc">This portfolio consists of various assignments from a Document Design class I took as part of the <br/>
      <a href="http://www.iit.edu/human-sciences/hum/programs/grad/iarc.shtml">Information Architecture</a> curriculum at 
      <a href="http://www.iit.edu">Illinois Institute of Technology</a>.</p>
  </div>

    <div id="cover">
    </div>


    <div class="left">
        <h2>Table of Contents</h2>
        <?php include "includes/toc-text.html"; ?>
    </div>
    <div class="right">
        <?php include "includes/toc-images.html"; ?>
    </div>

  <!-- INTRO-->
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right chapter">
        (image for introduction chapter)
    </div>


    <div class="left">
        <?php include "includes/about-me.html"; ?>
    </div>
    <div class="right">
        <?php include "includes/about-portfolio.html"; ?>
    </div>

 <!-- DRAW LETTERS-->
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right chapter">
       <img src="/images/chap-letters.png" />
    </div>
    <div class="left">
        <h1>Letters</h1>
        <?php include "includes/draw-letters-intro.html"?>
        <img src="images/draw-letters-orig.png" />
    </div>
    <div class="right">
        <img src="images/draw-letters.png" />
        <?php include "includes/draw-letters-comments.html"?>
    </div>


<!-- WORDS-->
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right chapter">
       <img src="/images/chap-words.png" />
    </div>
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right">
      <h1>Words</h1>
        <?php include "includes/words-intro.html"?>
        <h2>Word Choices</h2>
        <?php include "includes/words-intro2.html"?>
    </div>
    <div class="left">
        <h1>Expansion</h1>
        <?php include "includes/expansion-comments.html"?>
    </div>
    <div class="right">
        <img src="images/words-1.jpg" />
    </div>
    <div class="left">
        <h1>Contraction</h1>
        <?php include "includes/contraction-comments.html"?>
    </div>
    <div class="right">
        <img src="images/words-2.jpg" />
    </div>


<!-- TEXT -->
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right chapter">
       <img src="/images/chap-text.png" />
    </div>
    <div class="left">
        <h1>Text</h1>
        <?php include "includes/text-intro.html"?>
    </div>

    <div class="right">
        <?php include "includes/text-intro2.html"?>
    </div>

    <div class="left">
        <h1>My Text</h1>
        <?php include "includes/text-comments.html"?>
    </div>

    <div class="right">
        <img src="images/text.png" />
    </div>


<!-- POINT/LINE/PLANE-->
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right chapter">
       <img src="/images/chap-plp.png" />
    </div>
    <div class="left">
        <h1>Point&mdash;Line&mdash;Plane</h1>
        <?php include "includes/plp-intro.html"?>
        <h1>My Images</h1>
        <?php include "includes/plp-comments.html"?>
        <img src="images/plp-small.jpg" />
    </div>
    <div class="right">
        <h1>Point</h1>
        <img class="fit" src="images/point.jpg" />
    </div>
    <div class="left">
        <h1>Plane</h1>
        <img class="fit" src="images/plane.jpg" />
    </div>
    <div class="right">
        <h1>Line</h1>
        <img class="fit" src="images/line.jpg" />
    </div>



<!-- SYMMETRY/ASYMMETRY-->
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right chapter">
       <img src="/images/chap-symmetry.png" />
    </div>
    <div class="left">
        <?php include "includes/sym-asym-intro.html"?>
      <h1>Symmetry</h1>
        <?php include "includes/symmetry-comments.html"?>
    </div>
    <div class="right">
        <img src="images/symmetry.png" />
    </div>    
    <div class="left">
        <h1>Asymmetry</h1>
        <?php include "includes/asymmetry-comments.html"?>
    </div>
    <div class="right">
        <img src="images/asymmetry.png" />
    </div>


 <!-- SCALE -->
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right chapter">
       <img src="/images/chap-scale.png" />
    </div>
    <div class="left">
        <h1>Scale</h1>
        <?php include "includes/scale-intro.html"?>
        <?php include "includes/scale-comments.html"?>
    </div>
    <div class="right">
        <img src="images/scale.png" />
    </div>


 <!-- TEXTURE -->
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right chapter">
       <img src="/images/chap-texture.png" />
    </div>
    <div class="left">
        <h1>Texture</h1>
        <?php include "includes/texture-intro.html"?>
    </div>
    <div class="right">
        <?php include "includes/texture-comments.html"?>
    </div>
    <div class="left">
        <img id="portrait" src="images/texture-1.jpg" />
    </div>
    <div class="right">
        <img id="portrait" src="images/texture-2.jpg" />
    </div>

 <!-- COLOR -->
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right">
        (image for color chapter)
    </div>
    <div class="left">
        <h1>Color</h1>
        <?php include "includes/color-intro.html"?>
        <?php include "includes/color-comments.html"?>
    </div>
    <div class="right">
        <img src="images/color.png" />
    </div>


 <!-- FIGURE/GROUND -->
    <div class="left">
      <img src="/images/paper.png" />
    </div>
    <div class="right">
        (image for figure/ground chapter)
    </div>
    <div class="left">
        <h1>Figure&mdash;Ground</h1>
        <?php include "includes/fg-intro.html"?>
    </div>
    <div class="right">
        <?php include "includes/fg-comments.html"?>
    </div>
    <div class="left">
      <h2>Stable</h2>
        <img class="fit" src="images/fg-stable.png" />
    </div>
    <div class="right">
      <h2>Reversible</h2>
        <img class="fit" src="images/fg-reversible.png" />
    </div>
    <div class="left">
      <h2>Ambiguous</h2>
        <img class="fit" src="images/fg-ambiguous.png" />
    </div>

    <div class="right">
      <img src="/images/paper.png" />
    </div>
  <div id="back-cover">
  </div>

</div>
<nav>
  <a href="/#/page/1">Front cover</a> | <a href="/#/page/3">Table of Contents</a> | <a href="/#/page/61">Back cover</a> | <a href="http://www.christinemcclure.com">Main website</a>
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