<?php include "header.html"; ?>
<body>

<div id="portfolio">
    <div> 
      <h1>Christine McClure - Portfolio</h1>
      <p>(Image or logo placeholder)</p>
    </div>
    <div> 
        <h2>Table of Contents</h2>
        <?php include "toc.html"; ?>
    </div>
    <div> 
        <h2>Introduction</h2>
        <?php include "introduction.html"; ?>
    </div>
    <div> 
        <h2>Draw Letters</h2>
        <img src="images/draw-letters.jpg" />
    </div>
    <div> 
        <h2>Words</h2>
        <img src="images/words-1.jpg" />
        <img src="images/words-2.jpg" />
    </div>
</div>

  <script>
    $(document).ready(function() {
        //single book
        initBook('#portfolio');
    });    
  </script>    
</body>
</html>