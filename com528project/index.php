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
    <p>Intro to portfolio (make look not like book).</p>
  </div>

    <div>
      <img id="cover" src="images/cover.png" />
<!--      need to auto size this to fit div-->
    </div>


    <div> 
        <h2>Table of Contents</h2>
        <?php include "includes/toc-text.html"; ?>
    </div>
    <div> 
        <?php include "includes/toc-images.html"; ?>
    </div>

  <!-- INTRO-->
  <div> 
        <h1>Introduction</h1>
        <?php include "includes/about-me.html"; ?>
    </div>
    <div> 
        <?php include "includes/about-portfolio.html"; ?>
    </div>

 <!-- DRAW LETTERS-->

    <div>
        <h1>Letters</h1>
        <?php include "includes/draw-letters-intro.html"?>
        <img src="images/draw-letters-orig.png" />
    </div>
    <div>
        <img src="images/draw-letters.png" />
        <?php include "includes/draw-letters-comments.html"?>
    </div>


<!-- WORDS-->
    <div>
        <h1>Words</h1>
        <?php include "includes/words-intro.html"?>
    </div>
    <div>
        <h2>Word Choices</h2>
        <?php include "includes/words-intro2.html"?>
    </div>
    <div> 
        <h1>Expansion</h1>
        <?php include "includes/expansion-comments.html"?>
    </div>
    <div>
        <img src="images/words-1.jpg" />
    </div>
    <div>
        <h1>Contraction</h1>
        <?php include "includes/contraction-comments.html"?>
    </div>
    <div>
        <img src="images/words-2.jpg" />
    </div>


<!-- TEXT -->
    <div>
        <h1>Text</h1>
        <?php include "includes/text-intro.html"?>
    </div>

    <div>
        <?php include "includes/text-intro2.html"?>
    </div>

      <div>
        <h1>My Text</h1>
        <?php include "includes/text-comments.html"?>
    </div>

    <div>
        <img src="images/text.png" />
    </div>


<!-- POINT/LINE/PLANE-->
    <div>
        <h1>Point&mdash;Line&mdash;Plane</h1>
        <?php include "includes/plp-intro.html"?>
    </div>
    <div>
        <h1>My Images</h1>
        <?php include "includes/plp-comments.html"?>
        <img src="images/plp-small.jpg" />
    </div>
    <div>
        <h1>Point</h1>
        <img src="images/point.jpg" />
    </div>
    <div>
        <h1>Plane</h1>
        <img src="images/plane.jpg" />
    </div>
    <div>
        <h1>Line</h1>
        <img src="images/line.jpg" />
    </div>

    <div>
      <p class="hide">This page left intentionally blank</p>
    </div>


<!-- SYMMETRY/ASYMMETRY-->
    <div>
        <h1>Symmetry&mdash;Asymmetry</h1>
        <?php include "includes/sym-asym-intro.html"?>
    </div>
    <div>
      <h1>Symmetry</h1>
        <?php include "includes/symmetry-comments.html"?>
    </div>
    <div>
        <img src="images/symmetry.png" />
    </div>    <div>
        <h1>Asymmetry</h1>
        <?php include "includes/asymmetry-comments.html"?>
    </div>
    <div>
        <img src="images/asymmetry.png" />
    </div>


 <!-- SCALE -->

    <div>
        <h1>Scale</h1>
        <?php include "includes/scale-intro.html"?>
    </div>
    <div>
        <?php include "includes/scale-comments.html"?>
    </div>
    <div>
        <img id="portrait" src="images/scale.jpg" />
    </div>


 <!-- TEXTURE -->

    <div>
        <h1>Texture</h1>
        <?php include "includes/texture-intro.html"?>
    </div>
    <div>
        <?php include "includes/texture-comments.html"?>
    </div>
    <div>
        <img id="portrait" src="images/texture-1.jpg" />
    </div>
    <div>
        <img id="portrait" src="images/texture-2.jpg" />
    </div>

 <!-- COLOR -->

    <div>
        <h1>Color</h1>
        <?php include "includes/color-intro.html"?>
    </div>
    <div>
        <?php include "includes/color-comments.html"?>
    </div>
    <div>
        <img src="images/color.png" />
    </div>


 <!-- FIGURE/GROUND -->

    <div>
        <h1>Figure&mdash;Ground</h1>
        <?php include "includes/fg-intro.html"?>
    </div>
    <div>
        <?php include "includes/fg-comments.html"?>
    </div>
    <div>
      <h1>Stable</h1>
        <img src="images/fg-stable.png" />
    </div>
    <div>
      <h1>Reversible</h1>
        <img src="images/fg-reversible.png" />
    </div>
    <div>
      <h1>Ambiguous</h1>
        <img src="images/fg-ambiguous.png" />
    </div>




  <div>
     <h1>Back cover</h1>
  </div>
</div>

  <script>
    $(document).ready(function() {
        //single book
        initBook('#portfolio');
        tocImageListeners();
    });    
  </script>    
</body>
</html>