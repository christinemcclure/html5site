<?php include "includes/header.html"; ?>
<body>
<nav id="main">
  <ul>
    <li><a href="http://www.christinemcclure.com">Website</a></li>
    <li><a title="Front Cover" href="#/page/1"><img src="images/ico-front.png" /></a></li>
    <li><a title="Table of Contents" href="#/page/3"><img src="images/ico-toc.png" /></a></li>
    <li><a title="Back Cover" href="#/page/31"><img src="images/ico-back.png" /></a></li> 
<!--        NOTE: This will need updating with each new page added. -->
  </ul>
</nav>
<div id="portfolio" class="clear">
    <div> 
      <h1>Christine McClure - Portfolio</h1>
      <p id="noJS">All elements of this portfolio are visible, but viewing it in
      booklet form requires JavaScript and a minimum screen size of 800x550 pixels.</p>
      <p>(Image or logo placeholder)</p>
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
        <h2>Introduction</h2>
        <?php include "includes/about-me.html"; ?>
    </div>
    <div> 
        <h2>Introduction</h2>
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
        <h2>Contraction</h2>
        <?php include "includes/contraction-comments.html"?>
    </div>
    <div>
        <img src="images/words-2.jpg" />
    </div>


<!-- TEXT -->
    <div>
        <h2>Text</h2>
        <?php include "includes/text-intro.html"?>
    </div>

    <div>
        <h2>Quote to use</h2>
        <?php include "includes/text-intro2.html"?>
    </div>

      <div>
        <h2>My Text</h2>
        <?php include "includes/text-comments.html"?>
    </div>

    <div>
        <img src="images/text.png" />
    </div>


<!-- POINT/LINE/PLANE-->
    <div>
        <h2>Point/Line/Plane</h2>
        <?php include "includes/plp-intro.html"?>
    </div>
    <div>
        <h2>My Images</h2>
        <?php include "includes/plp-comments.html"?>
        <img src="images/plp-small.jpg" />
    </div>
    <div>
        <h2>Point</h2>
        <img src="images/point.jpg" />
    </div>
    <div>
        <h2>Plane</h2>
        <img src="images/plane.jpg" />
    </div>
    <div>
        <h2>Line</h2>
        <img src="images/line.jpg" />
    </div>

    <div>
      <p class="hide">This page left intentionally blank</p>
    </div>


<!-- SYMMETRY/ASYMMETRY-->
    <div>
        <h2>Symmetry/Asymmetry</h2>
        <h4>Symmetry</h4>
        <?php include "includes/symmetry-intro.html"?>
    </div>
    <div>
        <h4>Asymmetry</h4>
        <?php include "includes/asymmetry-intro.html"?>
    </div>
    <div>
      <h2>Symmetry</h2>
        <?php include "includes/symmetry-comments.html"?>
    </div>
    <div>
        <h2>Symmetry</h2>
        <img src="images/symmetry.png" />
    </div>    <div>
        <h2>Asymmetry</h2>
        <?php include "includes/asymmetry-comments.html"?>
    </div>
    <div>
        <h2>Asymmetry</h2>
        <img src="images/asymmetry.png" />
    </div>
  <div>
        <h2>Back cover</h2>
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